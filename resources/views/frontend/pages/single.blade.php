@extends('frontend.layouts.master')

@section('title')
	{{$title}}
@endsection
@section('content')
      <div class="container ">
        <div class="row d-flex justify-content-between">
          <div class="col-lg-8 entries" style="padding-top: 100px">
            <article class="entry entry-single">
                <div class="entry-img">
                    <img src="{{ asset('storage/'.$post->image)}}" alt="" class="img-fluid">
                </div>
                <h2 class="entry-title">{{ $post->title}}</h2>
                <span class="text-secondary mb-4">{{ $post->category->name}}</span>
                <span class="ml-4">{{ $post->created_at->format('M d, Y')}}</span>
                <div class="entry-content">
                    {{ $post->body}}
                </div>
            </article><!-- End blog entry -->
            <div class="comment">
                <div class="pt-5">
                    <h3 class="mb-2" id="dsq-count-scr">6 Comments</h3>
                    <div class="comment-form-wrap py-3 d-flex " >
                        <div class="vcard" >
                            <img src="{{ asset('storage/images/posts/1.png') }}" alt="Image placeholder" width="50px" height="40px">
                        </div>
                        <form action="{{ route('chat-message', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row my-2  form_chat ml-2 d-flex justify-content-between" style="border: 1px solid rgb(153, 148, 148); border-radius:20px; width:80%; display:inline-block">
                                <div class="col-md-9">
                                    <input type="text" name="comment" placeholder="reply" style="border:none; outline:none; width:100%;">
                                </div>
                               <div class="col-md-2 px-0">
                                    <input type="file" name="image" style="width:100%; border: none; border-radius:22px;" >
                               </div>
                            </div>
                            <button class="btn btn-primary ml-4">Send</button>
                        </form>
                    </div>
                    <div id="disqus_thread"></div>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard" >
                                <img src="{{ asset('storage/images/posts/1.png') }}" alt="Image placeholder" >
                            </div>
                            @foreach ($post->comments as $comment)
                            <div class="comment-body">
                                <h3>{{ $comment->user->name }}</h3>
                                <div class="meta">{{ $comment->created_at->format('M, d Y H:i') }}</div>
                                <div class="d-flex justify-content-between">
                                    <p class="bg-light p-3">{{ $comment->comment }}</p>
                                </div>
                                {{-- <button type="button" class="btn btn-primary outline-none">Reply</button>
                                <div class="comment-form-wrap-first pt-5 " style="display: none">
                                    <div class="form_chat">
                                        <div style="float: left;" >
                                            <img src="{{ asset('storage/images/posts/1.png') }}" alt="Image placeholder" width="50px" height="40px">
                                        </div>
                                        <form action="" class="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row my-2  form_chat ml-2 d-flex justify-content-between" style="border: 1px solid rgb(153, 148, 148); border-radius:20px; width:80%; display:inline-block">
                                                <div class="col-md-9">
                                                    <input type="text" name="" placeholder="reply" style="border:none; outline:none; width:100%;">
                                                </div>
                                               <div class="col-md-2 px-0">
                                                    <input type="file" name="" class="" style="width:100%; border: none; border-radius:22px;" >
                                               </div>
                                            </div>
                                            <button class="btn btn-primary ml-5">Send</button>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-4">
                <a href="{{ route('home')}}">
                    <button class="btn btn-danger fs-4 fw-bold text-light px-2 py-1" >{{ __("Back->")}}</button>
                </a>
            </div>
          </div><!-- End blog entries list -->
          <div class="col-lg-3" style="padding-top: 100px">
            <h1 class="underline">Tag</h1>
            @foreach ($post->tags as $tag)
                <span class="badge bg-primary p-1 "><a href="{{ route('view-tag', $tag->id)}}" class="text-dark">{{ $tag->name}}</a></span>
            @endforeach
          </div>
        </div>
      </div>

@endsection
@section('scripts')
<script>
    $(document).ready(function(){
      $("button").click(function(){
        $(".comment-form-wrap-first").toggle();
      });
    });
    $(document).ready(function(){
      $(".reply_button").click(function(){
        $(".reply_action").toggle();
      });
    });
</script>
@endsection
