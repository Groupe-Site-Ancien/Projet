<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class Users extends Controller
{
    function index(Request $req)
    {
        return $req->input();
    }
}

?>