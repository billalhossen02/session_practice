<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
   public function putData(Request $request){

    $request->session()->put('name',"Billal Hossen");

   }


   public function getData(Request $request){

    return $request->session()->get('name');

   }


   public function deleteData(Request $request){

    $request->session()->forget('name');

   }

} 
