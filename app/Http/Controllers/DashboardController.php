<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'adminTotal' => User::count(),
            'studentTotal' => Student::count(),
            'studentActive' => Student::where('active', 1)->count(),
            'studentPending' => Student::where('active', 0)->count()
        ];

        return view('admin.dashboard', $data);
    }
}
