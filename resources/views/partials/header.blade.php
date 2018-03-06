<?php $base_url = 'http://localhost/simplecar/frontend/simplecar/'; ?>

<!DOCTYPE html>
<html>
   <head>
      <title>SimpleCar - Buy or lease new car online and get the best deals</title>

      <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <meta content='With SimpleCar you can buy or lease a new car and always get the best deal without any haggling. Just choose car model and receive the best offers from all dealers' name='description'>
      <meta content='text/html;charset=UTF-8' http-equiv='content-type'>
      <meta content='en' http-equiv='Content-Language'>
      <meta content='no' http-equiv='imagetoolbar'>
      <meta content='width = device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable = no' name='viewport'>
      <meta content='black-translucent' name='apple-mobile-web-app-status-bar-style'>
      <meta content='True' name='HandheldFriendly'>
      <meta content='on' http-equiv='cleartype'>
      <meta content='yes' name='apple-mobile-web-app-capable'>
      <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
      <meta content='progid:DXImageTransform.Microsoft.Fade(Duration=0.2)' http-equiv='Page-Exit'>
      <meta content='width=device-width,initial-scale=1' name='viewport'>
      <meta content='all' name='robots'>
      <meta content='DD/MM/YYYY' name='date-format'>
      <meta content='DD/MM/YYYY HH:mm' name='date-time-format'>
      <meta content='Etc/UTC' name='timezone-format'>
      <meta name="_token" content="{{ Session::token() }}"/>

      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/favicons/apple-icon-57x57.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-60x60.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-72x72.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-76x76.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-114x114.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-120x120.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-144x144.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-152x152.png') }}" />
      <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('public/assets/assets/favicons/apple-icon-180x180.png') }}" />

      <link rel="icon" type="image/png" href="{{ asset('public/assets/assets/favicons/android-icon-192x192.png') }}" />
      <link rel="icon" type="image/png" href="{{ asset('public/assets/assets/favicons/favicon-32x32.png') }}" />
      <link rel="icon" type="image/png" href="{{ asset('public/assets/assets/favicons/favicon-96x96.png') }}" />
      <link rel="icon" type="image/png" href="{{ asset('public/assets/assets/favicons/favicon-16x16.png') }}" />

      <link rel="stylesheet" media="all" href="{{ asset('public/assets/css/custom.css') }}" data-turbolinks-track="true" />

      <!-- Toastr CSS -->
      <link href="{{ asset('public/assets/css/toastr.min.css') }}" rel="stylesheet">
      <!-- <link href="{{ asset('public/assets/css/w3.css') }}" rel="stylesheet"> -->

      <link rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Lato:300|Montserrat:400,700" data-turbolinks-track="true" />
   </head>
   <body>
     <!-- Google Tag Manager (noscript) -->
     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHNF6GG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
     <!-- End Google Tag Manager (noscript) -->
      <div class='landing'>
