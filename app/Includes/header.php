<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta name="csrf-token" content="{{ Session::token() }}"> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset('assets/css/ie6.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('assets/Semantic-ui/semantic.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('assets/css/authstil.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('assets/css/stile.css')?>" type="text/css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="<?php echo asset('assets/Semantic-ui/semantic.min.js')?>"></script>
         <script src="<?php echo asset('assets/js/jfunc.js')?>"></script>
    </head>
    <body> 
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <p id="logo"><a href="#">Moviehunter</a><p>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>
    <div id="sub-navigation">
        <div class="menu">
            <span class="films_list">Список фильмов</span>       
            <span class="search_field">
            <div class="ui search">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Искать">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
            </span>
            <span class="films_cat">Категории фильмов</span>
        </div>
    </div>
  </div>
