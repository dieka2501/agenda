@extends('layout.layout')
@section('main')
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
  <h1>Tambah Agenda Kegiatan</h1>
  
    <div class="jumbotron">
      {{ Form::open(['method'=>'post','route'=>'store.agenda','files'=>true]) }}    
        <div class="form-group">
          <label for="origin">Asal Surat Masuk</label>
          <input type="text" class="form-control" id="origin" name="origin" aria-describedby="origin" placeholder="Asal Surat">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tanggal Surat Masuk</label>
          <input type="text" class="form-control date" id="date_in" placeholder="Tanggal Surat" name="date_in">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nomor Surat</label>
          <input type="text" class="form-control" id="letter_number" placeholder="Nomor Surat" name="letter_number">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Agenda Rapat</label>
          <textarea class="form-control" name="activity" id="activity" placeholder="Agenda Rapat"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tempat Pelaksaan</label>
          <input type="text" class="form-control" id="place" placeholder="Tempat Pelaksaan" name="place">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tanggal/Waktu Mulai</label>
          <input type="text" class="form-control date" id="activity_start" placeholder="Tanggal dan waktu mulai kegiatan" name="activity_start">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tanggal/Waktu Selesai</label>
          <input type="text" class="form-control date" id="activity_end" placeholder="Tanggal dan waktu mulai kegiatan" name="activity_end">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Disposisi</label>
          <input type="text" class="form-control" id="disposisi" placeholder="Disposisi" name="disposisi">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Keterangan</label>
          <textarea class="form-control" name="description" id="description" placeholder="Keterangan Kegiatan"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">File Pendukung</label>
          <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      {{ Form::close() }}
    </div>
  
</main>
@endsection

@section('css-include')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.14/jquery.datetimepicker.css">
@endsection

@section('js-include')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.14/jquery.datetimepicker.full.js"></script>
 
@endsection

@section('js-custom')
  <script type="text/javascript">
      $(document).ready(function(){
        $('.date').datetimepicker({format:"Y-m-d H:i"});;
      });
  </script>
@endsection