<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function newMember(Request $request) {
        $incomingFields=$request->validate([
            'name'=> ['required', 'min:3', 'max:10'],
            'email'=> ['required', 'email'],
            'password'=> ['required', 'min:5', 'max:100']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        User::create($incomingFields);

        return 'Hello from newMember controller';
    }
}
