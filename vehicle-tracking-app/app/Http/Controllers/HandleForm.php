<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Providers\NewCode\AddFormBuildData;

class HandleForm extends Controller
{
    public function store(Request $request)
    {
        $addform_buildata = new AddFormBuildData($request);

        if(($result = $addform_buildata->insertToDb()) == 1)
        {
            return view('/adauga-vehicul', ['ok'=>1])->withTitle("Adaugare vehicul nou");
        }
        else 
        {
            return view('/adauga-vehicul', ['ok'=>0])->withTitle("Adaugare vehicul nou");
        }
    }
}
