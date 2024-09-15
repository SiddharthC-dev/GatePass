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
                <td>name</td>
                <td>{{ $visitors->name }}</td>
              </tr>
              <tr>
                <td>mobile_no</td>
                <td>{{ $visitors->mobile_no }}</td>
              </tr>
              <tr>
                <td>dob</td>
                <td>{{ $visitors->dob }}</td>
              </tr>
              <tr>
                <td>photo</td>
                <td>{{ $visitors->photo}}</td>
              </tr>
              <tr>
                <td>Address</td>
                <td>{{ $visitors->Address }}</td>
              </tr>
              <tr>
                <td>tag</td>
                <td>{{ $visitors->tag }}</td>
              </tr>
              <tr>
                <td>Apartment Name</td>
                <td>{{$visitors->apartment->apartment_name }}</td>
              </tr>


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
</div>
@endsection
