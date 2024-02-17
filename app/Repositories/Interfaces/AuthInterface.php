<?php
namespace App\Repositories\Interfaces;

interface AuthInterface {
    public function register($data);
    public function login($data);
}