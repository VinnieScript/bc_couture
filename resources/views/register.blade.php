<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{!!asset('images/logo.jpg')}!!"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
        a:visited{
          color:#fff;
        }

        </style>
        <script>
        $(document).ready(function(){

          
            $('#signupbtn').click(function(){
              var firstname = document.getElementById('firstname').value
              var lastname = document.getElementById('lastname').value
              var emailaddress = document.getElementById('emailaddress').value
              var sex = document.getElementById('sex').value
              var phonenumber = document.getElementById('phonenumber').value
             var password = document.getElementById('password').value
              if(firstname!= "" && lastname!="" && emailaddress!="" && sex!="" && phonenumber!="" && password!="" ){
                 $.ajax({
                  url:'/registerUser/',
                  type:'post',
                  headers: { 'X-CSRF-TOKEN': $('input[name=_token]').val() },
                  data:{
                      firstname:firstname,
                      lastname:lastname,
                      sex:sex,
                      phonenumber:phonenumber,
                      emailaddress:emailaddress,
                      password:password

                  },
                  success:function(data){
                       alert(data);
                       if(data === "User profile sucessfully created"){
                        window.location='/user/profile/'+emailaddress
                       }
                        //location="viewselect/"
                  },
                  error:function(object, status, e){
                      alert(e);
                  }

              })
              
              }
              else{
                alert('Empty Username/Password.')
              }

            })
        })


        </script>
        <body>
        {{csrf_field()}}
        
        <div id="maindiv" style="width:100%; height:100%;border:0px solid #000">
        <div style="width:80%;height:40px; background-color:#500000;position:absolute;z-index:2;margin-top:150px;margin-left:100px;border-radius:5px">
        <table width="100%" border="0" style="line-height:30px;font-family:candara;font-weight:bold;color:#fff" align="center" ><tr><td align="center">BC COUTURE</td><td align="center">Categories</td><td align="center">Featured Custom</td><td align="center">Our Brand</td><td align="center">Custom Menu</td><td align="center">Sale Product</td><td align="center">Template Product</td><td align="center">Contact Us</td><td align="center">About Us</td></tr></table>
        <div style="width:100%; margin-top:20px;color:#fff;background-color:#000;">
        
        </div>
        
        
        </div>
        <div style="width:100%;height:30px;background-color:#500000;position:absolute;z-index:1;">
        <div style="margin-left:100px;float:left; color:#fff;font-family:candara;font-size:0.9em;font-weight:bold;line-height:30px">
        <span>Currency</span><select style=" font-family:candara;background-color:#000;color:#fff;margin-left:5px;border-radius:10px"><option>USD</option><option>NGN</option><option>EUR</option></select>
        <span style="margin-left:20px">Language</span><select style=" margin-left:5px;border-radius:10px; font-family:candara"><option >NGN</option><option style="background-image:url('usa.png')">USA</option><option style="background-image:url('ngn.png')">GER</option></select>
        <span style="margin-left:200px;font-family:candara;color:#fff;">Welcome to BCCourture!</span>
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
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em" ><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/time.png')}}" width="20px"/></div><span style="font-size:1.1em">WORKING HOURS</span><br/> 8:00am - 8:00pm</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/delivery.png')}}" width="20px"/></div><span style="font-size:1.1em">FREE DELIVERY & RETURN</span><br/>On delivery over $1000</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/money.png')}}" width="20px"/></div><span style="font-size:1.1em">100% MONEY BACK</span><BR/>30days money back Garanted</td>
           <td style="margin-left:20px; font-family:candara;font-weight:bold; font-size:0.8em"><div style="float:left; margin-right:10px;margin-top:8px"><img src="{{asset('images/telephone.png')}}" width="20px"/></div><span style="font-size:1.1em">PHONE NUMBER  01-223009</span><br/>Order Online Noow!</td>
           </tr>
           </table>
           </div>
           
          
           </div>
           <div style="margin-top:100px;border:0px solid #000; width:100%" id="logoArea">
           <div style="margin-left:100px;float:left;width:80%;border:0px solid #000">
           <div style="width:50px;height:40px;border:1px solid #500000;float:left"><img src="{{asset('images/bc_couture.png')}}" width="50px" height="40px"/></div>
           <div style="float:left; margin-left:10px;line-height:40px;font-weight:bold;font-family:candara;font-size:2.0em;color:#500000">BC COUTURE</div>
           <div style="margin-left:2%;margin-top:5px;float:left"><input type="text" placeholder="Enter your search" style="font-family:candara;border-radius:5px;width:500px; height:30px;margin-left:3%" id="search"/></div>
           <div style="margin-left:5%;margin-top:5px;float:left"><img src="{{asset('images/cart.png')}}" width="40px"/></div>
           </div>
          
           
           </div>
          
           
        </div>
        <div style="width:100%;margin-left:100px;color:#fff;" id="body">
        <div id="category" style="float:left;width:20%;color:#000;margin-top:15%">
        <div style="width:100%;">
        <div style="width:100%; background-color:#500000;color:#fff;font-weight:bold;font-family:candara;border-top-left-radius:7px;border-top-right-radius:7px;height:20px">Categories</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Mobile & Tablet</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Computer Accessories</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Gift</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Fashion $ Design</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Electronic Device</div>
        <div style="width:100%; height:30px;font-family:candara;border-bottom:1px solid #500000;margin-top:5px">Electronic Device</div>
        
        
        </div>
        
        
       

       
        </div>
        
        <div style="border:1px soild #000;float:left;margin-left:2%;background-color:#fff;color:#003300;width:60%;margin-top:15%">
        
        <div style="width: 100%; margin-top: 50px" align="center">
          

          <FIELDSET >
            <legend>Registration Details</legend>
            <form style="margin-top: 20px">
              
              <input type="text" name="" id="lastname" placeholder="LastName" style="width: 50%;height:40px"><br/>
              <input type="text" name="" id="firstname" placeholder="FirstName" style="width: 50%;height:40px;margin-top: 10px"><br/>
              <input type="text" name="" id="emailaddress" placeholder="EmailAddress" style="width: 50%;height:40px;margin-top: 10px"><br/>
              <input type="text" name="" id="phonenumber" placeholder="phonenumber" style="width: 50%;margin-top: 10px;height:40px;"><br/>
              <select id="sex" style="width: 50%;margin-top: 10px;height:40px;" >
                <option>Sex</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              <br/>
              <input type="password" name="" id="password" placeholder="password" style="width: 50%;margin-top: 10px;height:40px;"><br/>

              <br/>
              <input type="button" value="Register" id="signupbtn"><br/>
              

            </form>
          </FIELDSET>

        </div>
        

        
        </div>
        
        
        
        </div>
        
        </div>
        </body>
        </html>