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
                            <!-- <form>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="largeInput">No Berkas</label>
                                        <input type="text" class="form-control form-control" id="defaultInput"
                                            placeholder="Input Nomor Berkas / Tahun (Contoh : 123456/2020)">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="largeInput">No Hak</label>
                                        <input type="text" class="form-control form-control" id="defaultInput"
                                            placeholder="Nomor Hak">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Jenis Hak</label>
                                        <select class="form-control form-control" id="defaultSelect">
                                            <option>HM</option>
                                            <option>HGB</option>
                                            <option>HGU</option>
                                            <option>HP</option>
                                            <option>WAKAF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Kecamatan</label>
                                        <select name="" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Kecamatan" >
                                            @foreach ($loketDesa as $desa)
                                            <option value="{{ $desa->id }}">{{ $desa->kecamatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Desa</label>
                                        <select name="" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Desa" >
                                            @foreach ($loketDesa as $desa)
                                            <option value="{{ $desa->id }}">{{ $desa->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Jenis Permohonan</label>
                                        <select name="" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Jenis Permohonan" >
                                            @foreach ($loketLayanan as $layanan)
                                            <option value="{{ $layanan->id }}">{{ $layanan->layanan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group float-right">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                        <input type="submit" class="btn btn-danger" value="Cancel">
                                    </div>
                                </div>
                            </form> -->
                            <form>
                                <div class="form-row">
                                    <div class="col-md-3 col-lg-3">
                                        <label for="largeInput">No Berkas</label>
                                        <input type="text" class="form-control form-control" id="defaultInput"
                                            placeholder="Nomor Berkas">
                                    </div>
                                    <div class="col-md-3 col-lg-3">
                                        <label for="largeInput">Tahun</label>
                                        <input type="text" class="form-control form-control" id="defaultInput"
                                            placeholder="Tahun">
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="largeInput">No Hak</label>
                                        <input type="text" class="form-control form-control" id="defaultInput"
                                            placeholder="Nomor Hak">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Kecamatan</label>
                                        <select name="" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Kecamatan" >
                                            @foreach ($loketDesa as $desa)
                                            <option value="{{ $desa->id }}">{{ $desa->kecamatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Desa</label>
                                        <select name="" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Desa" >
                                            @foreach ($loketDesa as $desa)
                                            <option value="{{ $desa->id }}">{{ $desa->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Jenis Hak</label>
                                        <select class="form-control form-control" id="defaultSelect">
                                            <option>HM</option>
                                            <option>HGB</option>
                                            <option>HGU</option>
                                            <option>HP</option>
                                            <option>WAKAF</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <label for="defaultSelect">Jenis Permohonan</label>
                                        <select name="" id="" class="form-control selectpicker"  data-live-search="true" data-title="Pilih Jenis Permohonan" >
                                            @foreach ($loketLayanan as $layanan)
                                            <option value="{{ $layanan->id }}">{{ $layanan->layanan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group float-right">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                    <input type="submit" class="btn btn-danger" value="Cancel">
                                </div>
                            </form>
                        </div>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No.Berkas</th>
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
                                        <td>{{ $loket->no_hak }}</td>
                                        <td>{{ $loket->jenis_hak }}</td>
                                        <td>{{ $loket->desa }}</td>
                                        <td>{{ $loket->kecamatan }}</td>
                                        <td>{{ $loket->layanan_id }}</td>
                                        <td>{{ $loket->created_at}}</td>
                                        <td><button class="btn btn-warning" disabled><span
                                                    class="spinner-grow spinner-grow-sm"></span> Diproses..</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-danger"><i
                                                    class="mdi mdi-delete"></i></button>
                                            <button type="button" class="btn btn-info"><i
                                                    class="mdi mdi-pencil-box"></i></button>
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