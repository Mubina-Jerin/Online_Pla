

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ছাদ কৃষি</title>

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 </head>

 <header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="/images/logo.jpg" height="50 px" width="50 px">
    </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/landing"> হোম মেনু <span class="sr-only">(current)</span></a></li>
        <li><a href="/gardener/nursery/{{ Session::get('nursery_id') }}"> আমার বাগান </a> </li>
        <li><a href="/gardener/landing">বাগান সেবা অর্ডার </a> </li>
        <li><a href="/gardener/landing">অর্ডার ট্রেকিং </a> </li>
     
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="/landing/login">লগ আউট </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
</header>

   <body>
    
   
  <div class="row">
  <div class="col-sm-1 col-md-2">
  <a onclick="return openAddPlant();" >
  <img src="/images/addPlantButton.jpg">
   </a>
   <br/>
   <label> নতুন গাছের তথ্য দিন </label> <!-- Add New Plant To your Nursery Plant Name ,Plant Type, Prefered Season,Enter Plant Description, Enter Plant Cultivation tips
   Enter Month to start ,Add Plant-->
  <div>
  <div class="col-sm-3 col-md-8" text-align="center">
  <form id="addPlant" style="visibility:hidden" action="{{ route('gardener.addPlant') }}" method="post">
         
         @csrf
           <div class="form-group">
             <label for="plant_name">গাছের নাম</label>
             <input type="text" name="plant_name"class="form-control" id="plant_name">
           </div>


           <div class="form-group">
             <label for="plant_type">গাছের প্রকার</label>
             <input type="text" name="plant_type" class="form-control" id="plant_type">
           </div>


           <div class="form-group">
             <label for="preferred_season">আদর্শ সময়</label>
        <input type="text" name="preferred_season" class="form-control" id="preferred_season">
           </div>

           <div class="form-group">
             <label for="plant_info">বিস্তারিত বিবরন</label>
        <input type="text" name="plant_info" class="form-control" id="plant_info">
           </div>
         <div class="form-group">
             <label for="cultivation_tips">গাছের ফলন সম্পর্কিত প্রয়জনীয় তথ্য</label>
        <input type="text" name="cultivation_tips" class="form-control" id="cultivation_tips">
           </div>

           <div class="form-group">
             <label for="month_to_start"> ফলন শুরর সময়</label>
        <select type="text" name="month_to_start" class="form-control" id="month_to_start">
                   <option>- মাস -</option>
                   <option value="জানুয়ারী">জানুয়ারী </option>
                   <option value="ফেব্রুয়ারী">ফেব্রুয়ারী </option>
                   <option value="মার্চ">মার্চ </option>
                   <option value="এপ্রিল">এপ্রিল </option>
                   <option value="মে">মে </option>
                   <option value="জুন">জুন </option>
                   <option value="জুলাই">জুলাই </option>
                   <option value="আগস্ট">আগস্ট  </option>
                   <option value="সেপ্টেম্বর">সেপ্টেম্বর </option>
                   <option value="অক্টোবর">অক্টোবর </option>
                   <option value="নভেম্বর">নভেম্বর </option>
                   <option value="ডিসেম্বর ">ডিসেম্বর </option>
           </select>
           </div>
           <div class="form-group">
             <label for="month_to_start"> ফলন তোলার সময়</label>
        <select type="text" name="month_to_start" class="form-control" id="month_to_start">
         <option>- মাস -</option>
                   <option value="জানুয়ারী">জানুয়ারী </option>
                   <option value="ফেব্রুয়ারী">ফেব্রুয়ারী </option>
                   <option value="মার্চ">মার্চ </option>
                   <option value="এপ্রিল">এপ্রিল </option>
                   <option value="মে">মে </option>
                   <option value="জুন">জুন </option>
                   <option value="জুলাই">জুলাই </option>
                   <option value="আগস্ট">আগস্ট  </option>
                   <option value="সেপ্টেম্বর">সেপ্টেম্বর </option>
                   <option value="অক্টোবর">অক্টোবর </option>
                   <option value="নভেম্বর">নভেম্বর </option>
                   <option value="ডিসেম্বর ">ডিসেম্বর </option>
        
        
        </select>
           </div>
           <!-- <div class="checkbox">
             <label><input type="checkbox"> Remember me</label>
           </div> -->
           <button type="submit" class="btn btn-default">Add Plant</button>

</form> 
  <div>
  <div class="col-sm-1 col-md-2">
  <div>
  </div>
  </body>

  <script>
  var element = document.getElementById("addPlant");
  function openAddPlant()
  {
    element.style.visibility = "visible";
  }
  </script>
 </html>