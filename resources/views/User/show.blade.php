@extends('layouts.adminpanel')

@section('content')
<div class="col-sm-10">
</div>

    <div class="content">

    {{-- {{ $apartment }} --}}
    <div class="col-sm-8">

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Info</h3>

        </div>

        <!-- /.card-header -->
        <div class="card-body p-0">

          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Name</td>
                <td>{{ $apartment->apartment_name }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>{{ $apartment->apartment_address }}</td>
              </tr>
              <tr>
                <td>State</td>
                <td>{{ $apartment->apartment_state }}</td>
              </tr>
              <tr>
                <td>district</td>
                <td>{{ $apartment->apartment_district}}</td>
              </tr>
              <tr>
                <td>City</td>
                <td>{{ $apartment->apartment_city }}</td>
              </tr>
              <tr>
                <td>Pincode</td>
                <td>{{ $apartment->apartment_pin_code }}</td>
              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection
