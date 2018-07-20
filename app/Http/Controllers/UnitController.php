<?php

namespace App\Http\Controllers;

use App\Facade\InterFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    protected $internservice;

    // injection of repository
    public function __construct()
    {

    }


    // no need to pass the id
    public function index()
    {
        // access repository method of getting users

        $details = InterFacade::fetchTutors();
        return view('intern', compact('details'));
    }
}
