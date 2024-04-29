<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course | {{ $tittle }}</title>
    {{-- Botstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-KGkYqG3gD435LMZAC/8byquZiD5665LheNozmHAqp8vrOKBaBL/bFUO5Er5tMRNi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/js/coreui.bundle.min.js" integrity="sha384-Wl6mLWl+C0OgKzQqXtoEXuTkm2RwXManFDTNyMRxPR5zh3DFIUIDhq7Fp1JCFm1V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @include('partials/navbar')
    @include('partials/aside')
    
    <div class="container mt-4">
        @yield('container')
    </div>

    {{-- Botstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/js/coreui.min.js" integrity="sha384-0pR6+CQ3+YSoPvs/vb4AgvfnbU03AdP4/HK6hH/8RxK3DI7/8zuRD/8R9ERU3p31" crossorigin="anonymous"></script>    
</body>
</html>