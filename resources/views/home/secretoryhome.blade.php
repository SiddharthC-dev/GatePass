
{{-- <div class="card-body box-profile">
    <div class="text-center">
      <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
    </div>

    <h3 class="profile-username text-center">Nina Mcintire</h3>

    <p class="text-muted text-center">Software Engineer</p>

    <ul class="list-group list-group-unbordered mb-3">
      <li class="list-group-item">
        <b>Followers</b> <a class="float-right">1,322</a>
      </li>
      <li class="list-group-item">
        <b>Following</b> <a class="float-right">543</a>
      </li>
      <li class="list-group-item">
        <b>Friends</b> <a class="float-right">13,287</a>
      </li>
    </ul>

    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
  </div> --}}
  <section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">

                        <h3> {{ $users??0 }}</h3>

                        <p><b>Users</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">

                       <h3> {{ $apartments??'0' }}</h3>

                        <p><b>Apartment</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3> {{ $roles??'0' }}</h3>


                        <p><b>Roles</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3> {{ $roles??'0' }}</h3>

                        <p><b>Permissions</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

</section>

