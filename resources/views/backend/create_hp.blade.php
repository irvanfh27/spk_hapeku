@extends('backend.template')
@section('content')
<div class="col-xl-8 order-xl-1">
    <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Tambah HP</h3>
                </div>
                {{-- <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('data_hp.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Merk HP</label>
                                <input type="text" id="input-username" name="name" class="form-control form-control-alternative"
                                placeholder="Contoh : Samsul">
                            </div>
                            @if ($errors->has('name'))
                            <span>{{ $errors->get('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Pilih Merk</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="merk">
                                        <option selected value="0">Pilih...</option>
                                        <option value="LG">LG</option>
                                        <option value="Samsung">Samsung</option>
                                        <option value="Oppo">Oppo</option>
                                        <option value="Vivo">Vivo</option>
                                        <option value="OnePlus">OnePlus</option>
                                        <option value="Xiaomi">Xiaomi</option>
                                        <option value="Sony">Sony</option>
                                        <option value="Asus">Asus</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fotohp" name="gambar[]" multiple>
                                    <label class="custom-file-label" for="fotohp">Choose file</label>
                                </div>
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
                                    <label class="input-group-text" for="inputGroupSelect01">Pilih Sound</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="sound">
                                    <option selected value="0">Pilih...</option>
                                    @foreach ($sound as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Dual Sim</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="dualsim">
                                    <option selected value="0">Pilih...</option>
                                    @foreach ($dualsim as $item)
                                    <option value="{{ $item->id }}">{{ $item->dualsim }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Pilih Size</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="size">
                                    <option selected value="0">Pilih...</option>
                                    @foreach ($size as $item)
                                    <option value="{{ $item->id }}">{{ $item->size }}</option>
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

    @push('js')
    <script>
        $('#fotohp').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
    @endpush
