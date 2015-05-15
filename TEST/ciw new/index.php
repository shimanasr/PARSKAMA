<?php require_once('conf/config.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	form{
		position:relative;
		display:inline-block;
		vertical-align:top;
		box-shadow:4px 4px 4px 4px #666;
		margin:auto 50px;
		width:400px;
		font-family:Tahoma, Geneva, sans-serif;
		font-size:16px;
		
	}
	label{
		display:inline-block;
		height:50px;
		vertical-align:top;
		margin:10px 8px;
		}
	input{
		display:block;
		height:25px;
		margin:5px 8px;
	}
    </style>
</head>

<body>
	<form action="process.php" method="post">
    	<label for="name">
        	name :
        </label>
        <input id="name" name="name" type="text" />
        
        <label for="lastname">
        	lastname :
        </label>
        <input id="lastname" name="lastname" type="text" />
        
        <label for="username">
        	username :
        </label>
        <input id="username" name="username" type="text" />
        
        <label for="password">
        	password :
        </label>
        <input id="password" name="password" type="text" />
        <label for="email">
        	email :
        </label>
        <input id="email" name="email" type="email"/>
        <label for="gender">
        	gender:
        </label>
        
        
        <input type="TEXT" name="gender" id="male"  />
        
       
        <label for="birthday">
        	birthday:
         </label>
         <select>
         	<?php
				for($i=1320;$i<=1393;$i++) {
					echo"<option value=`$i` name=`birthday`>$i</option>";
				}
			?>
         </select>
        
        <input type="submit" id="btn" name="btn" value="sobmit" />
    </form>
</body>
</html>