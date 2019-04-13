<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{!!asset('public/images/logo.jpg')}!!"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('public/newjs/jquery-3.3.1.min.js')}}"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <title>BC_COUTURE | Home of Fashion</title>
        </head>
        <style>
        a:hover{
            border-bottom-style:solid;
            border-color:#fff;
            
            cursor:pointer;
            font-weight:bold;


            }
        #serach{
            background-image:url('images/logo.jpg');
            background-position:right;
        }

        </style>
        <script>
    
        </script>
        <body>
      
        
        <div id="maindiv" style="width:100%; height:100%;border:0px solid #000">
        <div style="width:80%;height:40px; background-color:#500000;position:absolute;z-index:2;margin-top:150px;margin-left:100px;border-radius:5px">
        <table width="100%" border="0" style="line-height:30px;font-family:candara;font-weight:bold;color:#fff" align="center" ><tr><td align="center">BC COUTURE</td><td align="center">Categories</td><td align="center">Featured Custom</td><td align="center">Our Brand</td><td align="center">Custom Menu</td><td align="center">Sale Product</td><td align="center">Template Product</td><td align="center">Contact Us</td><td align="center">About Us</td></tr></table>
        
        
        
        </div>
        <div style="width:100%;height:30px;background-color:#500000;position:absolute;z-index:1;">
        <div style="margin-left:100px;float:left; color:#fff;font-family:candara;font-size:0.9em;font-weight:bold;line-height:30px">
        <span>Currency</span><select style=" font-family:candara;background-color:#000;color:#fff;margin-left:5px;border-radius:10px"><option>USD</option><option>NGN</option><option>EUR</option></select>
        <span style="margin-left:20px">Language</span><select style=" margin-left:5px;border-radius:10px; font-family:candara"><option >NGN</option><option style="background-image:url('usa.png')">USA</option><option style="background-image:url('ngn.png')">GER</option></select>
        <span style="margin-left:200px;font-family:candara;color:#fff;">Welcome to<a href="/"/> BCCourture!</a></span>
        </div>
        
        <div style="margin-right:100px;float:right;color:#fff;font-family:candara;font-size:0.9em;line-height:30px">
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center" id="myaccount"><a style="text-decoration:none;">My Account</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;">WishList</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;">Cart</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;">CheckOut</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;">Login</a></div>
        
        </div>
        </div>
        <div id="banner1" style="width:100%;position:absolute;z-index:0.5; height:170px;background-color:#e9e9e9;  border:0px solid #000">
           <div style="width:100%; margin-top:40px">
           <div style="float:left;margin-left:100px;width:80%">
           <table border="0" style="width:100%">
           <tr>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em" ><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/time.png')}}" width="20px"/></div><span style="font-size:1.1em">WORKING HOURS</span><br/> 8:00am - 8:00pm</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/delivery.png')}}" width="20px"/></div><span style="font-size:1.1em">FREE DELIVERY & RETURN</span><br/>On delivery over $1000</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/money.png')}}" width="20px"/></div><span style="font-size:1.1em">100% MONEY BACK</span><BR/>30days money back Garanted</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/telephone.png')}}" width="20px"/></div><span style="font-size:1.1em">PHONE NUMBER  01-223009</span><br/>Order Online Noow!</td>
           </tr>
           </table>
           
           </div>
           
          
           </div>
           <div style="margin-top:100px;border:0px solid #000; width:100%" id="logoArea">
           <div style="margin-left:100px;float:left;width:80%;border:0px solid #000">
           <div style="width:50px;height:40px;border:1px solid #500000;float:left"><img src="{{asset('public/images/bc_couture.png')}}" width="50px" height="40px"/></div>
           <div style="float:left; margin-left:10px;line-height:40px;font-weight:bold;font-family:candara;font-size:2.0em;color:#500000"><a href="/">BC COUTURE</a></div>
           <div style="margin-left:2%;margin-top:5px;float:left"><input type="text" placeholder="Enter your search" style="font-family:candara;border-radius:5px;width:500px; height:30px;margin-left:3%" id="search"/></div>
           <div style="margin-left:5%;margin-top:5px;float:left"><img src="{{asset('public/images/cart.png')}}" width="40px"/></div><div style="font-family:candara;float:left;margin-top:2px;margin-left:5px">Shopping Cart<br/><span style="font-weight:bold;font-size:1.5em; cursor:pointer" id="viewcart">{{$counter}} </span><span>items</span></div>
           </div>
          
           
           </div>
           <div  id="formBody" style="width:100%;height:100% ;color:#000;margin-top:250px;" align="center">
        <div style="width:25%" id="bodyDIV">
        <h1>CheckOut Form</h1><br/>
           <form>
  <div class="form-group">
  {{csrf_field()}}
    <label for="exampleInputEmail1" style="float:left">Home/Office Address</label>
    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" placeholder=" Home/Office Address">
    <small id="emailHelp" class="form-text text-muted">The address for pickup</small>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" style="float:left">City</label>
    <input type="text" class="form-control" id="city" placeholder="City">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" style="float:left">State</label>
    <input type="text" class="form-control" id="state" placeholder="state">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" style="float:left">Zip Code</label>
    <input type="text" class="form-control" id="zipcode" placeholder="Zip Code">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" style="float:left">Country</label>
    <input type="text" class="form-control" id="country" placeholder="Country">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" style="float:left">Phone number</label>
    <input type="number" class="form-control" id="phonenumber" placeholder="PhoneNumber">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1" style="float:left">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Email Address">
  </div>
  <button class="btn btn-primary" id="saveCheckout">Submit</button>
