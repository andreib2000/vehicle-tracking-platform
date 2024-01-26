<?php

namespace App\Providers\NewCode;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AddFormBuildData extends ServiceProvider
{
    protected $data;
    protected $id;

    public function __construct($params, $var = 0)
    {
        $this->data = $params;
        $this->id = $var;
    }

    public function isDataOk()
    {
        if((strlen($this->data->tip_autoturism) > 0) && (strlen($this->data->marca) > 0) && (strlen($this->data->model) > 0) && (strlen($this->data->date_tehnice) > 0)
        && (strlen($this->data->alte_caracteristici) > 0) && (strlen($this->data->numar_inmatriculare) > 0) && (strlen($this->data->proprietar) > 0) && (strlen($this->data->data_itp) > 0) && (strlen($this->data->imagine) > 0))
        {
            return 1;
        }

        return 0;
    }

    public function insertToDb()
    {
        if($this->isDataOk())
        {
            $dateObject = date_create($this->data->data_itp);

            DB::table('date_masini')->insert(['tip_autovehicul'=>$this->data->tip_autoturism, 'marca'=>$this->data->marca, 'model'=>$this->data->model, 
            'date_tehnice'=>$this->data->date_tehnice, 'alte_caracteristici'=>$this->data->alte_caracteristici, 'numar_de_inmatriculare'=>$this->data->numar_inmatriculare,
            'data_inmatriculare'=>date("Y-m-d"), 'proprietar'=>$this->data->proprietar, 'data_ultim_itp'=>date_format($dateObject, 'Y-m-d'), 'imagine'=>$this->data->imagine]);
            
            return 1;
        }

        return 0;
    }

    public function modifyDB()
    {
        if($this->isDataOk() && $this->id != 0)
        {
            $dateObject = date_create($this->data->data_itp);

            DB::table('date_masini')->where('id', $this->id)->update(array('tip_autovehicul'=>$this->data->tip_autoturism, 'marca'=>$this->data->marca, 'model'=>$this->data->model, 
            'date_tehnice'=>$this->data->date_tehnice, 'alte_caracteristici'=>$this->data->alte_caracteristici, 'numar_de_inmatriculare'=>$this->data->numar_inmatriculare,
            'data_inmatriculare'=>date("Y-m-d"), 'proprietar'=>$this->data->proprietar, 'data_ultim_itp'=>date_format($dateObject, 'Y-m-d'), 'imagine'=>$this->data->imagine));

            return 1;
        }

        return 0;
    }
}