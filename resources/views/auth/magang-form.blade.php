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

    <div class="" style="height: 100%;">
        <div class="" style="">
            <div class="row" style="height:100vh;">
                <div class="col">
                    <img src="{{ asset('assets/img/13b75c5b-42ae-4146-8a96-a940e901e4ae.jpg') }}" class="img-fluid h-100" alt="..."
                    style="object-fit:cover; background-size: cover">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <form class="form-control" action="{{ route('magang.storerequest') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <h1 class="text-center">Input Form Magang</h1>
                            <div class="row mb">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form6Example1" class="form-control" name="nim_nis" />
                                        <label class="form-label" for="form6Example1">Input Nim</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form6Example2" class="form-control"
                                            name="instansi_pendidikan" />
                                        <label class="form-label" for="form6Example2">Instansi Pendidikan</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example3" name="nama_lengkap" class="form-control" />
                                <label class="form-label" for="form6Example3">Nama Lengkap</label>
                            </div>

                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example4" class="form-control" name="email" />
                                <label class="form-label" for="form6Example4">Email</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                    <input type="text" class="form-control" placeholder="Contoh: 821366458"
                                        aria-label="Username" aria-describedby="basic-addon1" name="no_hp">
                                </div>
                                <label class="form-label" for="form6Example5">Phone Number</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example6" class="form-control" name="jurusan" />
                                <label class="form-label" for="form6Example6">Jurusan</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="file" id="form6Example6" class="form-control" name="foto" />
                                <label class="form-label" for="form6Example6">Foto Profile</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="file" id="form6Example6" class="form-control" name="surat_magang" />
                                <label class="form-label" for="form6Example6">Surat Magang</label>
                            </div>


                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="date" id="form6Example1" class="form-control"
                                            name="mulai_magang" />
                                        <label class="form-label" for="form6Example1">Start Magang</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="date" id="form6Example2" class="form-control"
                                            name="selesai_magang" />
                                        <label class="form-label" for="form6Example2">End Magang</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form6Example7" rows="4" name="alamat"></textarea>
                                <label class="form-label" for="form6Example7">Address</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Submit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