</form>
<div style="width:100%" id="result"></div>
<br/><br/>
         </div>
        <div style="width:100%; background-color:#dedede;width:100%;height:50px"></div>
        </div>
           
        </div>
        
        
    
        
        </body>
        <script type="text/javascript">
         $("#viewcart").click(function(){
        location='/viewcart';
    })
  $("#saveCheckout").click(function(e){
    e.preventDefault();
    var address = document.getElementById('address').value;
    var state = document.getElementById('state').value;
    var city = document.getElementById('city').value;
    var zipcode = document.getElementById('zipcode').value;
    var country = document.getElementById('country').value;
    var email = document.getElementById('email').value;
    var phonenumber = document.getElementById('phonenumber').value;
    var tracker = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 15);
    
if(address!="" && state !="" && city!="" && zipcode!="" && country!="" && email!="" && phonenumber!="" && tracker!=""  ){
$.ajax({
  url:'/saveCheckout',
  type:'POST',
  beforeSend:function(){
    document.getElementById('result').innerHTML="Please wait";
    $('#saveCheckout').attr('disabled','disabled');
  },
  headers: { 'X-CSRF-TOKEN': $('input[name=_token]').val() },
  data:{
    address:address,
    state:state,
    city:city,
    zipcode:zipcode,
    country:country,
    email:email,
    phonenumber:phonenumber,
    paymentstatus:'pending',
    tracker:tracker
  },
  success:function(data){
     

      if(data ==="EmailAddress Already In Use."){
        
       alert(data)
       $('#saveCheckout').removeAttr('disabled');
       document.getElementById('result').innerHTML="";
      }
      else{
         window.location= "/"+ data+"/paymentUrl.tc";
      }
        
        

  },  
  error:function(obj, status, e){
    alert(e);
  }
})
}

if(address == ""){
  $("#address").css('border','1px solid #ff0000');
}
else{
  $("#address").css('border','1px solid #003300');
}
if(state == ""){
  $("#state").css('border','1px solid #ff0000');
}
else{
  $("#state").css('border','1px solid #003300');
}
 
if(city == ""){
  $("#city").css('border','1px solid #ff0000');
}
else{
  $("#city").css('border','1px solid #003300');
}
 
if(zipcode == ""){
  $("#zipcode").css('border','1px solid #ff0000');
}
else{
  $("#zipcode").css('border','1px solid #003300');
}
 
if(country == ""){
  $("#country").css('border','1px solid #ff0000');
}
else{
  $("#country").css('border','1px solid #003300');
}
 
if(email == ""){
  $("#email").css('border','1px solid #ff0000');
}
else{
  $("#email").css('border','1px solid #003300');
}
 
if(phonenumber == ""){
  $("#phonenumber").css('border','1px solid #ff0000');
}
else{
  $("#phonenumber").css('border','1px solid #003300');
}
 
 
 
 
 
  });

      </script>
        </html>