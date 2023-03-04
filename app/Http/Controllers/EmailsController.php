<?php

namespace App\Http\Controllers;

use App\Mail\AttachmenMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function email(){
       Mail::to('jamshidqochqorov84@gmail.com')->send(new AttachmenMail());
    }
}
