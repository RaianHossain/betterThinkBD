<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Better Think BD</title>
    <!-- Bootstrap icons-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('ui/frontend/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('ui/frontend/css/customstyle.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    @stack('css')

</head>

<body>
    {{-- <div style="background-image: url({{ asset('ui/frontend/images/assets/baground-img.webp') }}); background-size: contain; background-repeat: repeat; margin:0px; padding:0px;"> --}}
    {{-- <div style="background-image: linear-gradient(90deg,#1358a7,
 #191839, #0680c6, #273871, #0473bc, #2b4388, #2c2c64, #23345b, #2c3c94); background-size: contain; background-repeat: repeat; margin:0px; padding:0px;"> --}}
    <!-- Navigation-->
    {{-- @include('frontend.layouts.partials.nav') --}}

    <x-frontend.layouts.partials.nav />


    <!-- Section-->

    <section class="py-5"
        style="width: min-width; height: max-height; background-image: url({{ asset('ui/frontend/images/assets/baground-img.webp') }}); background-size: cover; background-repeat: round;">
        <div class="container px-4 px-lg-5 mt-5">
            {{ $slot }}
        </div>
    </section>

    <!-- Footer-->
    <x-frontend.layouts.partials.footer />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('ui/frontend/js/scripts.js') }}"></script>
    @stack('js')
    {{-- </div> --}}

</body>

</html>
