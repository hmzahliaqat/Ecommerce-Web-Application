@include('externals.external')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
   @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar" >

@include('pages.header.navbar')


<div id="app">

<Sdboard></Sdboard>

</div>


</body>
</html>
@include('externals.extwenalJs')
<script>
    $('meta[name="csrf-token"]').attr('content');
</script>
