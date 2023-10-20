<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MemberController extends Controller
{
    public function createMember(Request $request) {
        $incomingFields=$request->validate([
            'name'=> ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'school'=> ['required', 'min:5', 'max:100']
        ]);

        Member::create($incomingFields);
        return 'Hello from newMember controller';
    } 

    public function getMembers() {
        $data=Member::all();
        return view('list', ['members'=>$data]);
    }
}
