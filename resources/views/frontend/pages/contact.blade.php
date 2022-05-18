@extends('frontend.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container py-5 px-5">
        <h1 class="text-center p-5 font-weight-bold">Contct Us</h1>
        <div class="row">
            <div class="col-md-8">
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">{{ session('message') }}</div>
                @endif
                <form action="{{ route('send-message')}}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name">
                        @error('name')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                      </div>
                      <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email">
                        @error('email')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                      </div>
                      <div class="form-group col-md-12">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject">
                        @error('subject')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                      </div>
                      <div class="form-group col-md-12">
                        <label for="message">Message</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3"></textarea>
                        @error('message')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                     </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
            </div>
            <div class="col-md-4 px-5">
                <div class="p-4">
                    <h4>Address:</h4>
                    <span>{{ $setting->address}}</span><br>
                </div>
                <div class="p-4">
                    <h4>Phone:</h4>
                    <span>{{ $setting->number}}</span><br>
                </div>
                <div class="p-4">
                    <h4>Email:</h4>
                    <span>{{ $setting->email}}</span><br>
                </div>
            </div>
        </div>
    </div>
@endsection
