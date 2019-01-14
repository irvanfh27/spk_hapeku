<?php

namespace App\Http\Controllers;

use App\Hp;
use App\Ram;
use App\Color;
use App\Camera;
use App\Battery;
use App\Storage;
use Illuminate\Http\Request;

class HpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Hp::all();
        $title = 'Data HP';

        return view('backend.data_hp', compact('data', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $battery = Battery::all();
        $camera = Camera::all();
        $color = Color::all();
        $ram = Ram::all();
        $storage = Storage::all();

        return view('backend.create_hp', compact('battery', 'camera', 'color', 'ram', 'storage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hp = Hp::create(
            [
                'name' => $request->name,
                'id_user' => auth()->user()->id,
                'id_battery' => $request->battery,
                'id_camera' => $request->camera,
                'id_color' => $request->color,
                'id_ram' => $request->ram,
                'id_storage' => $request->storage,
            ]);

        // return $request->all();
        return redirect()->route('data_hp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hp = Hp::findOrFail($id);
        $hp->delete();

        return redirect()->back();
    }
}
