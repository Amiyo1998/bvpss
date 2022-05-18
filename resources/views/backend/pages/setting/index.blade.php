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
                        <p class="bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("Setting")}}</p>
                    </div>
                </div>
                <div class="mx-2">
                    @foreach ( $settings as $setting )
                        <div class="form-group row border border-3 ">
                          <label for="name" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Site name:")}}</label>
                          <div class="col-sm-9">
                            <h4>{{ $setting->name }}</h4>
                          </div>
                        </div>
                        <div class="form-group row border border-3 ">
                            <label for="address" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Address:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->address }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="number" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Number:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->number }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="email" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Email:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->email }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="twitter" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Twitter:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->twitter }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="facebook" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Facebook:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->facebook }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="instagram" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Instagram:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->instagram }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="skype" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Skype:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->skype }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="linkedin" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Linkedin:")}}</label>
                            <div class="col-sm-9">
                                <h4>{{ $setting->linkedin }}</h4>
                            </div>
                          </div>
                          <div class="form-group row border border-3 ">
                            <label for="copyright" class="col-sm-3 col-form-label bg-primary text-light fw-bold">{{ __("Copyright:")}}</label>
                            <div class="col-sm-9">
                              <h4>{{ $setting->copyright }}</h4>
                            </div>
                          </div>
                          <a href="{{ route('setting.edit', $setting->id)}}" class="text-light bg-primary d-inline-block p-1 border rounded-3 fs-4 fw-bold">{{__("Edit")}}</a>
                        @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

