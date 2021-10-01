<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(Request $request){
        $param = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        DB::table('users')->insert($param);
        return redirect('/thanks');
    }
    public function thanks(){
        return view('thanks');
    }

}
