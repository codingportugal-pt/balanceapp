<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\balance1;
use App\User;

class BalanceController extends Controller
{
    public function index() {

    	$balance = auth()->user()->balance;
    	$amount = $balance ? $balance->amount : 0;

    	return view('admin.balance.index', compact('amount'));
    	//compact () cria um array de variáveis ​​existentes fornecidas como argumentos de string para ele.
    }
}
