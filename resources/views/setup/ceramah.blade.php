@extends('setup.layout')

@section('title', 'Social Media Setup')

@section('body')
	

	<table id="datatables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Month</th>
                <th>Penceramah</th>
                <th>Tajuk</th>
                <th>Muka Surat</th>
                <th>Waktu</th>
                <th>Tarikh</th>
                <th>Link Youtube</th>
                <th>Link Facebook</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ceramahs as $ceramah)
            <tr>
            	<th>{{$ceramah->id}}</th>
            	<th>{{$ceramah->month}}</th>
            	<th>{{$ceramah->penceramah}}</th>
            	<th>{{$ceramah->tajuk}}</th>
            	<th>{{$ceramah->ms}}</th>
            	<th>{{$ceramah->waktu}}</th>
            	<th>{{$ceramah->tarikh}}</th>
            	<th>{{$ceramah->linkyoutube}}</th>
            	<th>{{$ceramah->linkfacebook}}</th>
                <td></td>
            </tr>
            @endforeach
        </tbody>
	</table>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Ceramah Setup</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
	        <form method="POST" action="/setup/ceramah" id="formdata">
	          <input type="hidden" name="oper" value="add">
	          <input type="hidden" name="id">
	          @csrf

			  <div class="form-group">
			    <label for="socmed_name">Month</label>
			    <input type="text" class="form-control" id="socmed_name" name="socmed_name" placeholder="Name" required>
			  </div>

			  <div class="form-group">
			    <label for="penceramah">Penceramah</label>
			    <input type="text" class="form-control" id="penceramah" name="penceramah" placeholder="penceramah" required>
			  </div>

			  <div class="form-group">
			    <label for="tajuk">Tajuk</label>
			    <input type="text" class="form-control" id="tajuk" name="tajuk" placeholder="Tajuk" required>
			  </div>

			  <div class="form-group">
			    <label for="ms">Muka Surat</label>
			    <input type="text" class="form-control" id="ms" name="ms" placeholder="Muka Surat">
			  </div>

			  <div class="form-group">
			    <label for="waktu">Waktu</label>
				    <select name="waktu" id="waktu" class="form-control">
					  <option value ="Dhuha">Dhuha</option>
					  <option value ="Maghrib">Maghrib</option>
					  <option value ="Subuh">Subuh</option>
					  <option value ="Isyak">Isyak</option>
					</select>
			  </div>

			  <div class="form-group">
			    <label for="tarikh">Tarikh</label>
			    <input type="date" class="form-control" id="tarikh" name="tarikh" placeholder="Tarikh" required>
			  </div>

			  <div class="form-group">
			    <label for="linkyoutube">link Youtube</label>
			    <input type="text" class="form-control" id="linkyoutube" name="linkyoutube" placeholder="link youtube">
			  </div>

			  <div class="form-group">
			    <label for="linkfacebook">link Facebook</label>
			    <input type="text" class="form-control" id="linkfacebook" name="linkfacebook" placeholder="link facebook">
			  </div>

			  <div class="float-right">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            <button type="submit" class="btn btn-primary" id="add_save">Save changes</button>
	  	  	  </div>
	  	  	  
			</form>
	      </div>
	    </div>
	  </div>
	</div>

@endsection


@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection

@section('js')
	<script src="{{ asset('js/utility.js') }}"></script>
	<script src="{{ asset('js/ceramah.js') }}"></script>
	<script src="{{ asset('assets/DataTables/datatables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@endsection