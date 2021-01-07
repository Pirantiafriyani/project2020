@extends('layouts/master_1')
@section('abdurrohman_content')
<style>
    .select2-results .select2-disabled,
    .select2-results__option[aria-disabled=true] {
        display: none !important;
    }

    .select2-container--default .select2-selection--single {
        height: 35px;
        border: 1px solid #ececec;
    }
</style>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Pengajuan Pencarian Buku Tanah</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ $variabelUpdate->action }}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                @method($variabelUpdate->method)
                                <div class="row">
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label for="">No Berkas</label>
                                            <input type="text" class="form-control" name="no_berkas" id=""
                                                placeholder="Input Nomor Berkas" value="{{ $loketUpdate->no_berkas ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                            <label for="">Tahun</label>
                                            <input type="text" class="form-control" name="tahun" id=""
                                                placeholder="Input Tahun Berkas" value="{{ $loketUpdate->tahun ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="">No Hak</label>
                                            <input type="text" class="form-control" name="no_hak" id=""
                                                placeholder="Nomor Hak" value="{{ $loketUpdate->no_hak ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="">Kecamatan</label>
                                            <select name="kecamatan" id="kecamatan" class="form-control selectpicker"
                                                data-live-search="true" data-title="Pilih Kecamatan">
                                                @foreach ($loketKecamatan as $key => $value)
                                                <option value="{{ $key }}">{{ $key }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="">Desa</label>
                                            <select name="desa" id="desa" class="form-control " value="{{ $loketUpdate->desa ?? '' }}">
                                                @foreach ($loketDesa as $desa)
                                                <option value="{{ $desa->name }}"
                                                    data-kecamatan="{{ $desa->kecamatan }}" disabled>{{ $desa->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="">Jenis Hak</label>
                                            <select class="form-control" name="jenis_hak" id="" value="{{ $loketUpdate->jenis_hak ?? '' }}">
                                                <option>HM</option>
                                                <option>HGB</option>
                                                <option>HGU</option>
                                                <option>HP</option>
                                                <option>WAKAF</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="">Jenis Permohonan</label>
                                            <select value="{{ $loketUpdate->layanan}}" name="layanan" id="" class="form-control selectpicker" 
                                                data-live-search="true" data-title="Pilih Jenis Permohonan">
                                                @foreach ($loketLayanan as $layanan)
                                                <option value="{{ $layanan->name }}">{{ $layanan->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group float-right">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No.Berkas</th>
                                        <th>Tahun</th>
                                        <th>No.Hak</th>
                                        <th>Jenis Hak</th>
                                        <th>Desa</th>
                                        <th>Kecamatan</th>
                                        <th>Permohonan</th>
                                        <th>Tanggal Input</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($inputData as $loket)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $loket->no_berkas }}</td>
                                        <td>{{ $loket->tahun }}</td>
                                        <td>{{ $loket->no_hak }}</td>
                                        <td>{{ $loket->jenis_hak }}</td>
                                        <td>{{ $loket->desa }}</td>
                                        <td>{{ $loket->kecamatan }}</td>
                                        <td>{{ $loket->layanan_id }}</td>
                                        <td>{{ $loket->created_at}}</td>
                                        <td><button class="btn btn-sm btn-warning" disabled><span
                                                    class="spinner-grow spinner-grow-sm"></span> Diproses..</button>
                                        </td>
                                        <td>
                                            <a href="/loket?id={{ $loket->id }}" class="btn btn-sm btn-info float-right">
                                                <span class="mdi mdi-pencil"></span>
                                                </a>
                                            <form class="" action="{{ route('loket.destroy', $loket) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Apa Yakin Anda Akan Menghapus Data ini?');">
                                                    <span class="mdi mdi-delete-empty"></span>
                                                </button>
                                            </form>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('loket.scripts')
