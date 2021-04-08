
 <!--  RIGHT COLUMN _________________________________________________________-->
 <div class="col-lg-3">

    <div class="panel panel-default sidebar-menu">
      <div class="panel-heading">
        <h3 class="h4 panel-title">Search</h3>
      </div>
      <div class="panel-body">
        <form role="search" action="{{route('events')}}" method="GET">
          <div class="input-group">
            <input type="text" placeholder="Search" name="keywords" class="form-control"><span class="input-group-btn">
              <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
          </div>
        </form>
      </div>
    </div>

  </div>
