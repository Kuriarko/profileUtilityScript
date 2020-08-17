<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <style>	 
	 body {
  background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("<?php echo base_url();?>images/cover.jpg");
  background-repeat: no-repeat;
  margin: 0;
  padding: 20px;
}
* {
	box-sizing: border-box;
}
.content-table{
	width: 100%;
	border-collapse: collapse;
	margin: 25px 0;
	background-color: #f3f3f3;
	min-width: 400px;
	border-radius: 5px 5px 0 0;

	
}
.content-table td,
.content-table th {
	padding 12px 15px;
}
.content-table thead tr {
	background-color: #009879;
	color: #ffffff;
	text-align: left;
	font-weight: bold;
	text-align: center;
}
.headline
{
	background-color: #FFA500;
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: #FFA500;}
@media(max-width: 500px){
	
	.content-table, .content-table tbody, .content-table tr, .content-table td{
		display: block;
		width: 100%;
	}
	.content-table tr{
		margin-bottom: 15px;
	}

}

</style>
</head>
 <body>
 <center class="headline"><h1><u>SUBMISSIONS</u></h1></center>
 <center class="table">
  <table class="content-table" style="text-align: center" border="5">
   <thead><tr><th>ID</th><th>Name</th><th>phone</th><th>Email</th><th>Actions</th><th>Agreement1</th><th>Agreement2</th></tr></thead>
  
<?php
foreach($records as $r)
{
 echo "<tr><td>".$r->uid."</td><td>".$r->name."</td><td>".$r->phone."</td><td>".$r->email."</td><td><a href='".base_url()."index.php/Admincontroller/del/".$r->uid."'>Delete</a>|<a href='".base_url()."index.php/Admincontroller/update/".$r->uid."'>Update</a></td>
 <td><a href='".base_url()."index.php/Admincontroller/agreement1/".$r->uid."'>view agreement1<a></td> <td><a href='".base_url()."index.php/Admincontroller/agreement2/".$r->uid."'>view agreement2<a></td></tr>"	;
}	
?>

   </table>
   <button class="button button1"><a href="<?php echo base_url();?>index.php/Admincontroller/logout" >Logout</a></button> 
   </center>
  
  </body>
 </html> 