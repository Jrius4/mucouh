@extends('mucouh.layouts.main')

@section('content')



<div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
        <div class="container">
            <div class="row d-flex align-items-center flex-wrap">
              <div class="col-md-7">
                <h1 class="h2">Our Team</h1>
              </div>
              <div class="col-md-5">
                <ul class="breadcrumb d-flex justify-content-end">
                  <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{route('our-team')}}">Our Team</a></li>
                  <li class="breadcrumb-item active">Team Member</li>
                </ul>
              </div>
            </div>
        </div>
  </div>
  <div id="content">

    <div class="container">

        <section class="bar">
            <div class="row">
              <div class="col-md-12">
                <div class="heading">
                  <h2>About {{$member->name}}</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <p>{!! $member->biography!!}...</p>

                <div class="heading">
                  <h3>{{$member->name}}'s main responsibilities are</h3>
                </div>
                <ul class="ul-icons list-unstyled">
                    @if($member->responsibilites != null)

                    @foreach (json_decode($member->responsibilites,true) as $item)
                        <li>
                            <div class="icon-filled"><i class="fa fa-check"></i></div>{{$item}}
                        </li>
                    @endforeach

                  @endif
                </ul>
              </div>
              <div class="col-md-4"><img alt="" src="{{asset('/assets-hospital/img/'.$member->avatar)}}" class="img-fluid rounded-circle"></div>
            </div>
          </section>

    </div>

  </div>



@endsection
