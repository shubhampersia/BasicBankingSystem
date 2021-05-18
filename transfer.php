<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/134.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#60007b;
		padding:50px;
		border:2px ridge #874a87;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#fffff;
	}
	.button:hover{
		background-color:#60007b;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Tanmay"){
				 var arr=["Ankur","Maneet","Prateek","Vibhor","Devashish","Vipul","Parth","Yash","Lakshya"];
				 }
				 else if(a==="Ankur"){
					var arr=["Tanmay","Maneet","Prateek","Vibhor","Devashish","Vipul","Parth","Yash","Lakshya"];
				}
				else if(a==="Maneet"){
					var arr=["Tanmay","Ankur","Prateek","Vibhor","Devashish","Vipul","Parth","Yash","Lakshya"];
				}
				else if(a==="Prateek"){
					var arr=["Tanmay","Ankur","Maneet","Vibhor","Devashish","Vipul","Parth","Yash","Lakshya"];
				 }
				 else if(a==="Vibhor"){
					var arr=["Tanmay","Ankur","Maneet","Prateek","Devashish","Vipul","Parth","Yash","Lakshya"];
				 }
				 else if(a==="Devashish"){
					var arr=["Tanmay","Ankur","Maneet","Prateek","Vibhor","Vipul","Parth","Yash","Lakshya"];
				 }
				 else if(a==="Vipul"){
					var arr=["Tanmay","Ankur","Maneet","Prateek","Vibhor","Devashish","Parth","Yash","Lakshya"];
				 }
				 else if(a==="Parth"){
					var arr=["Tanmay","Ankur","Maneet","Prateek","Vibhor","Devashish","Vipul","Yash","Lakshya"];
				 }
				 else if(a==="Yash"){
					var arr=["Tanmay","Ankur","Maneet","Prateek","Vibhor","Devashish","Vipul","Parth","Lakshya"];
				 }
				 else if(a==="Lakshya"){
				 var arr=["Tanmay","Ankur","Maneet","Prateek","Vibhor","Devashish","Vipul","Parth","Yash"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#ee82ee;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="color: #ffffff">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Tanmay">Tanmay</option>
			<option value="Ankur">Ankur</option>
			<option value="Maneet">Maneet</option>
			<option value="Prateek">Prateek</option>
			<option value="Vibhor">Vibhor</option>
			<option value="Devashish">Devashish</option>
			<option value="Vipul">Vipul</option>
			<option value="Parth">Parth</option>
			<option value="Yash">Yash</option>
			<option value="Lakshya">Lakshya</option>
		</select><br><br>
		<label for="receiver" align="left" style="color: #ffffff">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left" style="color: #ffffff">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='white'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>