@extends('backend.template')
@section('content')
<div class="col-xl-8 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Edit HP</h3>
                </div>
                {{-- <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('data_hp.update') }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Merk HP</label>
                                <input type="text" id="input-username" name="name" class="form-control form-control-alternative"
                                placeholder="Contoh : Samsul">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Pilih Kapasitas Baterai</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="battery">
                                    <option selected value="0">Pilih...</option>
                                    @foreach ($battery as $item)
                                    <option value="{{ $item->id }}">{{ $item->size }} mAh</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Pilih Kapasitas Camera</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="camera">
                                    <option selected value="0">Pilih...</option>
                                    @foreach ($camera as $item)
                                    <option value="{{ $item->id }}">{{ $item->size }} MP</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Pilih Warna</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="color">
                                    <option selected value="0">Pilih...</option>
                                    @foreach ($color as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Pilih Kapasitas Ram</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="ram">
                                    <option selected value="0">Pilih...</option>
                                    @foreach ($ram as $item)
                                    <option value="{{ $item->id }}">{{ $item->size }} GB</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Pilih Kapasitas
                                        Penyimpanan</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="storage">
                                        <option selected value="0">Pilih...</option>
                                        @foreach ($storage as $item)
                                        <option value="{{ $item->id }}">{{ $item->size }} GB</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="text-right">
                        <a class="btn btn-primary" href="{{ route('data_hp.index') }}">Cancel</a>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
