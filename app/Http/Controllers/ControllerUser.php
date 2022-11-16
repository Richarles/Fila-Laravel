<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailUser;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function SaveUser(Request $request){
        $user = User::create([
             'name' => 'teste',
             'email' => 'richarle0s001@gmail.com',
             'password' => bcrypt(1234567),
        ]);

        SendEmailUser::dispatch($user);
    }
}
