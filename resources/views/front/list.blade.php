@extends('front.layout.layout2')
@section('main')
<!-- Jumbotron -->
<form method="GET">
<div class="row">	
	<div class="col-md-5"><input type="text" name="date_start" id='date_start' class="form-control date" placeholder="Tanggal Mulai" value="{{ $date_start }}"></div>
	<div class="col-md-5"><input type="text" name="date_end" id='date_end' class="form-control date" placeholder="Tanggal Mulai" value="{{ $date_end }}"></div>
	<div class="col-md-2"><button class="btn btn-primary" type="submit"> Filter </button></div>
	
</div>
</form>
<div class="jumbotron">
  <table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Penyelenggara/Asal Surat</th>
	      <th scope="col">Waktu Penyelenggaraan </th>
	      <th scope="col">Waktu Selesai</th>
	      <th scope="col">Agenda</th>
	      <th scope="col">Tempat Pelaksaan</th>
	      <th scope="col">Disposisi</th>
	      <th scope="col">Keterangan</th>
	      <th scope="col">Data Pendukung</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@if(count($list) > 0)
		  	@php $i = 1; @endphp
		  	@foreach($list as $lists)
			    <tr>
			      <th scope="row">{{$i}} </th>
			      <td>{{ $lists->origin }}</td>
			      <td>{{ $lists->activity_start }}</td>
			      <td>{{ $lists->activity_end }}</td>
			      <td>{{ $lists->activity }}</td>
			      <td>{{ $lists->place }}</td>
			      <td>{{ $lists->disposisi}}</td>
			      <td>{{ $lists->description }}</td>
			      <td> @if(!empty($lists->file)) <a href="{{ config('app.url') }}/download?file={{ $lists->file }}">DOWNLOAD</a> @else File Tidak Tersedia @endif</td>
			    </tr>
			    @php $i++;@endphp
		    @endforeach
	    @else
	    	<tr>
	    		<td colspan="9">Tidak ada agenda untuk tanggal {{ $date_start  }} sampai {{ $date_end }}</td>
	    	</tr>
	    @endif
	  </tbody>
	</table>
</div>
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