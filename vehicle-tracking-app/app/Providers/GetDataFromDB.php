<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GetDataFromDB extends ServiceProvider
{
    protected $res;
    protected $len;

    public function __construct($result)
    {
        $this->res = $result;
        $this->len = sizeof($result);
    }

    public function getLen()
    {
        return $this->len;
    }

    public function getId($id)
    {
        return $this->res[$id]->id;
    }

    public function getTip($id)
    {
        return $this->res[$id]->tip_autovehicul;
    }

    public function getMarca($id)
    {
        return $this->res[$id]->marca;
    }

    public function getModel($id)
    {
        return $this->res[$id]->model;
    }

    public function getDateTehnice($id)
    {
        return $this->res[$id]->date_tehnice;
    }

    public function getAlteCaracteristici($id)
    {
        return $this->res[$id]->alte_caracteristici;
    }

    public function getNumarDeInmatriculare($id)
    {
        return $this->res[$id]->numar_de_inmatriculare;
    }

    public function getDataInmatriculare($id)
    {
        return $this->res[$id]->data_inmatriculare;
    }

    public function getProprietar($id)
    {
        return $this->res[$id]->proprietar;
    }

    public function getDataUltimITP($id)
    {
        return $this->res[$id]->data_ultim_itp;
    }

    public function getImagine($id)
    {
        return $this->res[$id]->imagine;
    }

    public function boot(): void
    {

    }
}