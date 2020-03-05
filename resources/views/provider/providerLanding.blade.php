


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
        <li class="active"><a href="/landing"> মেইন মেনু <span class="sr-only">(current)</span></a></li>
        <li><a href="/gardener/landing">বাগান সেবী </a> </li>
        
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/landing/signUp">রেজিস্ট্রেশন </a></li>
        <li><a href="/landing/login">লগ ইন </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
  <body>
  <div class="container-fluid">
          <div class="row">
            <div style="visibility:vissible" class="col-md-12">
            <label text-algn="center">বাগানির লিস্ট</label>

                    <div class="row">
                    <?php
                    $count=0;
                    foreach ($provider as $row){
                     
                    ?>                                
                             
                             <div class="col-md-12" text-align='center'>
                                <?php echo "নাম :". $row->first_name." ".$row->last_name; ?> <button onclick="return showDetail(<?php echo $count?>);">বিস্তারিত
                              </div>
                              <div style="display:none" id ="showDetail<?php echo $count?>" class="col-md-12" text-align='center'>
                                <?php echo "ঠিকানা :". $row->address; ?>
                                </br>
                                <?php echo "ফোন নাম্বার :". $row->phone_number;?>
                              </div>
                             
                    <?php
                    echo '</div><div class="row">';
                      $count++;
                  }
                    ?>
                    </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-md-12" text-algn="center">
            <button onclick="return showSignUp();" > আপনি কি নতুন বাগানি ?</label>
            </div> 
          </div>
          <div class="row">
          <div class="col-md-12">
          <form style="display:none" id="showForm" action="{{ route('gardener.providersignUp') }}" method="post">
          @csrf
          <div class="form-group">
              <label for="userName">আপনার নাম </label>
              <input type="text" name="userName" class="form-control" id="userName">
          </div>
          <div class="form-group">
              <label for="phone_number">ফোন নাম্বার</label>
              <label for="error" ><span class="red"><?php echo $error; ?></span></label>
              <input type="text" name="phoneNumber" class="form-control" id="phone_number">
            </div>
            <div class="form-group">
              <label for="pwd">আপনার পছন্দের পিন প্রবেশ করুন</label>
              <input type="password" name="pwd" class="form-control" id="pwd">
            </div>
            
            <div class="form-group">
              <label for="address">ঠিকানা</label>
              <input type="text" name="address" class="form-control" id="address">
            </div>
           
            
            <div class="form-group">
                         <label for="checkIfbroker"> আপনি কি বাগান মালিক ? </label>
                         <select id="checkIfbroker" name="is_broker">
                             <option value="true">হ্যা</option>
                             <option value="false">না</option>
                      </select>
                      </div>
            <button type="submit" class="btn btn-default">সাইন আপ</button>
                         
          </div>
          </div>   
</form>          
</div></div></div>

<script>
var element = document.getElementById("showForm");

 function showSignUp(){

  if (element.style.display === "none") {
    element.style.display = "block";
  } else {
    element.style.display = "none";
  }
}

function showDetail(x){
  var st="showDetail";
var elementName=st.concat(x);

var element1=document.getElementById(elementName);
if (element1.style.display === "none") {
  element1.style.display = "block";
} else {
  element1.style.display = "none";
}
}


</script>

</body>
</html>