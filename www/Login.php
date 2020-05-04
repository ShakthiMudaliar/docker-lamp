<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <style>
  #id{
				width:40%;
			}
	@media screen and (max-width:600px){
		input[type=password],input[type=text],tr{
			width:100%;
			
		}
		input[type=submit],a{
			width:70%;
		}
		table{
			width=100%;
		font-size:14px;
		margin-left:-30%;
		margin-right:-30%;
		
		
		
		}
	}
	input[type=submit],a,.ab{
		width:300px;
		border-radius: 12px;
		
	}
	
	table{
		
		background-color:#D0D0D0;
		
		
		
		
	}
	
	.ab{
		
		
	}	
		@media (max-width: 600px) {  
                .col1, .col2 {width:100%;
                    font-size:1.2rem;}
float:l					/*1rem = 16px*/
                }
 
                @media screen and (min-width:900px){
                body{
                        font-size:1.4rem;
                        center:50%;
                    }
                }
				
                .col1{
                    float:left;
                    width:25%
                }
                .col2{
                    float:left;
					height:20%;
                }
			
  </style>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
 <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script>
	function validation(){
		if((document.form1.UserID1.value=="") || (document.form1.Password1.value=="")){
			alert("Enter valid username and password");
			return false;
		}
		var e=document.Register.UserID1.value;
				var atpos=e.indexOf("@");
				var dotpos=e.lastIndexOf(".");
				if(atpos<1||dotpos<atpos+2||dotpos+2>=e.length)
				{
				alert("Not a valid email");
				return false;
				
				}
		
		if(isNAN(document.form1.UserID1.value)){
			alert("Enter valid username");
			return false;
		}
		return true;
	}
	
	
  </script>
</head>
<body background='newimg.jpeg' align='center'><br><br><br><br><br><br>
	
	<div class='container' id='id' align='center' >
    <form name="form1"   style='align:center;' action="CheckLogin.php" method="POST" onSubmit="return validation()">
	    <table style='text-align:center' align="center" cellspacing='5' cellpadding='10' width='70%'>
        <tr><th class='col1' colspan='2'><p align='center'><h2>Login&nbspDetails </h2></p>
				</th><tr></tr>
            <td class='col1'><b> EMail: </b> </td>
            <td class='col2'><b> <input class='ab' type="text" name="UserID1" placeholder='Enter EMail'></b> </td>
        </tr>
        <tr >
            <td class='col1'><b > Password: </b></td>
            <td class='col2'><b > <input class='ab' type="password" name="Password1" placeholder='Enter Password'> </input></b></td>
        </tr>
		<tr >
            
            <td class='col1' colspan='2'><a class='ab btn btn-success' href="Register.html">Sign Up</a></td>
        </tr>
        <tr>
            
            <td class='col1' colspan='2'> <input class='ab btn btn-success' type="submit" value="Login"></input> </td>
        </tr>
    </table> 
	
  </form></div>
</body>
</html>