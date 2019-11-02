<html>
<title>
</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#">Home</a>
  <a href="#">Bookings</a>
  <a href="#" class="active">Search</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="container">

<h3>Search</h3>
<div class="row">
<form action="/search" method="POST">
	@csrf
  <div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12 col-12">
	<div class="inpadding">
    <input type="date" placeholder="Enter From date" name="date" class="form-control">
	</div>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12 col-12">
	<div class="inpadding">
    <input type="date" placeholder="Enter Todate" name="date" class="form-control">
	</div>
	</div>
	 <div class="col-md-4 col-sm-6 col-xs-12 col-12">
   
	<div class="inpadding">
	<select class="form-control" name="uname">
  <option value="1">Chennai</option>
  <option value="2">Kodaikanal</option>
  
</select>
    
	</div>
	</div>
	 <div class="col-md-4 col-sm-6 col-xs-12 col-12">
   
	<div class="inpadding">
    <input type="text" placeholder="Enter rooms" name="rooms" class="form-control">
	</div>
	</div>
	
   
	<div class="col-md-4 col-sm-6 col-xs-12 col-12">
   
	<div class="inpadding">
	<select class="form-control" name="roomtype">
  <option value="1">Family</option>
  <option value="2">Single</option>
  <option value="3">Double</option>
  </select>
   
	</div>
	</div>
	
</div>
     
<div class="row"> 
<div class="col-md-12 col-sm-12 col-xs-12 col-12">
<div class="inpadding">
<button type="submit" name="submit" id="submit" style="float:right;">Search</button>
</div>
</div>  
</form> 


</div>
</div>
<div class="container">

<h3>Room Details</h3>

<div class="row">
foreach ($search as $items){ 
	

<div class="col-md-4 col-sm-12 col-xs-12 cover">
<div class="card">
  <img src="{{$items->image}}" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>{{$items->room_title}}</b></h4> 
    <p>Deluxe Rooms</p> 
	<p>Price ${{$items->price}}</p> 
	<p>Rating 4.1</p> 
	<p>Discount {{$items->discount}}</p> 
	<p>Discount price ${{$items->dis_price}}</p>
	<button>Book</button> 
  </div>
  </div>
</div>
}
</div>
</div>
<style>
body{
overflow-x:hidden;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
  transition: 0.3s;
  width: 100%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
h2{
text-align:center;
}

input[type=text], input[type=password] ,input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  text-align:center;
}



button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
label b{
text-align:left;
}
.inpadding{
padding:0px 10px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
@media screen and (min-width:300px) and (max-width: 767px) {
input[type=text],input[type=password]{
width:100%;
padding:10px;
}
label{
padding:10px;
}
button{
width:100%;
}
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
button{
background-color:green;
border:green;
color:#fff;
padding:10px 30px;
text-align:center;
}
.cover{
padding:10px;
}

</style>


</body>
</html>