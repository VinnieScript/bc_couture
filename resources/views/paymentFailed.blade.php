<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{!!asset('images/logo.jpg')}!!"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('newjs/jquery-3.3.1.min.js')}}"></script>

  <script src="{{asset('newjs/jquery-3.3.1.min.js')}}"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <title>BC_COUTURE | Home of Fashion</title>
        <style>
    a:{
        text-decoration:none;
    }
    a:visited{
        color:#fff;
    }

        </style>
        </head>

        <body>
<div style="width:100%;margin-top:10%" align="center">
<img src="{{asset('images/logo.jpg')}}" width="150px" height="150%"/>
<h3 style="color:#ff0000">Declined</h3> 
<div style="font-size:1.2em">{{$errormessage}}</div>
<small>Kindly Click <button class="badge badge-danger"><a href="/checkout">Here!</a></button> to retry.....Dont Click Back Button</small>

</div>


</body>
</html>