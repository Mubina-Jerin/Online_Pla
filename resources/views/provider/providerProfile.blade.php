
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

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
        <li><a href="/gardener/order">বাগান সেবা অর্ডার </a> </li>
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
  <div  text-align="center" class="col-sm-6 col-md-12">
    
    <h1> Welcome {{$user[0]->first_name." ". $user[0]->last_name}}</h1>

    <h2> Your Login ID is {{$loginID}}</h2>

    <div class="row">
  <div text-align="center" class="col-sm-6 col-md-12">

 
  <a onclick="return showDetailForm();" >
  <img src="/images/editThumbo.jpg"> তথ্য পরিবর্তন
   </a>

   <form id="showDetailForm" action="{{route('gardener.editDetails')}}" method="post" style="display:none" >
            <div class="form-group">
              <label for="firstName">first Name</label>
              <input type="text" name="firstName" class="form-control" id="firstName">
            </div>

            <div class="form-group">
              <label for="lastName">last Name</label>
              <input type="text" name="lastName"class="form-control" id="firstName">
            </div>
   
   </form>
  <div>
  </div>


     <div  text-align="center" class="row">
         <button class="btn">নার্সারি সেবা তৈরী</button>
     </div>
   
        <div class="row">
        <div  text-align="center" class="col-md-8">
        <a onclick="return showDetailForm();">
            <img src="/images/addNursery.jpg">  নার্সারির বিস্তারিত তথ্য দিন
           </a>
        <form action="{{ route('nursery.registration') }}" method="POST">
           @csrf
        <div class="form-group">
            <label for="nursery_name">আপনার নার্সারির নাম </label>
                   <input type="text" name="nursery_name"class="form-control" id="nursery_name">
         </div>
 		 <div class="form-group">
            <label for="nursery_name">আপনার নার্সারির বিস্তারিত বিবরন</label>
             <input type="text" name="nursery_desc" class="form-control" id="nursery_desc">
         </div>      	
         
        <button type="submit" class="btn btn-default"> নার্সারি খুলুন</button>
        </form>
        </div>
        </div>
   
  </div>
 
</div>




<script>
var element = document.getElementById("showDetailForm");

 function showDetailForm(){

  if (element.style.display === "none") {
    element.style.display = "block";
  } else {
    element.style.display = "none";
  }
}




</script>

</body>
</html>