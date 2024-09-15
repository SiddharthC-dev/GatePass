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
                <td>{{ $gaurd->name }}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>
                    {{ $gaurd->address }}
                </td>
              </tr>
              <tr>
                <td>Mobile Number</td>
                <td>{{ $gaurd->mobile_no }}</td>
              </tr>
              <tr>
                <td>Shift Start Timing </td>
                <td>{{ $gaurd->start_shift }}</td>
              </tr>
              <tr>
                <td>Shift End Timing</td>
                <td>{{ $gaurd->end_shift }}</td>
              </tr>

              <tr>
                <td>Apartment Name</td>
                <td>{{ $gaurd->apartment->apartment_name}}</td>
              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection
