<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {

    $campus = ['Kemanggisan', 'Alam Sutra', 'Bandung'];
    // kirim parameter campus ke view caranya -> ['campus' => $campus]
    return view('admin.campus',['campus' => $campus]);
})->name('campus');

Route::get('/campus/{campus}/students', function($campus){
    $student_kmg = [
        [
            'nim' => '1',
            'name' => 'Mahasiswa Kemanggisan 1',
        ],
        [
            'nim' => '2',
            'name' => 'Mahasiswa Kemanggisan 2',
        ],
    ];

    $student_alsut = [
        [
            'nim' => '1',
            'name' => 'Mahasiswa Alam Sutra 1',
        ],
        [
            'nim' => '2',
            'name' => 'Mahasiswa Alam Sutra 2',
        ],
    ];

    $student_bdg = [
        [
            'nim' => '1',
            'name' => 'Mahasiswa Bandung 1',
        ],
        [
            'nim' => '2',
            'name' => 'Mahasiswa Bandung 2',
        ],
    ];

    $students = [
        'Kemanggisan' => $student_kmg,
        'Alam Sutra' => $student_alsut,
        'Bandung' => $student_bdg
    ];
    // dd buat debug ?
    // dd($students[$campus]);

    return view('admin.student',['campus' => $campus, 'students' => $students[$campus]] );
})->name('campus.student');

/*
Route::get('/admin/campus', function(){
    return view('admin.campus');
});
*/
