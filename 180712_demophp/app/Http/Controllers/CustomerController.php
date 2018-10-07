<?php
/**
 * Created by PhpStorm.
 * User: Phuong Anh
 * Date: 7/12/2018
 * Time: 8:35 PM
 */

namespace App\Http\Controllers;




use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function login () {
        return view('login');
    }

    function processLogin (Request $request) {
        $username = $request -> input('username');
        $password = $request -> input('password');
        return 'Login successfully with username = ' . $username . $password;
    }

    function register () {
        return view('register');
    }

    function processRegister (Request $request){
        $username = $request -> input('username');
        return 'Register successfully with username = ' . $username;
    }
}