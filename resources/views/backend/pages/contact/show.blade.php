@extends('backend.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
<div class="">
    <div class="page-breadcrumb bg-white mt-4">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{ __("Dashboard")}}</h4>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto py-5">
                <table class="table table-striped table-hover  border-2">
                    <tr class=" border-2">
                        <td class="font-weight-bold">Id:</td>
                        <td>{{ $contact->id }}</td>
                    </tr>
                    <tr class=" border-2">
                        <td class="font-weight-bold">Name:</td>
                        <td>{{ $contact->name }}</td>
                    </tr>
                    <tr class=" border-2">
                        <td class="font-weight-bold">Subject:</td>
                        <td>{{ $contact->subject }}</td>
                    </tr>
                    <tr class=" border-2">
                        <td class="font-weight-bold">Message:</td>
                        <td>{{ $contact->message }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
