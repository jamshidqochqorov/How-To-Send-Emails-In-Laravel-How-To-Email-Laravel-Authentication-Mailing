<?php

namespace App\Http\Controllers;

use App\Jobs\Email;
use App\Mail\AttachmenMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email(){
        Email::dispatch()->delay(now()->addMinutes(10));;
        return "ketti";
    }
}
