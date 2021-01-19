    @extends('layouts/master_1')
    @section('abdurrohman_content')

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title pa">Database Pencarian Buku Tanah</h4>
                                <ul class="nav nav-tabs justify-content-end mt-2">
                                    <li class="nav-item">
                                        <a class="nav-link active " data-toggle="tab" href="#home">Data Request</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " data-toggle="tab" href="#menu1">Data Proses</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active ">
                                        <br>
                                        <div class="table-responsive">
                                            <form method="POST" action="/arsip/2/update" id="form-request">
                                                @csrf
                                                <table id="table-request" class="display table table-striped table-hover">
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
                                                            <th style="width: 5px;">Status</th>
                                                            <th style="width: 5px;">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $no = 1;
                                                        @endphp
                                                        @foreach ($data->requests as $request)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $request->no_berkas }}</td>
                                                            <td>{{ $request->tahun }}</td>
                                                            <td>{{ $request->no_hak }}</td>
                                                            <td>{{ $request->jenis_hak }}</td>
                                                            <td>{{ $request->desa }}</td>
                                                            <td>{{ $request->kecamatan }}</td>
                                                            <td>{{ $request->layanan_id }}</td>
                                                            <td>{{ $request->created_at}}</td>
                                                            <td>
                                                                <button class="{{ $request->status_warna }}">
                                                                    <span class="{{ $request->status_spinner }}"></span>{{ $request->status_label }}
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <input class="form-check checkbox-md checkbox-request" data-size="lg" type="checkbox" value="{{ $request->id }}" name="ids[{{ $request->id }}]">
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="11" style="padding-right: 0px !important;">
                                                                <div class="form-group">
                                                                    <div class="float-right">
                                                                        <button type="button" class="btn btn-primary" id="confirm-request">
                                                                            <i class="mdi mdi-checkbox-marked-circle-outline"></i> Validasi
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane">
                                        <br>
                                        <div class="table-responsive">
                                            <table id="table-proses" class="display table table-striped table-hover">
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
                                                    @foreach ($data->processes as $process)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $process->no_berkas }}</td>
                                                        <td>{{ $process->tahun }}</td>
                                                        <td>{{ $process->no_hak }}</td>
                                                        <td>{{ $process->jenis_hak }}</td>
                                                        <td>{{ $process->desa }}</td>
                                                        <td>{{ $process->kecamatan }}</td>
                                                        <td>{{ $process->layanan_id }}</td>
                                                        <td>{{ $process->created_at}}</td>
                                                        <td><button class="{{ $process->status_warna }}"><span
                                                                    class="{{ $process->status_spinner }}"></span></a>{{ $process->status_label }}
                                                        </td>
                                                        <td>
                                                            <input class="form-check" data-size="lg" type="checkbox">
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
    @include('arsip.scripts')
