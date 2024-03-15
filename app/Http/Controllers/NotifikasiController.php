<?php

namespace App\Http\Controllers;

use App\Models\Komplain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifikasiController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        return view('notification', [
            'komplain' => Komplain::where('user_id', $user_id)
                ->where(function ($query) {
                    $query->where('status', 'Belum selesai')
                        ->orWhere('status', 'Tertunda');
                })
                ->orderBy('created_at', 'desc')
                ->get()
        ]);
    }
}
