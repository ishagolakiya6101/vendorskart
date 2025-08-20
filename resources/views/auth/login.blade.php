@extends('auth.auth_layout')
@section('content')
<div class="text-center mb-7"><a class="d-flex flex-center text-decoration-none mb-4" href="#">
    <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{asset('assets/img/icons/logo.png')}}" alt="phoenix" width="58" /></div>
  </a>
  <h4 class="mb-1 pt-2">Welcome to Vendorskart! 👋</h4>
  <p class="text-body-tertiary">Get access to your account</p>
</div>
<!-- <p class="mb-4">Please sign-in to your account and start the adventure</p> -->

<form id="formAuthentication" class="mb-3" action="{{url('login')}}" method="POST">
  @csrf
  <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
  </div>
  <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
  </div>
  <div class="row flex-between-center mb-3">
    <div class="col-auto"><a class="fs-9 fw-semibold" href="{{url('password/reset')}}">Forgot Password?</a></div>
  </div>
  <div class="mb-3">
    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
  </div>
</form>
<div class="text-center"><a class="fs-9 fw-bold" href="{{route('register')}}">Create an account</a></div>

@endsection