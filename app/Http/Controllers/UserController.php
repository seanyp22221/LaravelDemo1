<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Model;


use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        // $data = [
        //     'name'  => 'Jeff Bezos',
        //     'email' => 'jeffbezos@amazon.com',
        //     'password' => 'password',
        // ];

        // User::create($data);
        $user = User::all();
        return $user;
    }
    public function index_old()
    {
        $user = new User();
        //dd($user);
        //ELOQUENT - CREATE
        // $user->name = 'Tavia';
        // $user->email = 'tavia@gmail.com';
        // $user->password = bcrypt('T3st123');
        // $user->save();

        //ELOQUENT - READ
        // $user = User::all();
        // return $user;

        //ELOQUENT - UPDATE
        User::where('id', 3)->update(['name' => 'Cleopatra Jones']);
        $user = User::all();
        return $user;

        //ELOQUENT - DELETE    
        // User::where('id', 2)->delete();


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
        return 'I am in User Controller';
    }
}
