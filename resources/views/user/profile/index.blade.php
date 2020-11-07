@extends('layouts.backend.app')

@section('content')
<div class="container-xl">
    <div class="row">
      <div class="col-lg-4">
        <div class="card card-profile">
          <div class="card-body text-center">
            <img class="card-profile-img" src="{{asset('assets/backend/img/static/user-avatar.png')}}">
            <h3 class="mb-3">{{ Auth::user()->name }}</h3>
            <p class="mb-4">
              {{ Auth::user()->email }}
            </p>
            <button class="btn btn-outline-success btn-sm">
            	Location : {{ Auth::user()->city }}
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
      	<form class="card" method="post" action="{{ route('user.profile.update', $user->id) }}">
	      	@method('PATCH')
	        @csrf
	        <div class="card-body">
	            <h3 class="card-title">Edit Profile</h3>
	            <div class="row">
	              <div class="col-md-6">
	                <div class="form-group mb-3">
			          <label class="form-label">user Name :</label>
			          <div >
			            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{ $user->name }}" required>
			                @error('name')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
			          </div>
			        </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group mb-3">
			          <label class="form-label">Email address :</label>
			          <div>
			            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ $user->email }}">
			                @error('email')
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                @enderror
			          </div>
			        </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group mb-3">
			          <label class="form-label">Phone number :</label>
			          <div >
			            <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Mobile Number" value="{{ $user->phone }}">
		                @error('phone')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
			          </div>
			        </div>
	              </div>
	              <div class="col-md-3">
	                <div class="form-group mb-3">
			          <label class="form-label">City :</label>
			          <div >
			            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter City" value="{{ $user->city }}">
		                @error('city')
		                    <span class="invalid-feedback" role="alert">
		                        <strong>{{ $message }}</strong>
		                    </span>
		                @enderror
			          </div>
			        </div>
	              </div>
	              <div class="col-md-12">
	                <div class="form-group mb-3">
			          <label class="form-label">Your Password :</label>
			          <div>
			            <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
			            @error('password')
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $message }}</strong>
			                </span>
			            @enderror
			            <small class="form-hint">
			              Your password must be 8-20 characters long, contain letters and numbers, and must not contain
			              spaces, special characters, or emoji.
			            </small>
			          </div>
			        </div>
	              </div>
	            </div>
	        </div>
	        <div class="card-footer text-right">
	            <button type="submit" class="btn btn-primary">Update Profile</button>
	        </div>
        </form>
      </div>
    </div>
</div>
@endsection