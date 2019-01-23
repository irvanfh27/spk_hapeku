<?php

namespace App\Http\Controllers;

use App\Hp;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function spec(Request $request)
    {
        if ($request->search) {
            $data = Hp::where('merk', $request->merk)->inRandomOrder()->take(3)->get();
        } else {
            $data = Hp::all();
        }

        return view('frontend.spec', compact('data'));
    }

    public function showDetail(Hp $hp)
    {
        return view('frontend.detail', compact('hp'));
    }

    public function getByMerk(Request $request)
    {
        return redirect()->route('front.spec', ['search' => 'yes', 'merk' => $request->merk]);
    }
}
