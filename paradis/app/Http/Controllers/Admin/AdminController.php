<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $nbr_users = User::where('is_admin', '!=', 1)->get()->count();
        $nbr_bungalows = DB::table('bungalows')->count();
        $nbr_reservations = DB::table('reservations')->count();
        return view('admin.index', compact('nbr_users', 'nbr_bungalows', 'nbr_reservations'));
    }
}
