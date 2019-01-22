<?php

namespace App\Http\Controllers;

use App\Hp;
use App\Ram;
use App\Color;
use App\Camera;
use App\Battery;
use App\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as StorageFile;

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
        if ($request->hasfile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;
            }
        }
        $hp = new Hp();
        $hp->name = $request->name;
        $hp->gambar = json_encode($data);
        $hp->harga = $request->harga;
        $hp->id_user = auth()->user()->id;
        $hp->id_battery = $request->battery;
        $hp->id_camera = $request->camera;
        $hp->id_color = $request->color;
        $hp->id_ram = $request->ram;
        $hp->id_storage = $request->storage;
        $hp->save();

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
        foreach (json_decode($hp->gambar) as $key => $value) {
            StorageFile::delete(asset('/files/'.$value));
        }
        $hp->delete();

        return redirect()->back();
    }
}
