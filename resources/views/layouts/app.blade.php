<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="/assets/vendor/js/helpers.js"></script>
        <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <span class="error" data-message="{{$error}}"></span>
        @endforeach
        @endif

        @if (session('message'))
        <span class="success" data-message="{{session('message')}}"></span>
        @endif

        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


         {{-- datables and sweetakert --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/b-html5-2.2.3/date-1.1.2/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(function () {
           $('.dropify').dropify();

           $('[data-toggle="tooltip"]').tooltip()


           $('.error').show(function () {
               let message = $(this).data('message')
               Swal.fire(
                   'Warning',
                   message,
                   'error'
               )
           });
           $('.success').show(function () {
               let message = $(this).data('message')
               Swal.fire(
                   'Success',
                   message,
                   'success'
               )
           });
           $(document).on('click', '.delete-item', function () {
               var url = $(this).data('url');
               Swal.fire({
                   title: 'Warning',
                   text: "Are you sure for delete this ?",
                   icon: 'warning',
                   showCancelButton: true,
                   confirmButtonColor: '#3085d6',
                   cancelButtonColor: '#d33',
                   confirmButtonText: 'Ya, Hapus!'
               }).then((result) => {
                   if (result.isConfirmed) {
                       var id = $(this).data("id");
                       var token = $("meta[name='csrf-token']").attr("content");
                       $.ajax({
                           url: url,
                           type: 'DELETE',
                           data: {
                               "id": id,
                               "_token": token,
                           },
                           success: function (data) {
                               Swal.fire(
                                   'Deleted!',
                                   data.message,
                                   'success'
                               )
                               window.location.reload().time(3)
                           }
                       });
                   }
               })
           })

       })

   </script>
    </body>
</html>
