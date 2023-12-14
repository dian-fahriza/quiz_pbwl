@extends('layouts.app')

@section('content')
    <h2>Add Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">ID Golongan</label>
            <input type="text" name="pel_id_gol" id="" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="">NO</label>
            <input type="text" name="pel_no" id="" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="">NO HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" >
        </div> 
        <div class="mb-3">
            <label for="">NO KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control" >
        </div> <div class="mb-3">
            <label for="">NO SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control" >
        </div>
         <div class="mb-3">
            <label for="">STATUS</label>
            <select name="pel_aktif" id="" class="form-control">
          
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option></select>
        </div>
        <div class="mb-3">
            <label for="">ID User</label>
            <input type="text" name="pel_id_user" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
