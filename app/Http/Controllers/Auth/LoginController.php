<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\AuthInterface;

class LoginController extends Controller
{
    //

    private $AuthInterface;
    public function __construct(AuthInterface $AuthInterface){
        $this->AuthInterface = $AuthInterface;
    }

    public function index(){
        return view("Auth.login");
    } 
    
    public function login(Request $request){
        $data = $this->AuthInterface->login($request);
        return $data;
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
