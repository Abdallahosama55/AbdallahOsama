<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PrintMessageController extends Controller
{
   public function message()
   {
        $full_name = "Galal Husseny";
        return view('data.message',compact('full_name'));
   }

   public function users()
   {
        $users = User::all();
        return view('data.users',compact('users'));
   }
}
