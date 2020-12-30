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
                                            <th>No.</th>
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
                                    @foreach ($arsipData as $arsip)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $arsip->no_berkas }}</td>
                                            <td>{{ $arsip->proses }}</td>
                                            <td>{{ $arsip->no_hak }}</td>
                                            <td>{{ $arsip->jenis_hak }}</td>
                                            <td>{{ $arsip->desa }}</td>
                                            <td>{{ $arsip->kecamatan }}</td>
                                            <td>{{ $arsip->layanan_id }}</td>
                                            <td>{{ $arsip->petugas_id }}</td>
                                            <td><button class="btn btn-success" disabled>Selesai</button></td>
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
