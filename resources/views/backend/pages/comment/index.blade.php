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
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">{{ session('message') }}</div>
                @endif
                <div class="bg-primary justify-content-between d-flex px-1 py-1 mb-3 border rounded-3">
                    <div class="mt-3">
                        <p class="bg-white p-1 border rounded-3 fs-4 fw-bold">{{ __("All Post")}}</p>
                    </div>
                </div>
                <table class="table table-striped table-hover border-2">
                    <tr class="border-2">
                        <th class="border-2">{{ __("ID")}}</th>
                        <th class="border-2">{{ __("User")}}</th>
                        <th class="border-2">{{ __("Comment")}}</th>
                        <th class="border-2">{{ __("Action")}}</th>
                    </tr>
                    @if ($comments->count())
                    @foreach ($comments as $key=>$comment)
                    <tr>
                        <td class="border-2">{{ ++$key}}</td>
                        <td class="border-2">{{ $comment->user->name }}</td>
                        <td class="border-2">{{ $comment->comment }}</td>
                        <td class="border-2 ">
                            {{-- <a href="{{ route('posts.edit', $post->id)}}" class="text-light bg-primary d-inline-block p-1 border rounded-3 fs-4 fw-bold">{{ __("Edit")}}</a> --}}
                            <form action="{{ route('comment.destroy',$comment->id )}}" method="POST" class="d-inline-block border rounded-3 ">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger fs-4 fw-bold text-light px-2 py-1" onclick="return confirm('Are you sure to delete?');">{{ __("Delete")}}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr class="border-2">
                        <td colspan="6" class="text-center"><h4>{{ __("Posts not found")}}</h4></td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
