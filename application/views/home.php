<html>
<head>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <style>	 
	 body {
  background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url("<?php echo base_url();?>images/cover.jpg");
  background-repeat: no-repeat;
}
  .leading-relaxed
  {
	  color: white;
  }
@media screen and (max-width:400px) {
  .container {
    width:100%;
  }
   .leading-relaxed
  {
	  color: white;
  }
}
</style>
</head>
<body>
<!------------
<form action="<?php echo base_url();?>index.php/Admincontroller/fetch" method="post">

<input type="submit" value="view_submissions">
</form>
------------------->
<section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="<?php echo base_url();?>images/admin.jpg">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><?php echo "Welcome ".$this->session->userdata('uid');?></h1>
      <p class="mb-8 leading-relaxed font-medium text-gray-900">You can view the submissions from users by clicking on the 'view submissions' button below</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg"><a href="<?php echo base_url();?>index.php/Admincontroller/fetch">view Submissions</a></button>
      </div>
    </div>
  </div>
</section>
</body>
</html>
