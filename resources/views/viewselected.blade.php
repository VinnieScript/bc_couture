<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{!!asset('images/logo.jpg')}!!"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
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
        $(document).ready(function(){
            //alert('Jquery')
            $("#uploadproduct").click(function(){

                window.location= "admin/";
                //document.getElementById('body').innerHTML="";

            })

            $("#quantity").on('change',function(){

               var price = document.getElementById('price').value;
               var quantity = document.getElementById('quantity').value;
               var total = document.getElementById('total').innerHTML;
               if(quantity!= "" && quantity > 0){
                   total = quantity * price;
                   document.getElementById('total').innerHTML =total
               }


            })
            $("#addtocart").click(function(){
                var subtotal = document.getElementById('total').innerHTML
                var price = document.getElementById('price').value;
                var quantity = document.getElementById('quantity').value;
                var id = document.getElementById('id').value;
                var productname = document.getElementById('productname').value;
//alert(productname)
                if (subtotal!=""){
                    //alert('Go to cart');
                    $.ajax({
                            url:'/savecart',
                            type:'post',
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            data:{
                                subtotal:subtotal,
                                price:price,
                                quantity:quantity,
                                id:id,
                                productname:productname
                            },
                            success:function(data){
                                //alert(data);
                                //console.log(data)
                                    window.location="/";
                            },
                            error:function(object, status,e){
                                alert(e);
                            }


                    })



                }
                

            })

            
        })


        </script>
        <body>
        
        <div id="maindiv" style="width:100%; height:100%;border:0px solid #000">
        <div style="width: 100%; background-color: #e9e9e9">

        <div  class="titlebar">
        <div class="titlebar_left">
        <span>Currency</span><select style=" font-family:candara;background-color:#000;color:#fff;margin-left:5px;border-radius:10px"><option>USD</option><option>NGN</option><option>EUR</option></select>
        <span style="margin-left:20px">Language</span><select style=" margin-left:5px;border-radius:10px; font-family:candara"><option >NGN</option><option style="background-image:url('usa.png')">USA</option><option style="background-image:url('ngn.png')">GER</option></select>
        <span style="font-family:candara;color:#fff;">Welcome to BCCourture!</span>
        </div>
        
        <div  class="titlebar_right">
        <div style="height:30px;border:0px solid #fff; color:#fff;font-family:candara;float:left" id="myaccount"><a style="text-decoration:none;">My Account</a></div>
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
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em" ><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/time.png')}}" width="20px"/></div><span style="font-size:1.1em">WORKING HOURS</span><br/> 8:00am - 8:00pm</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/delivery.png')}}" width="20px"/></div><span style="font-size:1.1em">FREE DELIVERY & RETURN</span><br/>On delivery over $1000</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/money.png')}}" width="20px"/></div><span style="font-size:1.1em">100% MONEY BACK</span><BR/>30days money back Garanted</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/telephone.png')}}" width="20px"/></div><span style="font-size:1.1em">PHONE NUMBER  01-223009</span><br/>Order Online Noow!</td>
           </tr>
           </table>
           </div>
           
          
           
<div  class="logoArea" align="center">
           
              <div class="logoArea1">
                <img src="{{asset('images/bc_couture.png')}}" width="50px" height="40px"/><span style=" font-weight:bold;font-family:candara;font-size:2.0em;color:#500000">BC COUTURE</span>
                </div>
                
                  <div class="logoArea2">
                  <input class="logoArea2_text" type="text" placeholder="Enter your search"  />
                </div>
                

           
           </div>

           
           
        </div>
         <div  class="menubar">
        <table width="100%" border="0" style="font-family:candara;font-weight:bold;color:#fff" align="center" ><tr><td align="center">BC COUTURE</td><td align="center">Categories</td><td align="center">Featured Custom</td><td align="center">Our Brand</td><td align="center">Custom Menu</td><td align="center">Sale Product</td><td align="center">Template Product</td><td align="center">Contact Us</td><td align="center">About Us</td></tr></table>
        
        
        
        </div>
        
      </div>
        
        <div style="width:100%;margin-left:100px;color:#fff;" id="body">


        

        <div class="product" >


        <div style="margin-top:10px"> 
        <div style="width:100%;float:left">
        @if (Session::has('fetch'))
        
        @foreach(Session::get('fetch') as $fetch)
        <input type="hidden" id="id" value="{{$fetch->id}}"/>
        <input type="hidden" id="productname" value="{{$fetch->productname}}"/>
        <div style="float:left"><img src="{{asset($fetch->productimage)}}" width="250px" /></div>
        <div style="float:left; margin-left:100px">
        <hr style="width:0px; height:200px;margin-top:30px"/>
        </div>
        <div style="float:left;margin-left:30px;width:50%">
        <div style="width:100%;height:30px; color:#fff;font-family:candara;font-size:1.2em; background-color:#500000">{{$fetch->productname}}</div>
        <div style="margin-top:20px">
        <table height="200px">
        <tr>
        <td><label style="font-family:candara;font-size:1.1em">Quantity</label></td>
        <td><input type="text" id="quantity" style="width:100px;height:30px;"/></td>
        </tr>
        <tr>
        <td><label style="font-family:candara;font-size:1.1em">Unit Price</label></td>
        <td><input type="text" id="price" value="{{$fetch->productprice}}" disabled="disabled" style="width:100px;height:30px;"/></td>
        </tr>
        <tr>
        <td> <label style="font-family:candara;font-size:1.1em">Size</label></td>
        <td><select id="size" style="font-family:candara;width:120px;height:30px;font-size:1.1em;"><option>Small</option><option>Medium</option><option>Large</option><option>Extra-Large</option></select></td>
        </tr>
        <tr>
        <td><div style="font-family:candara;font-weight:bold;color:#500000;float:left">Total:</div></td>
        <td> <div id="total" style="float:left;margin-left:20px;font-weight:bold"></div></td>
        </tr>
        </table>
        <button id="addtocart" style="width:200px;height:50px;background-color:#500000;color:#fff;font-family:candara;" >Add to Cart</button>
        </div>
        </div>
        @endforeach
        
        @endif
        </div>

        
        </div>

        </div>



        
        
        
        
        </div>
        
        </div>
        </body>
        </html>