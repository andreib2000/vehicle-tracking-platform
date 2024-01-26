<?php

namespace App\Http\Controllers\NewCode;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Providers\NewCode\AddFormBuildData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HandleEditForm extends Controller
{
    protected $datafromdb;

    public function __construct($param)
    {
        $this->datafromdb = DB::table('date_masini')->select('*')->where('id', $param)->get();
    }

    public function prepareDataForForm()
    {
        return $this->datafromdb[0];
    }
}
