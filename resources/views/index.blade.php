@include('externals.external')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StoreWithMore</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar">

    <div id="app">
    @include('pages.header.navbar')

    @if (cache()->has('seller'))


    <Sdboard ></Sdboard>

@else

@include('pages.header.categorybar')
@include('pages.shop')
@endif

@include('pages.header.footer')
</div>
</body>
</html>
@include('externals.extwenalJs')

<style>
    html{
        zoom: 80%;
    }
</style>

