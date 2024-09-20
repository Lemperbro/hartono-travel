<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\Interfaces\AuthInterface;

class RegisterController extends Controller
{
    private $AuthInterface;

    public function __construct(AuthInterface $AuthInterface){
        $this->AuthInterface = $AuthInterface;
    }

    public function index(){
        $countUser = User::count();
        if($countUser === 0){
            return view("Auth.register");
        }else{
            return redirect()->back();
        }
    }
    public function register(RegisterRequest $request){
        $data = $this->AuthInterface->register($request);
        return $data;
    }
}
