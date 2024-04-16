<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return "teste";
    }

    public function show($id){
        return "show: ".$id;
    }
}
