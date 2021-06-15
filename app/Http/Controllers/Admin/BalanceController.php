<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\balance1;
use App\User;

class BalanceController extends Controller
{
    public function index() {

    	$balance = auth()->user()->balance();
    	$amount = $balance ? $balance->amount : 0;
    }
}
