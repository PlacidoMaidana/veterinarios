<?php

namespace App;



use Illuminate\Database\Eloquent\Model;


class Veterinario extends Model
{

    public $periodo=["periodo"];

    public function getperiodo()
    {
       return "mayo";
    }

}


