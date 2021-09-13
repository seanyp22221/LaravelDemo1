<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        $user = new User();
        dd($user);



        //return view('home');
        //CRUD OPERATIONS
        //CREATE
        // DB::insert('INSERT INTO users (name, email, password) 
        //             values (?, ?, ?)', [
        //                 'solomon',
        //                 'solomon@gmail.com',
        //                 'password'
        //             ]);
        // READ
        // $users = DB::select('select * from users');
        // return $users; 
        //UPDATE
        //DB::update('update users set name =? where id = 1',['Jameson']);
        //DELETE
        // DB::delete('delete from users where id =1');    

        // $users = DB::select('select * from users');
        // return $users;    
        //return 'I am in User Controller';
    } 
}
