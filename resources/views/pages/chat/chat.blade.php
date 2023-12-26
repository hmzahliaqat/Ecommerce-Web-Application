@include('externals.external')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    @vite([ 'resources/js/app.js',])
 <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" >
    <div id="app">
@include('pages.header.navbar')

        <chat-component :is="activeComponent"></chat-component>
    </div>


</body>
</html>
@include('externals.extwenalJs')
<script src="https://unpkg.com/vue-chat-scroll@alpha/dist/vue-chat-scroll.js"></script>


