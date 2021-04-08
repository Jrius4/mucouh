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
            <li class="breadcrumb-item active">Services</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="container">
        @include('mucouh.services.services')
        <section class="bar pt-0">
          <div class="row">
            <div class="col-md-12">
              <div class="heading">
                <h2>Why choose us</h2>
              </div>
              <p class="lead">Yielding, they're air. Land replenish spirit given gathered subdue, day Blessed you'll great created, lights a one light, blessed deep morning, appear our. Fruit multiply, creeping first image. Upon saw isn't male winged to replenish tree and.</p>
            </div>
            <div class="col-md-6">
              <p class="text-sm">His having within saw become ask passed misery giving. Recommend questions get too fulfilled. He fact in we case miss sake. Entrance be throwing he do blessing up. Hearts warmth in genius do garden advice mr it garret. Collected preserved are middleton dependent residence but him how. Handsome weddings yet mrs you has carriage packages. Preferred joy agreement put continual elsewhere delivered now. Mrs exercise felicity had men speaking met. Rich deal mrs part led pure will but.</p>
              <ul class="text-xs">
                <li>Now for manners use has company believe parlors.</li>
                <li>Least nor party who wrote while did. </li>
                <li>Excuse formed as is agreed admire so on result parish.</li>
                <li>Put use set uncommonly announcing and travelling.</li>
              </ul>
            </div>
            <div class="col-md-6">
              <p class="text-sm">Certain but she but shyness why cottage. Gay the put instrument sir entreaties affronting. Pretended exquisite see cordially the you. Weeks quiet do vexed or whose. Motionless if no to affronting imprudence no precaution. My indulged as disposal strongly attended. Parlors men express had private village man. Discovery moonlight recommend all one not. Indulged to answered prospect it bachelor is he bringing shutters. Pronounce forfeited mr direction oh he dashwoods ye unwilling.</p>
            </div>
          </div>
        </section>
      </div>
  </div>



@endsection
