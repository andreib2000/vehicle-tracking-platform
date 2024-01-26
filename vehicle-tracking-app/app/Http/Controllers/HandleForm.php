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

    public function modify(Request $request, $var)
    {
        $addform_buildata = new AddFormBuildData($request, $var);
        if(($result = $addform_buildata->modifyDB()) == 1)
        {
            return view('/editeaza', ['ok'=>1, 'id'=>-1, 'tip_autovehicul' => "", 'marca' => "", 
            'model' => "", 'imagine' => "", 'nr_inmatriculare' => "",
            'date_tehnice' => "", 'alte_carac' => "", 'proprietar' => "",
            'data_itp' => ""])->withTitle("Modificare date vehicul");
        }
        else
        {
            return view('/editeaza', ['ok'=>0, 'id'=>-1, 'tip_autovehicul' => "", 'marca' => "", 
            'model' => "", 'imagine' => "", 'nr_inmatriculare' => "",
            'date_tehnice' => "", 'alte_carac' => "", 'proprietar' => "",
            'data_itp' => ""])->withTitle("Modificare date vehicul");
        }
    }
}
