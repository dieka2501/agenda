<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
   		
   }

   public function agenda()
   {
   	return view('agenda.list');
   }
}
