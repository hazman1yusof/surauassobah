@extends('layouts.main')


@section('page')

<div class="page">
	<div class="page-single">
		<div class="container">
		  <div class="row">
		    <div class="col col-login mx-auto">
		      <form class="card" method="POST" action="/login">
		      	@csrf
		        <div class="card-body p-6">
		          <div class="card-title">Login to your account</div>
		          <div class="form-group">
		            <label class="form-label">Username</label>
		            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" name="username">
		          </div>
		          <div class="form-group">
		            <label class="form-label">Password</label>
		            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
		          </div>
		          <div class="form-group">
		            <label class="custom-control custom-checkbox">
		              <input type="checkbox" class="custom-control-input" name="remember" />
		              <span class="custom-control-label">Remember me</span>
		            </label>
		          </div>
		          <div class="form-footer">
		            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
		          </div>
		        </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>
</div>


@endsection