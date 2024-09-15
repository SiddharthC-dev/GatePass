<center>


    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle"
                        width="150">
                    <div class="mt-3">
                        <h4>{{ Auth::user()->name }}</h4>
                        {{-- <p class="text-secondary mb-1">Full Stack Developer</p>
                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> --}}
                        {{-- <button class="btn btn-primary">Follow</button>
                         <button class="btn btn-outline-primary">Message</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">


    </div>
    <div class="col-md-8">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $userinformation->user_name ?? Auth::user()->name ?? 'Not Available' }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> {{ Auth::user()->email ?? 'Not Available' }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Flat Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> {{ $userinformation->flat_No ?? 'Not Available' }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Wings</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> {{ $userinformation->wing ?? 'Not Available' }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> {{ $userinformation->type ?? 'Not Available' }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Mobile Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> {{ $userinformation->mobile_No ?? 'Not Available' }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Occupation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> {{ $userinformation->occupation ?? 'Not Available' }}</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Birth Date</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"> {{ $userinformation->dob ?? 'Not Available' }}</div>
                </div>
                <hr>

                <div class="col-sm-1"> <a class="btn btn-info "
                        {{-- href="{{ route('userinformation.edit', $userinformation->id) }} ">Edit</a></div> --}}
            </div>

        </div>
    </div>

    </div>
</center>
