<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index(){
        Nexmo::message()->send([
                'to'=>'998990890639',
                'from'=>'Ideal Markazi',
                'text'=>'Mart oyi uchun to\'lov qilshingiz kerak! Ustoz: Sardor summa:225 000 so\'m m'
        ]);
        echo "message send";
    }
}
