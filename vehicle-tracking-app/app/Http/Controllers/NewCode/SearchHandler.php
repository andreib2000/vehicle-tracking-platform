<?php

namespace App\Http\Controllers\NewCode;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Providers\NewCode\AddFormBuildData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchHandler extends Controller
{
    protected $searchtext;
    protected $criterie;

    public function config($request)
    {
        $this->searchtext = $request->searchbox;
    }
}
