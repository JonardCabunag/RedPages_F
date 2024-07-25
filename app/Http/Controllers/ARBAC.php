<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\DonorDets;




class ARBAC extends Controller
{
    public function login(Request $rq){
        $role = Auth::user()->role;

        if($role == "Admin"){}
        elseif($role == "BloodBank"){}


        elseif($role == "Donor"){
         $stat = DonorDets::where('userid', '=', Auth::user()->id)->pluck('status');
            return view('DonorDash', compact('stat'));
        }

        else {
            Session::flush();

            Auth::guard('web')->logout();

            return redirect('login');
        }

    }



}
