@extends('layout.home')
@section('content')

<div id="container">
<h1 class="text-success text-center">Welcome</h1>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="https://st.depositphotos.com/1024979/4398/i/600/depositphotos_43986663-stock-photo-welcome.jpg" height=500 class="d-block w-100" alt="1st">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="https://img.freepik.com/free-vector/colorful-hand-drawn-welcome-landing-page_23-2148274061.jpg?w=2000" height=500 class="d-block w-100" alt="2nd">
    </div>
    <div class="carousel-item">
      <img src="https://us.123rf.com/450wm/maxborovkov/maxborovkov1809/maxborovkov180900067/110330061-autumn-welcome-sign-with-colorful-maple-leaves-vector-background-.jpg?ver=6" height=500 class="d-block w-100" alt="3rd">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
@endsection
