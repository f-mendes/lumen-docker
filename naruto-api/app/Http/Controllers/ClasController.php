<?php


namespace App\Http\Controllers;


use App\Cla;


class ClasController extends BaseController
{
    public function __construct()
    {
        $this->classe = Cla::class;
    }

    public function buscaPorCla(int $vila_id)
    {
        $cla = Cla::query()->where('vila_id',$vila_id)->paginate();
        return $cla;
    }
}
