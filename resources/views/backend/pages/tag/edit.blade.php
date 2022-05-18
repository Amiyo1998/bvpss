@extends('backend.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
<div class="">
    <div class="page-breadcrumb bg-white mt-4">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{ __("Dashboard /")}}{{$title}}</h4>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto py-5">
                <div class="bg-primary justify-content-between d-flex px-1 py-1 mb-3 border rounded-3">
                    <div class="mt-3">
                        <p class="bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("Add Tag")}}</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('tag.index')}}">
                            <p  class="text-dark bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("All Tag")}}</p>
                        </a>
                    </div>
                </div>
                <div class="mx-2">
                    <form action="{{ route('tag.update', $tag->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group row border border-3 ">
                          <label for="name" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Tag name:")}}</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext @error('name') is-invalid @enderror " name="name" id="name" value="{{ $tag->name}}">
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __("Submit")}}</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

