<?php

namespace App\Http\Controllers;

use App\Hp;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function spec(Request $request)
    {
        if ($request->search) {
            $data = Hp::inRandomOrder()->take(1)->get();
        } else {
            $data = Hp::all();
        }

        return view('frontend.spec', compact('data'));
    }

    public function showDetail(Hp $hp)
    {
        return view('frontend.detail', compact('hp'));
    }
}
