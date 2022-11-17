@extends('layout')
  
@section('content')
<div class="container">
	<div class="row">
  	<div class="col-sm-12">
    	<div class="card card-default">
      	<div class="card-header">
        	<div class="d-flex justify-content-between">
          <div>{{ __('Dashboard') }}</div>
          <div>
               <a class="nav-link" href="/products">Products</a>
          </div>
          </div>
        </div>

        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            You are Logged In

        </div>
      </div>
    </div>
  </div>
</div>
</div>