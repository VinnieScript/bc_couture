<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{!!asset('images/logo.jpg')}!!"/>
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <title>BC_COUTURE | Home of Fashion</title>
        </head>
        <style>
        
   .fancyLoader{
     width:100%;
     height:100%;
     position:absolute;
     z-index:4;
     background-color:#000;
     opacity:0.7;
     text-align:center;
   }
   .fancyLoaderappend{
     margin-top:50%;
     width:100%;
     height:50%;
     position:absolute;
     z-index:5;
     text-align:center;
     
     
   }

        </style>
        <script>
        $(document).ready(function(){
            $(".Uqty").click(function(){
            var y = $(this).find('input').attr('id');
            var id = $(this).find('span').attr('id');
            
            $("#"+y).removeAttr('disabled');
            $("#"+y).focus();
            $('#'+y).bind('blur', function(){
                var x = $(this).val();
               // alert(x+"_"+id);
                $.ajax({
                            url:'/updateQty',
                            type:'post',
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            beforeSend:function(){
                            $("#fancyLoader").addClass('fancyLoader');
                             $('#fancyLoaderappend').addClass('fancyLoaderappend');
                             $("#fancyLoaderappend").append('<div id="divloader" style="width:100%;margin-top:50%" align="center"><img src="{{asset("images/loader.gif")}}" width="100px"/></div>')
                            },
                            data:{
                                id:id,
                                qty:x
                                
                                
                            },
                            success:function(data){
                                alert(data);
                                //console.log(data)
                                    window.location="/viewcart";
                            },
                            error:function(object, status,e){
                                $("#fancyLoader").removeClass('fancyLoader');
                                $("#divloader").remove()
                                $("#fancyLoaderappend").removeClass('fancyLoaderappend');
                                alert(e);
                            }


                    })

            })
            })
            $('#contd').click(function(){

                location = '/';
            })
            $(".delete").click(function(){
                var id = $(this).find('input').attr('value');
                
                alert(id);

                 $.ajax({
                            url:'/deleteItem',
                            type:'post',
                            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                            data:{
                                
                                id:id,
                                
                            },
                            success:function(data){
                                //alert(data);
                                //console.log(data)
                                    window.location="/viewcart";
                            },
                            error:function(object, status,e){
                                alert(e);
                            }


                    })

            })

        })


        </script>
        <body>
        <div id="fancyLoaderappend"></div>
 <div id="fancyLoader"></div>
        <div style="width:100%;height:1000px;position:absolute;z-index:1;position;background-color:#000;opacity:0.5" align="center">
        </div>
        <div style="width:100%;height:1000px;position:absolute;z-index:2;position" align="center"><div style="width:50%;color:#fff;margin-top:10%">
        <span style="font-family: candara;font-weight: bold;font-size: 1.5em">BC_COUTURE SHOPPING CART</span><br/>
        <span> 8 Louis Solomon Street , Ahmadu Bello Way, Victoria Island, Lagos</span>
        <span></span>
        <div style="width:100%;background-color:#fff">
        <div style="width:100%;height:30px;font-family:candara;background-color:#009acd;text-align:left">
        <div style="float:left;width:200px;height:40px; margin-left:10px">Product Name</div><div style="float:left;width:100px;height:40px">Price</div><div style="float:left;width:100px;height:40px">Quantity</div><div style="float:left;height:40px;width:100px">Total</div><div style="float:left;height:40px; margin-right:10px">Decision</div>
      </div>
      <div style="width:100%;height:30px;font-family:candara;background-color:#fff;color:#000;text-align:left">
       
      @foreach ($cartItem as $r)
      
      <div style="float:left;width:100%; height:100%;border:1px solid #000">
      <div style="float:left;width:200px;height:40px; margin-left:10px">{{$r->name}}</div><div style="float:left;width:100px;height:40px">{{$r->price}}</div><div style="float:left;width:100px;height:40px" class="Uqty"><input type="text" value="{{$r->qty}}" id="{{$r->rowId}}"  style="width:50px" disabled="disabled"/><span id="{{$r->rowId}}"></span></div><div style="float:left;height:40px;width:100px">{{$r->qty * $r->price}}</div><div style="float:left;height:40px; margin-right:10px"><button style="background-color:#500000;color:#fff;font-family:candara" class="delete"><input type="hidden" value="{{$r->rowId}}"/> Delete</button></div>
    </div>
    <br/>
      @endforeach
      
      </div>
      <br/>
<div ><span style="color:#000;font-weight:bold;font-family:Arial">Total:</span><img src="{{asset('images/naira.png')}}" width="20px" /><span style="color:#000;font-family:candara;font-size:1.3em;font-weight:bold">{{$total}}</span></div>
        
        </div>
        <div style="margin-top:30px"><button style="margin-left:10px;font-family:candara;cursor:pointer;background-color:#500000;color:#fff; width:150px; height:30px" id="contd">Countinue Shopping</button><button style="margin-left:10px; width:150px; height:30px; background-color:#009acd;color:#fff;font-family:candara;cursor:pointer"><a href="/checkout">Check out</a></button></div>
        </div></div>

        <div style="width:100%; height:1000px;background-color:#fff">
        </div>


        </body>
        </html>