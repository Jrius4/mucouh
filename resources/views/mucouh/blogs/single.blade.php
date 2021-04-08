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
            <li class="breadcrumb-item"><a href="{{route('events')}}">Events</a></li>
            <li class="breadcrumb-item active">Event Post</li>
            </ul>
        </div>
        </div>
    </div>
</div>



<div id="content">
    <div class="container">
        <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div id="blog-post" class="col-lg-9">
                <p class="text-muted text-uppercase mb-small text-right text-sm">By <a href="#">{{$event->author}}</a> |  {{date_format(date_create($event->created_at),'D, M d, Y')}}</p>
                <p class="lead">{{$event->title}}</p>
                <div id="post-content">
                    <p>
                        {{$event->body}}
                    </p>
                </div>
            </div>

            @include('mucouh.blogs.sidebar')
        </div>
    </div>
</div>

@endsection
