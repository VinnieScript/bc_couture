<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{!!asset('public/images/logo.jpg')}!!"/>
        <link rel="stylesheet" type="text/css" href="{{asset('public/css/styles.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
        <title>BC_COUTURE | Home of Fashion</title>
        </head>
        
        <script>
                function myFunction() {
  var x = document.getElementById("myLinks");
  
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
        $(document).ready(function(){


            //alert('Jquery')
    $("#viewcart").click(function(){
        location='/viewcart';
    })
            $(".displayproduct").click(function(){
              x =  $(this).find('img').attr('id').valueOf();
            // alert(x);
              $.ajax({
                  url:'/viewselected/',
                  type:'post',
                  headers: { 'X-CSRF-TOKEN': $('input[name=_token]').val() },
                  data:{
                      id:x,

                  },
                  success:function(data){
                       // alert(data);
                        location="viewselect/"
                  },
                  error:function(object, status, e){
                      alert(e);
                  }

              })
            })
        })


        </script>
        <body>
        {{csrf_field()}}
        
        <div class="maindiv">
        <div style="width: 100%; background-color: #e9e9e9">

        <div  class="titlebar">
        <div class="titlebar_left">
          
          <div  style="float: left;" id="menu_icon">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars">
                   <img src="{{asset('public/images/menu.png')}}" width="40px" height="30px" style="background-color: #fff" />

                 </i>
                
              </a>
            <div class="topnav">
  
 
  <!-- Navigation links (hidden by default) -->
  <div id="myLinks">
    <a href="/" style="border-bottom: 1px solid #fff">BC_COUTURE</a>
    <a href="#cart" style="border-bottom: 1px solid #fff">Cart</a>
    <a href="#WishList" style="border-bottom: 1px solid #fff">WishList</a>
    <a href="/member/loginprofile" style="border-bottom: 1px solid #fff">Login</a>
    <a href="#support" style="border-bottom: 1px solid #fff">Support(24/7) Service</a>
    <a href="#ticket" style="border-bottom: 1px solid #fff">Category</a>
    
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  
  
</div>
</div>


        <span>Currency</span><select style=" font-family:candara;background-color:#000;color:#fff;margin-left:5px;border-radius:10px"><option>USD</option><option>NGN</option><option>EUR</option></select>
        <span style="margin-left:20px">Language</span><select style=" margin-left:5px;border-radius:10px; font-family:candara"><option >NGN</option><option style="background-image:url('usa.png')">USA</option><option style="background-image:url('ngn.png')">GER</option></select>
        
        </div>
        <div class="titlebar_left"><span style="font-family:candara;color:#fff;">Welcome to BCCourture!</span></div>
        <div  class="titlebar_right">
        <div   style="height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" id="myaccount"><a style="text-decoration:none;">My Account</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;">WishList</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;">Cart</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;">CheckOut</a></div>
        <div style="width:80px;height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" align="center"><a style="text-decoration:none;" href='/member/loginprofile'>Login</a></div>
        
        </div>
        </div>

        <div  align="center" class="bgbanner">
          
           <div  class="workinghours">
           <table border="0" style="width:100%">
           <tr>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em" ><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/time.png')}}" width="20px"/></div><span style="font-size:1.1em">WORKING HOURS</span><br/> 8:00am - 8:00pm</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/delivery.png')}}" width="20px"/></div><span style="font-size:1.1em">FREE DELIVERY & RETURN</span><br/>On delivery over $1000</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/money.png')}}" width="20px"/></div><span style="font-size:1.1em">100% MONEY BACK</span><BR/>30days money back Garanted</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('public/images/telephone.png')}}" width="20px"/></div><span style="font-size:1.1em">PHONE NUMBER  01-223009</span><br/>Order Online Noow!</td>
           </tr>
           </table>
           </div>
           
          
           


           <div  class="logoArea" align="center">
           
              <div class="logoArea1">
                <img src="{{asset('public/images/bc_couture.png')}}" width="50px" height="40px"/><span style=" font-weight:bold;font-family:candara;font-size:2.0em;color:#500000">BC COUTURE</span>
                </div>
                
                  <div class="logoArea2">
                  <input class="logoArea2_text" type="text" placeholder="Enter your search"  />
                </div>
                
               
                  <div class="logoArea3">
                  
                  <span style="font-family:candara;"><img src="{{asset('public/images/cart.png')}}" width="20px"/>Cart<br/><span style="font-weight:bold;font-size:1em; cursor:pointer" id="viewcart"> @if($counter){{$counter}}items @else <div>(EmptyCart)</div> @endif</span></span>
                </div>
                
             


          
           
           </div>

         
           
        </div>
         <div style="" class="menubar">
        <table width="100%" border="0" style="font-family:candara;font-weight:bold;color:#fff" align="center" ><tr><td align="center">BC COUTURE</td><td align="center">Categories</td><td align="center">Featured Custom</td><td align="center">Our Brand</td><td align="center">Custom Menu</td><td align="center">Sale Product</td><td align="center">Template Product</td><td align="center">Contact Us</td><td align="center">About Us</td></tr></table>
        
        
        
        </div>
      </div>

        <div  class="body">
          
        <div class="category" >
        <div>
        <div style="width:100%; background-color:#500000;color:#fff;font-weight:bold;font-family:candara;border-top-left-radius:7px;border-top-right-radius:7px;height:20px">Categories</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Mobile & Tablet</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Computer Accessories</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Gift</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Fashion $ Design</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Electronic Device</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Electronic Device</div>
        
        
        </div>
        <div style="width:100%;margin-top:20px">
        <div style="width:100%; background-color:#500000;color:#fff;font-weight:bold;font-family:candara;border-top-left-radius:7px;border-top-right-radius:7px;height:20px">BestSeller</div>
        <table>
        <tr>
        <td><img src="{{asset('public/images/bestseller1.jpg')}}" width="100px"/></td>
        <td><img src="{{asset('public/images/5-stars.png')}}" width="100px"/><br/><span style="font-family:candara">Ankara with Gel</span></td>
        </tr>
        <tr>
        <td><img src="{{asset('public/images/bestseller2.jpg')}}" width="100px"/></td>
        <td><img src="{{asset('public/images/5-stars.png')}}" width="100px"/><br/><span style="font-family:candara">Ankara with Gel</span></td>
        </tr>
        <tr>
        <td><img src="{{asset('public/images/bestseller4.jpg')}}" width="100px"/></td>
        <td><img src="{{asset('public/images/5-stars.png')}}" width="100px"/><br/><span style="font-family:candara">Ankara with Gel</span></td>
        </tr>
        <tr>
        <td><img src="{{asset('public/images/bestseller4.jpg')}}" width="100px"/></td>
        <td><img src="{{asset('public/images/5-stars.png')}}" width="100px"/><br/><span style="font-family:candara">Ankara with Gel</span></td>
        </tr>
        <tr>
        <td></td>
        </tr>
        </table>
        
        </div>
        <div style="width:100%;margin-top:20px">
        <div style="width:100%; background-color:#500000;color:#fff;font-weight:bold;font-family:candara;border-top-left-radius:7px;border-top-right-radius:7px;height:20px">Latest Update</div>
        <div style="width:100%">
        <img src="{{asset('public/images/news.jpg')}}" width="100%" height="100px"/>
        <span style="color:#500000;font-weight:bold;font-family:candara;text-align:justify">Tommy Hilfiger</span><span style="text-align:justify;font-family:candara">Nigerian influencers,celebs wears fashion brand to exclusive in store event in Nigeria</span>
        
        </div>
        
        </div>
        <div style="width:100%;margin-top:20px">
        <div style="width:100%; background-color:#500000;color:#fff;font-weight:bold;font-family:candara;border-top-left-radius:7px;border-top-right-radius:7px;height:20px">FAQ</div>
        <div>
        <span style="font-family:candara; cursor:pointer">* How Do I create an Account?</span><br/>
        <span style="font-family:candara; cursor:pointer">* How Do I create an Account?</span><br/>
        <span style="font-family:candara; cursor:pointer">* How Do I create an Account?</span><br/>
        <span style="font-family:candara; cursor:pointer">* How Do I create an Account?</span><br/>
        <span style="font-family:candara; cursor:pointer">* How Do I create an Account?</span><br/>
        
        </div>
        
        </div>

        <div style="width:100%;margin-top:20px">
        <div style="width:100%; background-color:#500000;color:#fff;font-weight:bold;font-family:candara;border-top-left-radius:7px;border-top-right-radius:7px;height:20px">Customer's Testimonies</div>
        
        
        </div>
        </div>
        <div class="product" >



<div><img src="{{asset('public/images/banner.gif')}}" width="100%" height="200px"/></div>
<div style="margin-top:10px;background-color: #003300;width: 100%" > 
        @if (!$all->isEmpty())
        <div style="float:left;width:100%;border:0px solid #000"   >
        
        @foreach ($all as $result)
        <div class="displayproduct"  >
        <div ><img src="{{asset(public/$result->productimage)}}" class="imageframe"  id="{{$result->id}}" /></div>
        <div><img src="{{asset('public/images/5-stars.png')}}"  class="starframe" /></div>
        <div style="width:100%;font-family:candara;font-weight:bold" align="center">{{$result->productname}}</div>
        <div style="width:100%;font-family:candara;font-weight:bold" align="center">{{$result->productprice}}</div>
        </div>
        
        
        @endforeach
        
        
        </div>
        @else
        Empty Database
        @endif

        
        </div>

        </div>
              
        
        
        
        </div>
       
        </body>
        </html>