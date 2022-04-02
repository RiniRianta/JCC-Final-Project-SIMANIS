<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIMANIS - Sistem Informasi Manajemen Sekolah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include("template.sidebar")
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include("template.navbar")
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                @yield("content")
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">JCC Final Project Team</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('change', '.kelas', function() {

                var id = $(this).val();
                var div = $(this).parent().parent();
                var op = " ";
                $.ajax({
                    type: 'get',
                    url: '/guru/absensi/findMapel/' + id,
                    success: function(data) {

                        op += '<option name="kelas" id="kelas" selected>Pilih Mata Pelajaran</option>';
                        for (var i = 0; i < data.length; i++) {

                            op += '<option name="kelas" id="kelas" value="' + data[i].id + '">' + data[i].mata_pelajaran + '</option>';
                        }
                        div.find('#mata_pelajaran').html(" ");
                        div.find('#mata_pelajaran').append(op);
                    },

                    error: function() {

                    }
                });

            });
        });

        $(document).ready(function() {
            $(document).on('change', '.mata_pelajaran', function() {
                var id = $(".kelas").val();
                var div = $(this).parent().parent();
                var op = " ";
                $.ajax({
                    type: 'get',
                    url: '/guru/absensi/findSiswa/' + id,
                    success: function(data) {
                        console.log("berhasil");
                        console.log(data.length);
                        op += '<thead><tr><th scope="col">Siswa(' + data.length + ')</th><th scope="col">Hadir</th><th scope="col">Sakit</th><th scope="col">Ijin</th><th scope="col">Alfa</th></tr></thead><tbody>';
                        var a = 0;
                        for (var i = 0; i < data.length; i++) {

                            op += '<tr><td>' + data[i].nama + '</th><td><input class="form-check-input" type="radio" name="kehadiran' + i + '" id="kehadiran' + i + '" value="hadir" checked> </td><td><input class="form-check-input" type="radio" name="kehadiran' + i + '" id="kehadiran' + i + '" value="sakit"></td><td><input class="form-check-input" type="radio" name="kehadiran' + i + '" id="kehadiran' + i + '" value="ijin"></td><td><input class="form-check-input" type="radio" name="kehadiran' + i + '" id="kehadiran' + i + '" value="alfa"></td></tr>';
                        }
                        op += '</tbody>';
                        // div.find('#table').html(" ");
                        div.find('#table').append(op);

                    },

                    error: function() {

                    }
                });

            });
        });
    </script>
    <script type="text/javascript">
        $('#datepicker input').datepicker({});
    </script>

</body>

</html>