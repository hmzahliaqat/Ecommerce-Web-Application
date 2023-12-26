<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/choices.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap/app.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/bootstrap/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/components.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap-extended.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap/ext-component-toastr.css') }}">



   @vite( 'resources/js/app.js')

</head>
<body class="horizontal-layout horizontal-menu content-left-sidebar navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="content-left-sidebar">
    <div id="app">

<addproduct></addproduct>
    </div>


</body>
</html>

<script src="{{asset('js/bootstrap/choices.min.js')  }}"></script>
<script src="{{asset('js/bootstrap/dropzone.min.js')  }}"></script>
<script src="{{ asset('js/bootstrap/form-advanced.init.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/metismenujs.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/simplebar.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/app-bok.js') }}"></script>
<script src="{{ asset('js/bootstrap/toastr.min.js') }}"></script>

@include('externals.extwenalJs')



<script>

  $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
<style>
    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  width: 15%;
}

.btns {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
