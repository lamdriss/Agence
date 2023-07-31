<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index(){
        $data = Client::paginate(10);
        return view('Clients',compact('data'));
    }
}
