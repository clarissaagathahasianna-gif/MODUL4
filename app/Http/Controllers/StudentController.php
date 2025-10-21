<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Clarissa',
                'major' => 'Sistem Informasi Kota Cerdas',
                'age' => 19,
                'courses' => ['Pemrograman Web', 'Database', 'CloudComputing'],
            ],
            [
                'name' => 'Agatha',
                'major' => 'SIKC',
                'age' => 19,
                'courses' => ['UI/UX', 'Matematika Diskrit', 'Basis Data'],
            ],
        ];

        return view('students.index', compact('students'));
}
}