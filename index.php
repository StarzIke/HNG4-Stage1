<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Time Checker</title>
    
	<style>
     body{
    padding: 0;
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 40px;
    margin-right: 40px;
    font-family: Quicksand;
    background: #ffffff;
}
.wrapper{
    width:100%;
    height:100%; 
    display: inline-table;
    background-color: #ffffff;
    align-content: center;
}

.logo{
    
    display: inline-block;
    color: #ffffff;
    font-size: 40px;
    padding: 20px;
    

}

.side1{
    box-shadow: none;
    color: #ffffff;
    background-color: #17ABFF;
    padding: 10px;
    border-radius: 15px;
    float: right;
    margin-right: 30px;
    margin-top: 50px;
    font-weight: bold;

}
.sidebutton{
width: 100%;
height: 100%;    
display: inline-block;
background-image: url('slide.jpg');
border-bottom: 20px;
border-style: solid;
border-color: #fff;
}

.date_time{
    color: #ffffff;
    display:table-row;
    background-color:#17ABFF;
    height:200px;
    width:300px;
    margin: 30px;
    border-top: 50px solid;
    border-color: #fff;

}
.d{
    text-align: center;
    margin-top: 50px;
    margin-right: 20px;
    font-weight: bold;

}

footer{
    background-color: #ffffff;
    text-align: center;
    color: #17ABFF;
}   
    </style>
	
    </head>
    <body>

     <div class="wrapper">
     	

     	<div class ="sidebutton">
            <h1 class="logo"><font size ="40px" face="Rockwell">Simple Time</font></h1>
     		<a href=""><button class ="side1">Login</button></a>
     		<a href=""><button class ="side1">Sign Up</button></a>
     	</div>

     	<div class="date_time">
     		<?php
            echo "<div class='d'>";
     		echo "date: " .date("Y-m-d") . "<br> <p>";

     		echo "<p> time: " .date("h:i:s a");
            echo "</div>";


     		?>
     	</div>
    
        <footer>
            <p>Simple Time, Copyright &copy; 2018
            </p>
        </footer>
    </div>
    
    </body>
</html>
