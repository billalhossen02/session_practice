<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
   public function putData(Request $request){

      
   //  $request->session()->put('name',['Billal Hossen']);
   //  $request->session()->push('name','Bijoy');
   //  $request->session()->put('age',['23','30']);
   //  $request->session()->push('age','40');
    
   $data = array([
      'name' => 'Raton',
      'age' => '23',
      'gender' => 'male'
   ]);

   Session::push('name',$data);
  



   }


   public function getData(Request $request){

         $data = $request->session()->all();

         return $data;

   }


   public function deleteData(Request $request){

    $request->session()->forget('name');

   }

   public function store(Request $request){

      $data = $request->all();
      Session::push('product',$data);
      return redirect()->route('home');


   }

   public function deletep(){
      Session::flush();
   }

   public function index(){
      return view('welcome');
   }

} 
