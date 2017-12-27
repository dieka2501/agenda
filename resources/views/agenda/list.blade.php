@extends('layout.layout')
@section('main')
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
  <h1>Daftar Agenda Kegiatan</h1>

  <a href="{{ route('add.agenda') }}" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Agenda</a>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Asal Surat</th>
          <th>Tanggal Mulai</th>
          <th>Tanggal Selesai</th>
          <th>Agenda</th>
          <th>Tempat</th>
          <th>Disposisi</th>
          <th>Keterangan</th>
          <th>File</th>
        </tr>
      </thead>
      <tbody>
        @foreach($list as $lists)
          <tr>
            <td>{{ $lists->id }}</td>
            <td>{{ $lists->origin }}</td>
            <td>{{ $lists->activity_start }}</td>
            <td>{{ $lists->activity_end }}</td>
            <td>{{ $lists->activity }}</td>
            <td>{{ $lists->place }}</td>
            <td>{{ $lists->disposisi }}</td>
            <td>{{ $lists->description }}</td>
            <td>@if($lists->file != "")<a href="{{ config('app.url') }}/download?file={{ $lists->file}}">DOWNLOAD</a> @else FILE TIDAK TERSEDIA @endif </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $list->links() }}
  </div>
</main>
@endsection
