@extends('layout.home')
@section('content')

<div class="container ">

    <h1 class="text-success text-center fw-bold">Our Teams</h1>
    <div class="row ">
     <div class="col">
<div class="card mt-5 mx-auto shadow" style="width: 18rem;">
  <img src="{{URL::asset('/image/profile.jpg')}}" class="card-img-top" alt="picture">
  <div class="card-body">
    <h2 class="card-title text-center">Rashedul Haque</h2>
    <p class="card-text text-center">Software Architecture</p>
  </div>
  </div>
</div>

<div class="col">
<div class="card mt-5 shadow" style="width: 18rem;">
  <img src="{{URL::asset('/image/profile.jpg')}}" class="card-img-top" alt="picture">
  <div class="card-body">
    <h2 class="card-title text-center">Rashedul Haque</h2>
    <p class="card-text text-center">Tester</p>
  </div>
  </div>
</div>

</div>

<div class="row">
     <div class="col">
<div class="card mt-5 mx-auto shadow" style="width: 18rem;">
  <img src="{{URL::asset('/image/profile.jpg')}}" class="card-img-top" alt="picture">
  <div class="card-body">
    <h2 class="card-title text-center">Rashedul Haque</h2>
    <p class="card-text text-center">Software Engineer</p>
  </div>
  </div>
</div>

<div class="col">
<div class="card mt-5 shadow" style="width: 18rem;">
  <img src="{{URL::asset('/image/profile.jpg')}}" class="card-img-top" alt="picture">
  <div class="card-body">
    <h2 class="card-title text-center">Rashedul Haque</h2>
    <p class="card-text text-center">Designer</p>
  </div>
  </div>
</div>

</div>

</div>

@endsection
