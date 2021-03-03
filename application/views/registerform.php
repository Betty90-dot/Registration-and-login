<!DOCTYPE html>
<html>
<head>
	<title>register</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
	form
	{
		border:2px solid;
		margin-left:400px;
		width:400px;
		text-align:center;

	}
	input
	{
		padding:5px;
		margin:15px;
	}
	
</style>
</head>
<body>
	<form name="myform" action="<?php echo base_url()?>first/register_user" method="POST">
		<table>
			<h1>Registration form</h1>
			<tr><td>
				FIRST NAME:</td><td><input type="text" name="fname" placeholder="firstname" pattern=".{3,}"   required title="3 characters minimum" maxlength="25"></td></tr>
			<tr><td>
				LAST NAME:</td><td><input type="text" name="lname"  placeholder="lastname" pattern=".{3,}"   required title="3 characters minimum"  maxlength="25"></td></tr>
			<tr><td>
				<tr><td>	
				EMAIL ID:</td><td><input type="email" name="email" id="email" required class="form-control"></td><td><span id="email_result"></span></td></tr>

				<tr><td>	
				MOBILE:</td><td><input type="text" name="mobile" id="mobile"required></td><td><span id="phno_result"></span></td></tr>

				<tr><td>	
				DOB:</td><td><input type="text" name="dob" required></td></tr>

				<tr><td>
				ADDRESS:</td><td><textarea name="address"></textarea></td></tr>
			<tr><td>	
				DISTRICT:</td><td><input type="text" name="dst"  placeholder="district" required minlength="10"maxlength="12"></td></tr>
			<tr><td>	
				PIN:</td><td><input type="text" name="pin"></td></tr>
			<tr><td>	
			
			<tr><td>
				PASSWORD:</td><td><input type="password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td></tr>
				</table>

				<tr><td>	
				USER NAME:</td><td><input type="text" name="username" id="username"  placeholder="phoneno" required minlength="10"maxlength="12"></td><td><span id="uname_result"></span></td></tr>
			<tr><td>

				<input type="submit" name="submit" align="center">
		
	</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>first/email_availibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  a

      $('#mobile').change(function(){  
           var phno = $('#mobile').val();  
           if(phno != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>first/phno_availability",  
                     method:"POST",  
                     data:{mobile:mobile},  
                     success:function(data){  
                          $('#phno_result').html(data);  
                     }  
                });  
           }  
      });  
       $('#username').change(function(){  
           var uname = $('#username').val();  
           if(uname != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>first/uname_availability",  
                     method:"POST",  
                     data:{username:username},  
                     success:function(data){  
                          $('#uname_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>  

</body>
</html>
