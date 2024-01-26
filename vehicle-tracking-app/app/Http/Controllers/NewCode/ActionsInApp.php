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
        $heditform = new HandleEditForm($var);
        $data_from_db = $heditform->prepareDataForForm();
        return view('editeaza', ['tip_autovehicul' => $data_from_db->tip_autovehicul, 'marca' => $data_from_db->marca, 
        'model' => $data_from_db->model, 'imagine' => $data_from_db->imagine, 'nr_inmatriculare' => $data_from_db->numar_de_inmatriculare,
        'date_tehnice' => $data_from_db->date_tehnice, 'alte_carac' => $data_from_db->alte_caracteristici, 'proprietar' => $data_from_db->proprietar,
        'data_itp' => $data_from_db->data_ultim_itp, 'id'=>$var, 'ok' => -1])->withTitle("Modificare date vehicul");
    }
}
