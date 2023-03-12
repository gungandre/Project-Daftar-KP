<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span class="error" data-message="{{ $error }}"></span>
        @endforeach
    @endif
    @if (session('message'))
        <span class="success" data-message="{{ session('message') }}"></span>
    @endif
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light ">
        <a class="navbar-brand row" href="{{ route('login') }}">
            <img src="{{ asset('assets/img/Lambang_Kabupaten_Manggarai-150x150.png') }}" width="70" height="70"
                class="d-inline-block align-top col-sm-2" alt="">
            <h3 class=" col-sm-10 text-center" style="margin: auto; ">KANTOR SAMSAT KABUPATEN MANGGARAI</h3>
        </a>
    </nav>
    <div class="px-0 container-fluid">
        <div class="" style="height: 100%;">
            <h2 class="text-center mt-4 font-weight-bold">Mohon Tunggu Untuk Update</h2>

            <h5 class="text-center font-weight-bold" style="color: #0099ff;">Permintaan anda sedang kami proses. Mohon
                tunggu
                informasi lebih lanjut lagi</h5>
            <h5 class="text-center ">Setelah di setujui oleh pihak magang untuk sementara password : 123456789</h5>
            <h5 class="text-center">Setelah anda login anda dapat melakukan pergantian password</h5>



            <div class="d-flex align-items-center justify-content-center">
                <a href="{{ route('login') }}" class="btn btn-primary mx-auto">Back To Login</a>
            </div>
        </div>
    </div>


    <footer class=" fixed-bottom bg-secondary text-white">
        <div class="row container p-4">
            <div class="col-sm-9 text-white">
                <h5 class="text-white">Direktorat Lalu Lintas Polda Nusa Tenggara Timur</h5>
                <h5 class="text-white">Badan Pendapatan, Pengelola Keuangan Dan Aset Daerah Provinsi NTT</h5>
                <h5 class="text-white">PT.Jasa Raharja (PERSERO) Cabang Kupang</h5>

                <hr>

                <h5 class="text-white">Kantor Samsat Kabupaten Manggarai</h5>
                <p>Jln.Ranaka,Tenda,Kec,.Lengke Rambong, Kab.Manggarai, NTT</p>
                <p style="color: #0099ff ;">(0385) 21730</p>
            </div>
            <div class="col-sm-3">
                <img src="{{ asset('assets/img/desa-wisata-wae-rebo-12_169.jpeg') }}" alt="" style="width:70vh">
            </div>
        </div>
    </footer>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="../assets/vendor/js/helpers.js"></script>


    <script src="../assets/js/config.js"></script>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
</body>


</html>
