@extends('layoutsTemplate/master')
@section('abdurrohman_content')

<div class="card mb-2">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <form>
            <div class="form-group">
                <label>Jenis Layanan</label>
                <select class="form-control" id="">
                    <option>Roya</option>
                    <option>Hak Tanggungan</option>

                </select>
            </div>
            <div class="form-group">
                <label>Petugas Pencari</label>
                <select class="form-control" id="">
                    <option>Jamal</option>
                    <option>Gustiawan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Desa</label>
                <select class="form-control" id="">
                    <option>Cibinong</option>
                    <option>Tengah</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kecamatan</label>
                <select class="form-control" id="">
                    <option>Cibinong</option>
                    <option>Bojong Gede</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Hak</label>
                <select class="form-control" id="">
                    <option>HM</option>
                    <option>HGB</option>
                    <option>HGU</option>
                    <option>HP</option>
                    <option>WAKAF</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nomor Hak</label>
                <input type="text" class="form-control" id="nohak" name="nohak" placeholder="Nomor Hak">
            </div>
            <div class="form-group col-md-6">
                <label>Proses Terakhir</label>
                <input type="text" class="form-control" id="" name="" placeholder="Proses Terakhir">
            </div>
            <div class="form-group col-md-6">
                <label>Tgl Proses Terakhir</label>
                <input type="date" class="form-control" id="" name="" placeholder="Tgl Proses Terakhir">
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection