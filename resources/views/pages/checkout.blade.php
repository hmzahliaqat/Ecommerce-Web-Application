@include('externals.external')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/js/app.js')


</head>
<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar">




<div id="app">
    @include('pages.header.navbar')

    @include('pages.header.categorybar')
<checkout  :is="activeComponent"></checkout>
</div>



</body>
</html>
@include('externals.extwenalJs')
<script src="https://kit.fontawesome.com/b3751e2879.js" crossorigin="anonymous"></script>
<style>
    html{
        zoom: 70%;
    }

</style>
<script>
    $('meta[name="csrf-token"]').attr('content');
</script>
<script src="https://js.stripe.com/v3/"></script>
