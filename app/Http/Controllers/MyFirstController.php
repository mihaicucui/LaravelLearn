<?php


namespace App\Http\Controllers;

use DB;

use App\TestPost;


class MyFirstController extends Controller
{

    public function show($number)
    {
        $name = request('name');

//        $tests = [
//            'my-first-test' => 'Hello this is my first test',
//            'my-second-test' => 'Second test'
//        ];

//        $test = DB::table('tests')->where('slug', $number)->first();

        $test = TestPost::where('slug', $number)->firstOrFail();

        if(! $test){
            abort(404);
        }

        return view('test', [
            'test' => $test
        ]);
    }
}
