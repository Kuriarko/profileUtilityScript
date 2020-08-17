<html>
 
   <head> 
      <title>Download Form</title> 
	  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>	 
	 body {
  background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url("<?php echo base_url();?>images/cover.jpg");
  background-repeat: no-repeat;

}
@media screen and (max-width:400px) {
  .container {
    width:100%;
  }
  .title-font, .leading-relaxed
  {
	  color: white;
  }
}
</style>

   </head>
	
   <body> 
     <section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="<?php echo base_url();?>images/agreement.jpg">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Agreement 1</h2>
        <p class="leading-relaxed text-base font-medium text-gray-900">Click on the button below to view Agreement 1</p>
        <button  class="flex mx-auto mt-6 text-white bg-orange-500 border-0 py-2 px-5 focus:outline-none hover:bg-orange-600 rounded"><a href="<?php echo base_url();?>assets/Mr. Babu agreement 1.pdf">view pdf</a></button>
      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="<?php echo base_url();?>images/agree.jpg">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Agreement 2</h2>
        <p class="leading-relaxed text-base font-medium text-gray-900">Click on the button below to view Agreement 2</p>
        <button  class="flex mx-auto mt-6 text-white bg-orange-500 border-0 py-2 px-5 focus:outline-none hover:bg-orange-600 rounded"><a href="<?php echo base_url();?>assets/Mr Babu agreement 2.pdf">view pdf</a></button>
      </div>
    </div>
  </div>
   <button  class="flex mx-auto mt-6 text-white bg-orange-500 border-0 py-2 px-5 focus:outline-none hover:bg-orange-600 rounded"><a href="<?php echo base_url();?>index.php/Admincontroller/formupload">proceed</a></button>
 
</section>
   </body>
	
</html>