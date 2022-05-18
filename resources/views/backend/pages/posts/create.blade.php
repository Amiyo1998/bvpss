@extends('backend.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
<div class="">
    <div class="page-breadcrumb bg-white mt-4">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{ __("Dashboard")}} /{{$title}}</h4>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto py-5">
                <div class="bg-primary justify-content-between d-flex px-1 py-1 mb-3 border rounded-3">
                    <div class="mt-3">
                        <p class="bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("Add post")}}</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('posts.index')}}">
                            <p  class="text-dark bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("All post")}}</p>
                        </a>
                    </div>
                </div>
                <div class="mx-2">
                    <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row border border-3 ">
                          <label for="title" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Title ")}}</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext @error('title') is-invalid @enderror " name="title" id="title" value="{{ old('title')}}">
                            @error('title')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row border border-3 ">
                            <label for="cat_id" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Category name")}}</label>
                            <div class="col-sm-9">
                                <select name="cat_id" id="cat_id" class="form-control-plaintext @error('cat_id') is-invalid @enderror" >
                                    <option value="" >{{ __("Select category")}}</option>
                                    @foreach ($categories as $cat )
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                              @error('cat_id')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="body" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Body")}}</label>
                            <div class="col-sm-9">
                                <textarea name="body" id="body" cols="20" rows="5" class="form-control-plaintext @error('body') is-invalid @enderror ">{{ old('body')}}</textarea>
                              @error('body')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="image" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Image")}}</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control-plaintext @error('image') is-invalid @enderror " name="image" id="image">
                              @error('image')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            @foreach ($tags as $tag)
                                <div class="col-sm-9">
                                <input type="checkbox" id="tag{{ $tag->id}}" name="tags[]" value="{{ $tag->id}}"
                                {{-- @foreach ($tags as $t)
                                    @if ($tag->id == $t->id) checked @endif
                                @endforeach --}}
                                >
                                <label for="tag{{ $tag->id}}"> {{ $tag->name}}</label>
                                @error('tag_id')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                </div>
                            @endforeach
                          </div>
                        <button type="submit" class="btn btn-primary">{{ __("Submit")}}</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
