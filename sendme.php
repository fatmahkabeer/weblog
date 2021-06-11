<?php include 'includes/db.php'; 
 
 if(isset($_POST['sendme'])){

 		$ins_sql = "INSERT INTO sendme(name,email,title, content) VALUES('$_POST[name]','$_POST[email]','$_POST[title]', '$_POST[content]')";
 		mysqli_query($conn, $ins_sql);
 }

?>
<!DOCTYPE html>
<html dir="rtl">

<meta http-equiv="Content-Language" content="ar-sa">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<head>
<title>Send Me a Message </title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

<style type="text/css">
  .btn-color {
    background-color:#f37a86;   
}
</style>

</head>

<body style="background-color:#333333">\\\\\

<header class="navbar navbar-inverse navbar-static-top" >

        <ul class="nav navbar-nav navbar-right">
           <h4 style="color:white; font-family:Segoe UI Semibold;"> &nbsp;&nbsp;تخصصي الجيد</h4>
        </ul>

        <ul class="nav navbar-nav navbar-left">
          
          <li>
            <a href="index.php" style="color:white;">
              <span class="glyphicon glyphicon-home">الصفحة الرئيسية</span>
            </a>
          </li>   
          
        </ul>

 </header>

 <div class="container">
   <articale class="row">
   

         <form class="form-horizontal" action="sendme.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label ><h5 style="font-family:Segoe UI Semibold ; color:#f37a86;" >الاسم:</h5></label>
              <input type="text" class="form-control" name="name" placeholder="الاسم ">
           </div>
           <div class="form-group">
              <label for="title" ><h5 style="font-family:Segoe UI Semibold ; color:#f37a86;" >الايميل:</h5></label>
              <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" id="email" >
           </div>
           <div class="form-group">
              <label for="title" ><h5 style="font-family:Segoe UI Semibold ; color:#f37a86;" >الموضوع:</h5></label>
              <input type="text" class="form-control" name="title" placeholder="موضوع الرسالة " id="title">
           </div>
           <div class="form-group">
              <label for="cont" ><h5 style="font-family:Segoe UI Semibold ; color:#f37a86;" >الرسالة:</h5> </label>
              <textarea id="cont" class="form-control" name="content"></textarea>   
           </div>
           <div class="form-group">
              <input type="submit" class="btn btn-block btn-color" name="sendme" value="ارسال">   
           </div>
         </form>
      
   </articale>
 </div>
</body>
</html>