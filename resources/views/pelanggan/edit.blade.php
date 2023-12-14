@extends('layouts.app')

@section('content')
    <h2>Edit Pelanggan</h2>

    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">ID Golongan</label>
            <input type="text" name="pel_id_gol" id="" class="form-control" value="{{ $row->pel_id_gol}}">
        </div>
        <div class="mb-3">
            <label for="">NO</label>
            <input type="text" name="pel_no" id="" class="form-control" value="{{ $row->gol_no }}">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{ $row->gol_nama }}">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $row->gol_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{ $row->gol_hp }}">
        </div> <div class="mb-3">
            <label for="">NO KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $row->gol_ktp }}">
        </div> <div class="mb-3">
            <label for="">NO SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control" value="{{ $row->gol_seri }}">
        </div>
        <div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $row->gol_meteran }}">
        </div> 
        <div class="mb-3">
            <label for="">STATUS</label>
            <input type="text" name="pel_aktif" id="" class="form-control" value="{{ $row->gol_aktif }}">
            <select name="pel_aktif" id="" class="form-control" value="{{ $row->gol_aktif }}">>
            <option value="aktif">Aktif</option>
             <option value="nonaktif">Nonaktif</option> </select> 
        </div>
        <div class="mb-3">
            <label for="">ID User</label>
            <input type="text" name="pel_id_user" id="" class="form-control" value="{{ $row->gol_id_user }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
