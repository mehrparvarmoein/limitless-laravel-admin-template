<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title', 'Limitless Theme')</title>

        @include('layouts.head-rtl')
    </head>

    <body>
        @include('layouts.navbar')

        <!-- Page content -->
        <div class="page-content">

            @include('layouts.sidebar')

            <!-- Main content -->
            <div class="content-wrapper">
                
                @include('layouts.page-header')

                @yield('content')

                @include('layouts.footer')
                
            </div>
            <!-- /main content -->
            
        </div>
        <!-- /page content -->

        @include('layouts.js')
    </body>
</html>
