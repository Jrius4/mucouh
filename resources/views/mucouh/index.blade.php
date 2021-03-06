@extends('mucouh.layouts.main')

@section('content')


<section style="background: url({{asset('/assets-hospital/images/02.jpg')}}) center center repeat; background-size: cover;" class="relative-positioned">
    <!-- Carousel Start-->
    <div class="home-carousel">
      <div class="dark-mask mask-primary"></div>
      <div class="container">
        <div class="homepage owl-carousel">
          <div class="item">
            <div class="row">
              <!-- <div class="col-12" style="height: 60vh;">
                <img src="/assets-hospital/images/06.jpg" alt="" class="img-fluid">
              </div> -->
              <div class="col-md-5 text-right">
                <h1>VISION</h1>
                <p>
                    To offer holistic health care for God’s glory
                </p>
              </div>
              <div class="col-md-7"><img src="/assets-hospital/images/02.jpg" alt="" class="img-fluid"></div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5 text-right">
                <h2>Mukono C.O.U Hospital</h2>
                <h1>MISSION</h1>
                <p>To provide quality affordable, curative and preventive health services to meet the needs of the society across gender, <br> creed, race and tribe while demonstrating the love of Christ.</p>
              </div>
              <div class="col-md-7"><img src="/assets-hospital/images/01.jpg" alt="" class="img-fluid"></div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-7 text-center"><img src="/assets-hospital/images/04.jpg" alt="" class="img-fluid"></div>
              <div class="col-md-5">
                <h2>CORE VALUES</h2>
                <ul class="list-unstyled">
                  <li>Christianity</li>
                  <li>Integrity</li>
                  <li>Flexibility</li>
                  <li>Professionalism</li>
                  <li>Team work</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="row">
              <div class="col-md-7"><img src="/assets-hospital/images/03.jpg" alt="" class="img-fluid"></div>
              <div class="col-md-5">
                <h1>AIMS AND OBJECTIVES</h1>

                    <ul class="list-unstyled">
                        <li class="text__small">To provide quality curative and preventive health care at affordable rates.</li>
                        <li class="text__small">To demonstrate Christ’s love to our clients in all our activities.</li>
                        <li class="text__small">To promote community-based health care as means for community development.</li>
                        <li class="text__small">To promote professional development through staff training, seminars, short courses and conferences.</li>
                        <li class="text__small">To Participate in income generating activities designed to make Mukono C.O.U Hospital self-sustaining</li>
                    </ul>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End-->
  </section>
  <section class="bar">
        <div class="container">
                <div class="row justify-content-center">


                    <div class="card shadow-md col-lg-6 col-md-6 bg__grey text-center p-2">
                        <div class="image">
                            <img class="img-fluid rounded-circle" src="{{asset('assets-hospital/images/logo.jpg')}}" alt="" width="75" height="75">
                        </div>
                        <div class="clear-fix"></div>
                        <h1> Offering holistic health care for God's Glory</h1>
                        <p class="lead">
                            The center of excellence for quality, holistic health care, medical education, and research. Welcome and thank you for your interest in visiting the mukono church of uganda Hospital website. Our website is exceptionally interactive and collaborative.
                        </p>
                        <p class="author lead text-italics">
                            <i> written by  <em><a class="font-bold" href="javascript:void(0)">Dr.Simon Nsingo.</a></em></i>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="image">
                            <img class="img-fluid border__pink shadow-md" src="{{asset('assets-hospital/images/lab01.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
        </div>
  </section>

  @include('mucouh.services.services')


  @include('mucouh.doctors')


@endsection
