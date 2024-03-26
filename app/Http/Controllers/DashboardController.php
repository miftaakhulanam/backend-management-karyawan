<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Komplain;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        $now = Carbon::now();
        $formattedDate = $now->translatedFormat('l j M Y');

        return view('index', [
            'formattedDate' => $formattedDate,
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
