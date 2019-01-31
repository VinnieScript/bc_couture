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
        </head>
        <body>
<div style="width:100%;margin-top:10%" align="center">
<img src="{{asset('images/logo.jpg')}}" width="150px" height="150%"/>
<h3 style="color:#003300"> Accepted...Tracking No:{{$id}}</h3> 
<small color="warning">A confirmation mail has been sent to your mail box.<br/> Kindly login to track your delivery process<button class="badge badge-warning"><a href="/">Login</a></button><br/>Thank you for Chosing us</small>

</div>


</body>
</html>