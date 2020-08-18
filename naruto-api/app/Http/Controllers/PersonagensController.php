<?php


namespace App\Http\Controllers;


use App\Personagen;

class PersonagensController extends BaseController
{
    public function __construct()
    {
        $this->classe = Personagen::class;
    }

    public function buscaPorCla(int $cla_id)
    {
        $person = Personagen::query()->where('cla_id',$cla_id)->paginate();
        return $person;

    }
}
