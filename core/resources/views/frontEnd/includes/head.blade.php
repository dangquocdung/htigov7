<meta charset="utf-8">
<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>
<meta name="description" content="{{$PageDescription}}"/>
<meta name="keywords" content="{{$PageKeywords}}"/>
<meta name="keywords" content="Ha Tinh, Tin Ha Tinh, Tin tuc Ha Tinh, Ha Tinh 24h, Thoi su Ha Tinh, Cong thong tin Ha Tinh, Ha Tinh Portal"/>
<meta name="author" content="Dang Quoc Dung, Dung Thinh Software, dungthinh.com"/>
<!-- <base href="{{asset('')}}"> -->
@yield('meta')
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="{{ URL::asset('frontEnd/css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('frontEnd/css/font-awesome.min.css') }}" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<link href="{{ URL::asset('frontEnd/css/jquery.fancybox.css') }}" rel="stylesheet">
<link href="{{ URL::asset('frontEnd/css/jcarousel.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('frontEnd/css/flexslider.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('frontEnd/css/adminlte.min.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('frontEnd/css/rypp.css') }}" rel="stylesheet"/>
@yield('css')
<link rel="stylesheet" href="{{ mix('frontEnd/css/app.css') }}">

<!-- Favicon and Touch Icons -->
@if(Helper::GeneralSiteSettings("style_fav") !="")
        <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}" rel="shortcut icon" type="image/png">
@else
        <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="shortcut icon" type="image/png">
@endif

@if(Helper::GeneralSiteSettings("style_apple") !="")
        <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon">
        <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ URL::asset('uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon" sizes="144x144">
@else
        <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon">
        <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ URL::asset('uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="144x144">
@endif
<script src="{{ URL::asset('frontEnd/js/jquery.js') }}"></script>
<script src="{{ URL::asset('frontEnd/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('frontEnd/js/jssor.slider-26.7.0.min.js') }}"></script>
{{-- <script src="{{ URL::asset('frontEnd/js/tts.js') }}"></script> --}}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138435871-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138435871-1');
</script>
