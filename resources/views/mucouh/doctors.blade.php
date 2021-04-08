<section class="bar mb-0 bg__grey">
    <div class="row text-center">
      <div class="col-md-12">
        <div class="heading">
          <h2>Our Doctors</h2>
        </div>
        <div class="row text-center">
              @foreach ($doctors as $item)


              <div class="col-md-3">
                  <div data-animate="fadeInUp" class="team-member">
                      <div class="image"><a href="javascript:void(0)"><img src="{{asset('/assets-hospital/images/'.$item->avatar)}}" alt="" class="img-fluid rounded-circle"></a></div>
                      <h3 class="text__purple">{{$item->name}}</h3>
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
