<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameAccountController extends Controller
{
    public function getNickname(Request $request)
    {
        $user_id = $request->input('user_id');
        $server_id = $request->input('server_id');

        // Cari data game account berdasarkan ID Game & Server ID
        $gameAccount = DB::table('game_accounts')
            ->where('user_id', $user_id)
            ->where('server_id', $server_id)
            ->first();

        if ($gameAccount) {
            return response()->json([
                'nickname' => $gameAccount->nickname,
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'nickname' => null,
                'status' => 'not_found'
            ]);
        }
    }
}
