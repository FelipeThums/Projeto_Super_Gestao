<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuPrincipalController extends Controller
{
    public function MenuPrincipal(){
       Return view ('site.principal');
    }
}
