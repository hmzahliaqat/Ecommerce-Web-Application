@include('externals.external')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dshop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar">

    <div id="app">
        @include('pages.header.navbar')
        @include('pages.header.categorybar')


<shop-component :is="activeComponent" :user='@json(Auth::user())'  :thisId={{ $itemId }}></shop-component>





</div>

</body>
</html>
@include('externals.extwenalJs')
<style>
    html{
        zoom: 60%;
    }
</style>
