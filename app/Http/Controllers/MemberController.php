<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        return view('/dashboard-page/member.index',[
            'title' => 'Member'
        ] );
    }

    public function add(){
        return view('/dashboard-page/member.add',[
            'title' => 'Add Member'
        ]);
    }
}
