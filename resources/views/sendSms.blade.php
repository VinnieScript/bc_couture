<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{!!asset('images/logo.jpg')}!!"/>
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<title>BC_COUTURE SMS CENTER</title>
</head>
<style type="text/css">



</style>
<script >
	$(document).ready(function(){

		$('#sendmessage').click(function(){
			var x = document.getElementById('message').value;

			if(x!=""){
				document.getElementById('response').innerHTML='Please Wait...'  
				$.ajax({
                    url:'/getUserNumber',
                    type:'post',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                  
                    data:{
                    	phonenumber:x
                    },   
                    
                    success:function(data){
                           document.getElementById('response').innerHTML=data          
                        },
                    error:function(object,status,e){
                        alert(e)
                    }
                })

			}
			else{
				document.getElementById('response').innerHTML = "Enter a Valid PhoneNumber"
				$('#response').css('color','#fff');
				$('#response').css('backgroundColor','#ff0000');
				$('#response').css('marginTop','10px');
				$('#response').css('width','80%');



			}
		})
	})



</script>
<body style="background-color: #e9e9e9">

<div style="width:100%; height: 100%;" align="center">
	
	<div style="width:30%; height:150px; border-radius:20px;margin-top:20%;background-color: #003300">
		<div style="width:100%;background-color:#fff;border-top-right-radius: 20px;border-top-left-radius: 20px;font-size: 1em;font-family: candara">MessageCenter

		</div>
		<br/><br/>
<label style="color: #fff;font-family: candara">Message:</label><input type="text" id="message"  placeholder="Enter PhoneNumber" style="width:50%;height:30px">
<button style="height: 30px" id="sendmessage">Send</button>
<div id="response" style="color: #fff"  ></div>
</div>


</div>


</body>
</html>