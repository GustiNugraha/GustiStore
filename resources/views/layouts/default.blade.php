<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gusti Store | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- style --}}
    @include('includes.style')
    
</head>

<body>

    {{-- sidebar --}}
    @include('includes.sidebar')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        {{-- navbar --}}
        @include('includes.navbar')

        {{-- Main Content --}}
        @yield('content')
        {{-- Main Content --}}

        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

    {{-- script --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

    
</body>

</html>
