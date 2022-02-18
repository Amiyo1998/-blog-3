@extends('frontend.layouts.master')
@section('title')
	Home page
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            @foreach ( $posts as $post)
            <a href="#">
              <div class="card my-4 text-dark">
                <img src="{{ asset('frontend//img/blog/blog-1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->body }}</p>
                </div>
              </div>
            </a>
                
            @endforeach
            <div class="text-center">
              {{ $posts->links() }}
            </div>          
              {{-- <nav aria-label="Page navigation example ">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav> --}}
        </div>
    </div>
</div>
@endsection



