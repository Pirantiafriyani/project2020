@extends('layouts/master')
@section('abdurrohman_content')
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="panel-header bg-secondary-gradient">
                <div class="page-inner pt-5 pb-5">
                    {{-- <h2 class="text-white pb-2">Welcome back Hizrian!</h2>
                    <h5 class="text-white op-7 mb-2">Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.</h5> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Table Pencarian Buku Tanah</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
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
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>Developer</td>
                                            <td>London</td>
                                            <td>53</td>
                                            <td>2009/10/22</td>
                                            <td>$114,500</td>
                                            <td>$114,500</td>
                                            <td>$114,500</td>
                                            <td>$114,500</td>
                                        </tr>
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