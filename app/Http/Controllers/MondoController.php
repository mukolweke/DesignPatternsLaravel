<?php

namespace App\Http\Controllers;

use App\Facade\InterFacade;
use App\Mondoride;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MondoController extends Controller
{
    protected $internservice;
protected $mondoride;
    // injection of repository
    public function __construct(Mondoride $mondoride)
    {
    $this->mondoride=$mondoride;
    }


    // no need to pass the id
    public function index()
    {
        // access repository method of getting users
        $payment = '';
        return view('mondoride', compact('payment'));
    }

    public function post(Request $request){

        $amount = $request->input('amount');


        $this->mondoride->setAmount($amount);
        $payment = $this->mondoride->payAmount();

        return view('mondoride', compact('payment'));
    }
}
