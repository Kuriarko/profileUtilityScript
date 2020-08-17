<html>
 
   <head> 
      <title>Upload Form</title> 
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <style>	 
	 body {
  background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url("<?php echo base_url();?>images/cover.jpg");
  background-repeat: no-repeat;
}
.content-table{
	border-collapse: collapse;
	margin: 25px 0;
	background-color: #f3f3f3;
	min-width: 400px;
	border-radius: 5px 5px 0 0;	
	overflow: hidden;
}
.content-table th,
.content-table td{
	padding: 12px 15px;
}
.content-table tbody tr.active-row {
	font-weight: bold;
	color: #009879;
}
.content-table tbody tr.highlight {
	font-weight: bold;
}

.headline
{
	background-color: #FFA500;
}

@media screen and (max-width:400px) {
  body{
    width: 100%;
  }
  
}
</style>

   </head>
	
   <body> 

   <br> <br> <br> <br> <br>
   <center class="headline"><h1><u>Upload your credentials</u></h1></center>
   <center class="table-center">
   <div>
   <center>
 
<?php echo $error;?> 
      <?php echo form_open_multipart('Admincontroller/do_upload');?> 
	  
  
		
      <form  action="<?php echo base_url();?>index.php/Admincontroller/do_upload" method="POST" >
	  <table class="content-table" style="text-align: center" border="5">
	  <tbody>
	  <tr class="highlight">
	  <td>Select Your Image:</td>
        <td> <input type = "file" name = "userfile"  /> </td>
         </tr>
		 <tr class="active-row">
		 <td>Select Your Signature:</td>
		   <td><input type = "file" name = "userfile1"  /></td> 
		   </tr>   
	   <br>
      	  <tr>
		  
         <td  colspan="2" style="text-align: center" ><input type = "submit" value = "upload" /></td> 
		 </tr>
		 </tbody>
		 </table>
      </form>
    </center>
	</div>
	</center>
	
	
   </body>
	
</html>

	  
		