<?php
    $bdy_class = "";
    $bdy_bg_color = "";
    $bdy_bg_image = "";
    if (Helper::GeneralSiteSettings("style_type")) {
        $bdy_class = "boxed-layout";
        if (Helper::GeneralSiteSettings("style_bg_type") == 0) {
            $bdy_bg_color = "background-color: #000;";
            if (Helper::GeneralSiteSettings("style_bg_color") != "") {
                $bdy_bg_color = "background-attachment: fixed;background-color: " . Helper::GeneralSiteSettings("style_bg_color") . ";";
            }
            $bdy_bg_image = "";
        } elseif (Helper::GeneralSiteSettings("style_bg_type") == 1) {
            $bdy_bg_color = "";
            $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/pattern/' . Helper::GeneralSiteSettings("style_bg_pattern")) . ")";
        } elseif (Helper::GeneralSiteSettings("style_bg_type") == 2) {
            $bdy_bg_color = "";
            $bdy_bg_image = "background-attachment: fixed;background-image:url(" . URL::to('uploads/settings/' . Helper::GeneralSiteSettings("style_bg_image")) . ")";
        }
    }
?>

<!DOCTYPE html>
<html lang="{{ trans('backLang.code') }}" dir="ltr">
<head>
    @include('frontEnd.includes.head')
    @include('frontEnd.includes.colors')
    @yield('css')
</head>

<body>
    
    <div id="noi-dung-chinh" class="container" style="background:#fff">
        @include('frontEnd.includes.header')
        <div class="col-12">
            <div class="row">
                <div class="col-sm-9 col-xs-12 main-page">
                    @yield('content')
                </div>
                <div class="col-sm-3 col-xs-12">
                    @yield('side-menu')
                </div>
            </div>
        </div>
        @yield('lien-ket')
        <!-- start footer -->
        @include('frontEnd.includes.footer')
        <!-- end footer -->
    </div>

    @include('frontEnd.includes.toolbox')
    @include('frontEnd.includes.foot')
    @yield('footerInclude')
    @yield('js')

    @if(Helper::GeneralSiteSettings("style_preload"))
        <div id="preloader"></div>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(window).load(function () {
                    $('#preloader').fadeOut('slow', function () {
                        // $(this).remove();
                    });
                });
            });
        </script>
    @endif
</body>
</html>