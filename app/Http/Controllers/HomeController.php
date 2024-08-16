<?php

namespace App\Http\Controllers;

use App\Tables\UserTable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('home', [
            'data' => new UserTable(),
        ]);
    }
}
