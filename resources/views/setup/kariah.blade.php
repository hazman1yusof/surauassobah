@extends('setup.layout')

@section('title', 'kariah Setup')

@section('body')
	

	<table id="datatables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>kariah Name</th>
                <th>kariah IC</th>
                <th>kariah Telefon</th>
                <th>kariah Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kariahs as $kariah)
            <tr>
                <td>{{$kariah->id}}</td>
                <td>{{$kariah->name}}</td>
                <td>{{$kariah->ic}}</td>
                <td>{{$kariah->telno}}</td>
                <td>{{$kariah->alamat}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
	</table>

	<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">kariah</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">
	        <form method="POST" action="/setup/kariah" enctype="multipart/form-data" id="formdata">
	          <input type="hidden" name="oper" value="add">
	          <input type="hidden" name="id">
	          @csrf

			  <div class="form-group">
			    <label for="name">kariah Name</label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="kariah Name" required>
			  </div>
			  <div class="form-group">
			    <label for="ic">kariah I/C</label>
			    <input type="text" class="form-control" id="ic" name="ic" placeholder="kariah I/C" required>
			  </div>
			  <div class="form-group">
			    <label for="telno">kariah Telefon</label>
			    <input type="text" class="form-control" id="telno" name="telno" placeholder="kariah Telefon" required>
			  </div>

			  <div class="form-group">
			    <label for="alamat">kariah Alamat</label>
			    <textarea class="form-control" id="alamat" name="alamat" placeholder="kariah Alamat" rows="5" required></textarea>
			  </div>

		      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      <button type="submit" class="btn btn-primary" id="add_save">Save changes</button>

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
	<script src="{{ asset('js/kariah.js') }}"></script>
	<script src="{{ asset('assets/DataTables/datatables.min.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection