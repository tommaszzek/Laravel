<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index(){
        return view('welcome');
    }

    function show(){
        $zm_1='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure facilis expedita perspiciatis eligendi minus sunt dicta ipsa officia doloremque atque ratione reiciendis magnam hic quibusdam nostrum laudantium, culpa illo aperiam?      ';
        $zm_2='Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure facilis expedita perspiciatis eligendi minus sunt dicta ipsa officia doloremque atque ratione reiciendis magnam hic quibusdam nostrum laudantium, culpa illo aperiam?      ';
        return view('add_folder.kolejny',compact('zm_1','zm_2'));
    }


    function store(){
        $zm='DANE ZE ZMIENNE';
        return view('add_folder.nextView',['zm_cos'=>$zm]);
    }
    function layout(){

        $data=[
            [
            'title'=>'Pinoki',
            'body'=>'the book is ...'],
            [
                'title'=>'Pinoki',
                'body'=>'the book is ...'],
            [
               'title'=>'Pinoki',
               'body'=>'the book is ...'],
            [
               'title'=>'Pinoki',
               'body'=>'the book is ...'],
            ];

            $zm='lorem ';
            $zm_1=2;
        
        return view('lay.sec',compact('zm','zm_1','data'));
    }
}
