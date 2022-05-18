@extends('frontend.layouts.master')
@section('title')
  {{$title}}
@endsection
@section('content')
<div class="h-100px">
    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('frontend//img/blog/blog-1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend//img/blog/blog-1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('frontend//img/blog/blog-1.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> --}}
</div>
<div class="container mt-5">
    <div class="row d-flex justify-content-between py-5">
        <div class="col-md-10 ">
            <div class="row">
              @foreach ($posts as $post)
                <div class="col-md-4">
                    <a href="{{ route('single',$post->id)}}">
                      <div class="card my-4 text-dark">
                        <img src="{{ asset('storage/'.$post->image)}}"  height="200px" class="card-img-top"  alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $post->title}}</h5>
                          <span class="text-secondary mb-4 mr-3">{{ $post->category->name}}</span>
                          <span class="ml-4">{{ $post->created_at->format('M d, Y')}}</span>
                          <p class="card-text">{{ Str::limit($post->body, 100,'....')}}</p>
                            <span style='color: red;'>{{ __("see more")}}</span>
                        </div>
                      </div>
                    </a>
                </div>
              @endforeach
            </div>
            <div class="text-center">

            </div>
            <div>{{ $posts->links() }}</div>
        </div>
        <div class="col-md-2 pt-4">
            <h3 class="sidebar-title">{{ __("Categories")}}</h3>
            <div class="sidebar-item categories">
              <ul>
               @foreach ($categories as $cat)
               <li><a href="{{ route('view-category',$cat->id) }}">{{ $cat->name}}</a></li>
               @endforeach
              </ul>
            </div><!-- End sidebar categories-->
                <h3 class="sidebar-title">{{ __("Tags")}}</h3>
            <div class="sidebar-item categories">
                <ul>
                @foreach ($tags as $tag)
                <span class="badge bg-primary p-1 "><a href="{{ route('view-tag', $tag->id)}}" class="text-dark">{{ $tag->name}}</a></span>
                @endforeach
                </ul>
            </div><!-- End sidebar categories-->
        </div>

    </div>
</div>
@endsection



