@extends('mucouh.layouts.main')

@section('content')



<div id="heading-breadcrumbs" class="brder-top-0 border-bottom-0">
    <div class="container">
      <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
          <h1 class="h2">About Us</h1>
        </div>
        <div class="col-md-5">
          <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="container">
        <section class="bar">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>About Mukono Church Of Uganda Hospital</h2>
                    </div>
                    <p class="lead">
                        Mukono Church of Uganda Hospital is a private not for profit hospital that started way back in 1928 by a missionary called Sir Albert Cook. It was officially opened on 10th February 1931. It started as a maternity center under Namirembe Diocese until 1984 when Mukono Diocese took over. In 2012 the facility upgraded from a Health Centre IV to a Hospital and has since birthed other health centers in Mukono, Buikwe and Kayunga districts. These include Kyoga HC III, Kikandwa HC III, Bukaya HC III, Namuyenje HC III, and Nangunga HC III.
                    </p>
                </div>

                <div class="col-md-4 offset-md-2">
                    <div class="heading">
                      <h2>Our values</h2>
                    </div>
                    <ul class="ul-icons list-unstyled">
                      <li>
                        <div class="icon-filled"><i class="fa fa-check"></i></div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                      </li>
                      <li>
                        <div class="icon-filled"><i class="fa fa-check"></i></div>Aliquam tincidunt mauris eu risus.
                      </li>
                      <li>
                        <div class="icon-filled"><i class="fa fa-check"></i></div>Vestibulum auctor dapibus neque.
                      </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="heading">
                      <h2>Our values</h2>
                    </div>
                    <ul class="ul-icons list-unstyled">
                      <li>
                        <div class="icon-filled"><i class="fa fa-check"></i></div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                      </li>
                      <li>
                        <div class="icon-filled"><i class="fa fa-check"></i></div>Aliquam tincidunt mauris eu risus.
                      </li>
                      <li>
                        <div class="icon-filled"><i class="fa fa-check"></i></div>Vestibulum auctor dapibus neque.
                      </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
  </div>



@endsection
