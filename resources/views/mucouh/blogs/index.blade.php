@extends('mucouh.layouts.main')

@section('content')


<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
            <h1 class="h2">Events</h1>
        </div>
        <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active">Events</li>
            </ul>
        </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">
      <div class="row bar">
        <!-- LEFT COLUMN _________________________________________________________-->
        <div id="blog-listing-small" class="col-lg-9">
          <div class="row">

            @foreach ($events as $e)

                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-post">
                    <div class="image"><img src="{{asset($e->image_url)}}" alt="..." class="img-fluid">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="{{route('event',$e->uuid)}}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
                    </div>
                    <div class="text">
                        <h4><a href="{{route('event','incoming event')}}">{{substr($e->title,0,20)}}... </a></h4>
                        <p class="author-category">By <a href="#">{{$e->author}}</a></p>
                        <p class="intro">
                            {!! substr($e->body,0,100)!!}...
                        </p><a href="{{route('event',$e->uuid)}}" class="btn btn-template-outlined">Continue Reading</a>
                    </div>
                    </div>
                </div>

            @endforeach


          </div>
          <ul class="pager list-unstyled d-flex align-items-center justify-content-between">
            <li class="previous"><a href="#" class="btn btn-template-outlined">← Older</a></li>
            <li class="next disabled"><a href="#" class="btn btn-template-outlined">Newer →</a></li>
          </ul>
        </div>

        @include('mucouh.blogs.sidebar')
      </div>
    </div>
  </div>





@endsection
