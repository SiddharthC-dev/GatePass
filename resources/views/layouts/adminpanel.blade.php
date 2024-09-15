<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'GatePass') }}</title>
    @include('partials.headerScripts')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('partials.navbar')
        {{-- <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item active"><button class="btn btn-sm btn-primary " onclick="goBack()">Go Back</button></li>
        </ol> --}}




                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
          @include('partials.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            @yield('content')
        </div>
        @include('partials.footer')

        @include('partials.footerScripts')
    </div>
    <script>
         var URL = '{{ env('APP_URL') }}';//url constatnt from env file

    </script>
    @yield('pagescripts')
</body>

</html>
