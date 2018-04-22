<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LogoutController extends Controller
{
    public function GETLogout()
    {
        Auth::logout();
        return Redirect::route('welcome.index');
    }
}