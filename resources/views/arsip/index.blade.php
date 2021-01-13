    @extends('layouts/master_1')
    @section('abdurrohman_content')

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Database Pencarian Buku Tanah</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="" id="" class="form-control"
                                            data-live-search="true" data-title="Cari Status Proses">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <form action="">
                                        <div class="float-right">
                                            <input type="submit" class="btn btn-info" value="Cari">
                                        </div>
                                    </form>
                                </div>
                                <div class="form-group">
                                    <form action="">
                                        <div class="float-right">
                                            <input type="submit" class="btn btn-primary" value="Konfirmasi">
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
                                            @foreach ($arsipData as $arsip)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $arsip->no_berkas }}</td>
                                                <td>{{ $arsip->tahun }}</td>
                                                <td>{{ $arsip->no_hak }}</td>
                                                <td>{{ $arsip->jenis_hak }}</td>
                                                <td>{{ $arsip->desa }}</td>
                                                <td>{{ $arsip->kecamatan }}</td>
                                                <td>{{ $arsip->layanan_id }}</td>
                                                <td>{{ $arsip->created_at}}</td>
                                                <td><button class="{{ $arsip->status_warna }}"><span
                                                            class="{{ $arsip->status_spinner }}"></span></a>{{ $arsip->status_label }}
                                                </td>
                                                <td><input class="form-check" data-size="lg" type="checkbox" value=""
                                                        id="defaultCheck1">
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
