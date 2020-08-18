<?php


namespace App\Http\Controllers;


use App\Vila;

class VilasController extends BaseController
{
    public function __construct()
    {
        $this->classe = Vila::class;
    }


}
