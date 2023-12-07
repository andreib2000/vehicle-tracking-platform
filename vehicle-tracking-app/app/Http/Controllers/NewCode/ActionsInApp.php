<?php

namespace App\Http\Controllers\NewCode;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewCode\HandleEditForm;

class ActionsInApp extends Controller
{
    public function deleteEntry($var)
    {
        DB::table('date_masini')->where('id', $var)->delete();
        return redirect()->route('index');
    }

    public function editEntry($var)
    {
        echo $var;
        $heditform = new HandleEditForm($var);
        $heditform->prepareDataForForm();
    }
}
