@extends('layouts/master_1')
@section('abdurrohman_content')

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
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="form-row">
                                    <div class="col-md-3 col-lg-3">
                                        <label for="largeInput">No Berkas</label>
                                        <input type="text" class="form-control form-control" id="" name="no_berkas"
                                            placeholder="Nomor Berkas">
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <label for="largeInput">Tahun</label>
                                        <input type="text" class="form-control form-control" id="" name="tahun"
                                            placeholder="Tahun">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="largeInput">No Hak</label>
                                        <input type="text" class="form-control form-control" id="" name="no_hak"
                                            placeholder="Nomor Hak">
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="">Kecamatan</label>
                                        <select name="kecamatan" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Kecamatan" >
                                            @foreach ($loketDesa as $desa)
                                            <option value="{{ $desa->kecamatan }}">{{ $desa->kecamatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="">Desa</label>
                                        <select name="desa" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Desa" >
                                            @foreach ($loketDesa as $desa)
                                            <option value="{{ $desa->name }}">{{ $desa->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="">Jenis Hak</label>
                                        <select name="jenis_hak" id="" class="form-control form-control" id="defaultSelect">
                                            <option>HM</option>
                                            <option>HGB</option>
                                            <option>HGU</option>
                                            <option>HP</option>
                                            <option>WAKAF</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Jenis Permohonan</label>
                                        <select name="layanan" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Jenis Permohonan" >
                                            @foreach ($loketLayanan as $layanan)
                                            <option value="{{ $layanan->name }}">{{ $layanan->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group float-right">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                </div>
                            </form>
                        </div>
                        <br>
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
                                            <form class="" action="{{ route('loket.destroy', $loket->id) }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apa Yakin Anda Akan Menghapus Data ini?');">
                                                    <span class="mdi mdi-delete-empty"></span>
                                                </button>
                                                <a href="" class="btn btn-sm btn-info ml-1">
                                                    <span class="mdi mdi-pencil"></span>
                                                    </a>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection