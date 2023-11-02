<?php

namespace App\Http\Controllers;
use App\Providers\GetDataFromDB;

use Illuminate\Http\Request;
use App\Models\Post;

class HandleForm extends Controller
{
    public function store(Request $request)
    {
        // do some checks with $request

        
        //return redirect('/')->withTitle("Hello");
        //DB::table('date_masini')->insert([])
    }
}
