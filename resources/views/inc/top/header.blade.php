@section('header')<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>@yield('title-block')</title>
<meta name="description" content="@yield('description-block')">
<meta name="keywords" content="Gloves nitrile, gloves latex, gloves vinyl, overalls, overalls for physicians.">
<meta name="author" content="Venus Trading. Istambul">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="preload" href="https://venus-turkey.com/css/bootstrap.min.css" as="style">
<link rel="preload" href="/css/font-awesome.min.css" as="style">

<link rel="stylesheet" href="https://venus-turkey.com/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
{{-- <!-- <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" as="font" type="font/ttf" crossorigin="anonymous"> --> --}}

<!-- Main css -->
<link rel="preload" href="/css/app.css" as="style">
<link rel="stylesheet" href="/css/app.css">

<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body>
<header>
{{-- PRE LOADER --}}
@include('inc.preloader')

{{-- NAV MENU --}}
@include('inc.nav-menu')
</header>

