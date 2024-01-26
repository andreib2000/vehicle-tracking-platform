<?php

namespace App\Http\Controllers\NewCode;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Providers\NewCode\AddFormBuildData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Providers\NewCode\GetDataFromDB;

class SearchHandler extends Controller
{
    protected $searchtext;
    protected $criterie;

    public function config(Request $request)
    {
        $this->searchtext = $request->searchbox;
        if($request->nr_inmat == 'on')
            $this->criterie = 1;
        else if($request->nume_prop == 'on')
            $this->criterie = 2;
        else if($request->data_inmat == 'on')
            $this->criterie = 3;
        else if($request->data_itp == 'on')
            $this->criterie = 4;
        else
            $this->criterie = 0;

        if($this->criterie == 1)
        {
            $carclassobj = new GetDataFromDB(DB::table('date_masini')->select('*')->orWhere('numar_de_inmatriculare', 'like', '%' . $this->searchtext . '%')->get());

            return view('search-content')->with(compact('carclassobj'))->withTitle("Cautare dupa numar de inmatriculare");
        }
        else if($this->criterie == 2)
        {
            $carclassobj = new GetDataFromDB(DB::table('date_masini')->select('*')->orWhere('proprietar', 'like', '%' . $this->searchtext . '%')->get());

            return view('search-content')->with(compact('carclassobj'))->withTitle("Cautare dupa nume proprietar");
        }
        else if($this->criterie == 3)
        {
            $carclassobj = new GetDataFromDB(DB::table('date_masini')->select('*')->Where('data_inmatriculare', $this->searchtext)->get());

            return view('search-content')->with(compact('carclassobj'))->withTitle("Cautare dupa o anumita data");
        }
        else if($this->criterie == 4)
        {
            $carclassobj = new GetDataFromDB(DB::table('date_masini')->select('*')->Where('data_ultim_itp', '>', $this->searchtext)->get());

            return view('search-content')->with(compact('carclassobj'))->withTitle("Cautare vehicule a caror revizie este dupa o anumita data");
        }

    }
}
