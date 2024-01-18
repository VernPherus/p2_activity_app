<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
    {
    public function index(){
        return 'This is the user controller';
    }

    public function show($id){

        // $data = array(
        //     "id" => $id,
        //     "name" => "Nerve",
        //     "age" => 23,
        //     "email" => "nerve@gmail.com"
        // );g

        //function chaining
        return view('user')
                ->with('name' , 'Nerve')
                ->with('age' , 21)
                ->with('email' , 'nerve@gmail.com')
                ->with('id' , $id);

        //return view('user', $data);
        //return view('user', ['data' => $data]);
    }
}
