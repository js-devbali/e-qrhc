<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
        <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32"/>
        <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16"/>
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
            }

            .image {
                width: 60px;
                height: 60px;
                overflow: hidden;
            }
            .image img {
                object-fit: cover;
                width: 60px;
                height: 60px;
            }
        </style>

        @stack('css')
    </head>
    <body class="hold-transition layout-top-nav">

        <div class="wrapper">

            {{-- Navbar --}}
                @include('layouts.navbar-layout')
            {{-- End Navbar --}}

            {{-- Content --}}
                @include('layouts.content-layout')
            {{-- End Content --}}

            <!-- Control Sidebar -->
            {{-- <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside> --}}
            <!-- /.control-sidebar -->

            {{-- Footer --}}
                @include('layouts.footer-layout')
            {{-- End Footer --}}

        </div>

        <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        @stack('js')

    </body>
</html>
