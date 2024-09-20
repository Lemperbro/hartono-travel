<?php
namespace App\Repositories;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Interfaces\AuthInterface;
use Illuminate\Validation\ValidationException;

class AuthRepository implements AuthInterface
{

    public function countUser()
    {
        return User::count();
    }
    public function register($data)
    {
        try {
            if ($this->countUser() >= 1) {
                throw ValidationException::withMessages([
                    'message' => 'registrasi gagal'
                ]);
            }
            $up = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'password' => Hash::make($data->password),
                'telp' => $data->telp
            ]);

            if ($up) {
                return redirect(route('login'))->with('toast_success', 'Registrasi Berhasil');
            }

        } catch (Exception $e) {
            return redirect()->back()->with("toast_error", $e->getMessage());
        }
    }

    public function login($data)
    {
        try {
            $credentials = $data->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);


            if (Auth::attempt($credentials)) {
                $data->session()->regenerate();
                return redirect()->intended('admin')->with('toast_success', 'login berhasil');
            }

            return redirect()->back()->with('toast_error', 'Login Failed!');
        } catch (Exception $e) {
            return redirect()->back()->with('toast_error', 'Login Gagal');
        }
    }
}