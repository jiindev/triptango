<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TripTango</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
        a{
            text-decoration: none;
            color: #222;
        }
        .content .go_login{
            background: #e77200;
            padding: 10px;
            color: #fff;
        }
        .content h2{
            text-align: center;
        }
        .select{
            width: 100%;
            overflow: hidden;
        }
        .select .option{
            width: 45%;
            float: left;
            padding: 20px;
        }
        .select .option a{
            display: block;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: #e77200;
            text-align: center;
            color: #fff;
            line-height: 250px;
            margin: 0 auto;
        }
    </style>
    </head>
    <body>
        <div class="wrap">
            <div class="content">