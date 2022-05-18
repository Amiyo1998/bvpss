@extends('frontend.layouts.master')
@section('title')
  {{$title}}
@endsection
@section('content')
<div class="h-100px">
</div>
<div class="container mt-5">
    <div class="row d-flex justify-content-between py-5">
        <div class="col-md-10 ">
            <div class="row">
                <h2>{{ $category->name}}</h2>
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
            <div class="py-4">
                <a href="{{ route('home')}}">
                    <button class="btn btn-danger fs-4 fw-bold text-light px-2 py-1" >{{ __("Back->")}}</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection



