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
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.Berkas</th>
                                            <th>Proses Terakhir</th>
                                            <th>No.Hak</th>
                                            <th>Jenis Hak</th>
                                            <th>Desa</th>
                                            <th>Kecamatan</th>
                                            <th>Permohonan</th>
                                            <th>Petugas</th>
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
                                            <td>{{ $loket->proses }}</td>
                                            <td>{{ $loket->no_hak }}</td>
                                            <td>{{ $loket->jenis_hak }}</td>
                                            <td>{{ $loket->desa }}</td>
                                            <td>{{ $loket->kecamatan }}</td>
                                            <td>{{ $loket->layanan_id }}</td>
                                            <td>{{ $loket->petugas_id}}</td>
                                            <td></td>
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