@extends('mucouh.layouts.main')

@section('content')



<div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
          <h1 class="h2">Services</h1>
        </div>
        <div class="col-md-5">
          <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('services')}}">Services</a></li>
            <li class="breadcrumb-item active">Admissions</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="container">

        <section class="bar pt-0">
          <div class="row">
            <div class="col-md-12">
              <div class="heading">
                <h2>Maternity ward:</h2>
              </div>
              <p class="lead">The facility offers quick, customer friendly service in professional diagnosis, management, and treatment of medical, surgical, gynecological, and obstetric conditions for adults and children at a one stop center</p>

            </div>

            <div class="col-md-12">
                <div class="heading">
                    <h2>Pediatric ward:</h2>
                </div>
                <p class="lead">The facility offers quick, customer friendly service in professional diagnosis, management, and treatment of medical, surgical, gynecological, and obstetric conditions for adults and children at a one stop center</p>
            </div>

            <div class="col-md-12">
                <div class="heading">
                    <h2>Surgery ward:</h2>
                </div>
                <p class="lead">The facility offers quick, customer friendly service in professional diagnosis, management, and treatment of medical, surgical, gynecological, and obstetric conditions for adults and children at a one stop center</p>
            </div>


            <div class="col-md-12">
                <div class="heading">
                    <h2>General Doctor Consultation:</h2>
                </div>
                <p class="lead">The facility offers quick, customer friendly service in professional diagnosis, management, and treatment of medical, surgical, gynecological, and obstetric conditions for adults and children at a one stop center</p>
            </div>

            <div class="col-md-12">
                <div class="heading">
                    <h2>Medical ward:</h2>
                </div>
                <p class="lead">The facility offers quick, customer friendly service in professional diagnosis, management, and treatment of medical, surgical, gynecological, and obstetric conditions for adults and children at a one stop center</p>
            </div>

            <div class="col-md-12">
                <div class="heading">
                    <h2>General Doctor Consultation:</h2>
                </div>
                <ul class="list-group text-left">
                    <li >General Doctor Consultation</li>
                         <li>Treatment of Minor Ailments</li>
                         <li>Wellness Checkups</li>

                 </ul>
            </div>

          </div>
        </section>
      </div>
  </div>



@endsection
