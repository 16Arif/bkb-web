<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="stasiun-geofisika-balikpapan">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Font Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@400;500;700&display=swap">

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="css/responsive.css">

    {{-- logo titel bar --}}
    <link rel="icon" href="img/bmkg-title.png" type="image/x-icon">



    <title>{{ $title }} Stageof Balikpapan</title>
</head>

<body onload="setInterval('displayTime()', 1000);">
    @include('partials.navbar')

    <div class="">
        @yield('container')
    </div>

    @include('partials.footer2')

    {{-- custome javascript --}}
    {{-- <script src="{{ assets('js/script.js') }}"></script> --}}
    <script src="js/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/3bcdc66463.js" crossorigin="anonymous"></script>
    {{-- youtube --}}
    <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>
