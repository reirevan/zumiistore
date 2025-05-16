<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameAccountController extends Controller
{
    // Mengambil nickname berdasarkan user_id dan server_id
    public function getNickname(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string',
            'server_id' => 'required|string',
        ]);

        $user_id = strtolower(trim($request->input('user_id')));
        $server_id = strtolower(trim($request->input('server_id')));

        $gameAccount = DB::table('game_accounts')
            ->whereRaw('LOWER(user_id) = ?', [$user_id])
            ->whereRaw('LOWER(server_id) = ?', [$server_id])
            ->first();

        if ($gameAccount) {
            return response()->json([
                'nickname' => $gameAccount->nickname,
                'status' => 'success',
                'message' => 'Nickname ditemukan.'
            ]);
        }

        return response()->json([
            'nickname' => null,
            'status' => 'not_found',
            'message' => 'Akun game tidak ditemukan.'
        ], 404);
    }

    public function listGameAccounts(Request $request)
    {
        // Ambil semua record dari tabel game_accounts
        $accounts = DB::table('game_accounts')
            ->get(['id', 'game', 'nickname', 'user_id', 'server_id']);

        return response()->json($accounts);
    }

    // Menyimpan akun game baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'game'       => 'required|string|max:255', // Tambahkan validasi untuk game
            'user_id'    => 'required|string|max:255',
            'server_id'  => 'required|string|max:255',
            'nickname'   => 'required|string|max:255',
        ]);

        // Cek apakah data akun game dengan user_id dan server_id yang sama sudah ada
        $existing = DB::table('game_accounts')
            ->where('user_id', $validated['user_id'])
            ->where('server_id', $validated['server_id'])
            ->first();

        if ($existing) {
            return response()->json([
                'status' => 'error',
                'message' => 'Akun game sudah pernah disimpan.',
            ], 409);
        }

        // Simpan data baru
        DB::table('game_accounts')->insert([
            'game'       => $validated['game'], // Simpan nama game
            'user_id'    => $validated['user_id'],
            'server_id'  => $validated['server_id'],
            'nickname'   => $validated['nickname'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'Akun game berhasil ditambahkan.',
        ]);
    }


    // Memperbarui nickname akun game
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nickname' => 'required|string|max:255',
        ]);

        $exists = DB::table('game_accounts')->where('id', $id)->exists();

        if ($exists) {
            DB::table('game_accounts')
                ->where('id', $id)
                ->update([
                    'nickname' => $validated['nickname'],
                    'updated_at' => now(),
                ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Akun game berhasil diperbarui.'
            ]);
        }

        return response()->json([
            'status' => 'not_found',
            'message' => 'Akun game tidak ditemukan.'
        ]);
    }

    // Menghapus akun game berdasarkan ID
    public function destroy($id)
    {
        $deleted = DB::table('game_accounts')->where('id', $id)->delete();

        return $deleted
            ? response()->json([
                'status' => 'success',
                'message' => 'Akun game berhasil dihapus.'
            ])
            : response()->json([
                'status' => 'not_found',
                'message' => 'Akun game tidak ditemukan.'
            ]);
    }
}
