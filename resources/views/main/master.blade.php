<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Join TomasinoWeb this school year, 2018-2019!">
    <meta property="og:title" content="Join TomasinoWeb this school year, 2018-2019!">
    <meta name="twitter:title" content="Join TomasinoWeb this school year, 2018-2019!">
    <meta property="og:url" content="http://join.tomasinoweb.org">
    <meta name="twitter:url" content="http://join.tomasinoweb.org">
    <meta name="description" content="Be part of UST's leading digital media organization and help tell new stories and create new experiences for the Thomasian community.">
    <meta name="og:description" content="Be part of UST's leading digital media organization and help tell new stories and create new experiences for the Thomasian community.">
    <meta name="twitter:description" content="Be part of UST's leading digital media organization and help tell new stories and create new experiences for the Thomasian community.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta property="og:type" content="website">
    <title>Join TomasinoWeb</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="page-top">

    @include ('main.navbar')

    @yield ('content')

    @include ('main.footer')

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/style.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
  </body>
  </html>
