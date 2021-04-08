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
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">Our Team</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="content">

    <div class="container">
        <section class="bar mb-0">
          <div class="row">
            <div class="col-md-12">
              <div class="heading">
                <h2>Who is responsible for Mukono C.O.U Hospital?</h2>
              </div>
              <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

              <div class="row text-center">
                    @foreach ($members as $item)


                    <div class="col-md-3">
                        <div data-animate="fadeInUp" class="team-member">
                            <div class="image"><a href="{{route('member',$item->name)}}"><img src="{{asset('/assets-hospital/img/'.$item->avatar)}}" alt="" class="img-fluid rounded-circle"></a></div>
                            <h3><a class="text__purple" href="{{route('member',$item->name)}}">{{$item->name}}</a></h3>
                            <p class="role">{{$item->role}}</p>

                            <div class="text">
                            <p>{!! substr($item->biography,0,100)!!}...</p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                <!-- /.team-member-->

              </div>

            </div>
          </div>
        </section>
      </div>

  </div>



@endsection
