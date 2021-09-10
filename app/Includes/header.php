<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ Session::token() }}"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset('assets/css/ie6.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('assets/css/styl.css')?>" type="text/css">
        <script src="<?php echo asset('assets/js/jquery-1.4.2.min.js')?>"></script>
         <script src="<?php echo asset('assets/js/jquery-func.js')?>"></script>
    </head>
    <body>