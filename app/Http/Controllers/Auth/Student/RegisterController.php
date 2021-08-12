<?php

namespace App\Http\Controllers\Auth\Student;

use App\Helpers\StudentHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Student\RegisterRequest;
use App\Models\Student;
use App\Models\Vocation;

class RegisterController extends Controller
{
    public function create()
    {
        $vocations = Vocation::all();

        return view('auth.student.register', compact('vocations'));
    }

    public function store(RegisterRequest $request)
    {
        $data = $request->all();
        $data['national_registration_number'] = $request->nisn;
        $data['school_registration_number'] = $request->niss;
        $data['vocation_id'] = $request->vocation;
        $data['photo'] = StudentHelper::uploadImage($request->file('image'));
        $data['active'] = 0;

        Student::create($data);
        return redirect()->back()->with('regist-success', true);
    }
}
