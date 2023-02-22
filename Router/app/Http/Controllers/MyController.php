<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
        return 'Witaj w kontrolerze index';
    }

    function show($id){
        return 'Witaj w kontrolerze show '.$id;
    }


    function store(){
        return 'Witaj w kontrolerze';
    }
    //
}
