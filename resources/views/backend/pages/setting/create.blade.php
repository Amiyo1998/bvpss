{{-- @extends('backend.layouts.master')
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
                        <p class="bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("Create Setting")}}</p>
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('setting.index')}}">
                            <p  class="text-dark bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("All Setting")}}</p>
                        </a>
                    </div>
                </div>
                <div class="mx-2">
                    <form action="{{ route('setting.store')}}" method="POST">
                        @csrf
                        <div class="form-group row border border-3 ">
                          <label for="name" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Site name:")}}</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext @error('name') is-invalid @enderror " name="name" id="name" >
                            @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                          </div>
                        </div>
                        <div class="form-group row border border-3 ">
                            <label for="address" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Address:")}}</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control-plaintext @error('address') is-invalid @enderror " name="address" id="name" >
                              @error('address')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="number" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Number:")}}</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control-plaintext @error('number') is-invalid @enderror " name="number" id="number" >
                              @error('number')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="email" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Email:")}}</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control-plaintext @error('email') is-invalid @enderror " name="email" id="email" >
                              @error('email')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="twitter" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Twitter:")}}</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control-plaintext @error('twitter') is-invalid @enderror " name="twitter" id="twitter" >
                              @error('twitter')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="facebook" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Facebook:")}}</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control-plaintext @error('facebook') is-invalid @enderror " name="facebook" id="facebook" >
                              @error('facebook')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="instagram" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Instagram:")}}</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control-plaintext @error('instagram') is-invalid @enderror " name="instagram" id="instagram" >
                              @error('instagram')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="skype" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Skype:")}}</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control-plaintext @error('skype') is-invalid @enderror " name="skype" id="skype" >
                              @error('skype')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="linkedin" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Linkedin:")}}</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control-plaintext @error('linkedin') is-invalid @enderror " name="linkedin" id="linkedin" >
                              @error('linkedin')
                                  <strong class="text-danger">{{ $message }}</strong>
                              @enderror
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="copyright" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Copyright:")}}</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control-plaintext @error('copyright') is-invalid @enderror " name="copyright" id="copyright" >
                              @error('copyright')
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
 --}}
