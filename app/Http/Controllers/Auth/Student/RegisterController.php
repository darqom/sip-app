<?php

namespace App\Http\Controllers\Auth\Student;

use App\Http\Controllers\Controller;
use App\Models\Vocation;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        $vocations = Vocation::all();

        return view('auth.student.register', compact('vocations'));
    }

    public function store(Request $request)
    {

    }
}
