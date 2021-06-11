<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html dir="rtl">

<meta http-equiv="Content-Language" content="ar-sa">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<head>
<title>تخصصي الجيد</title>
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
           <h3 style="color:white; font-family:Segoe UI Semibold;"> &nbsp;&nbsp;تخصصي الجيد</h3>
        </ul>

        <ul class="nav navbar-nav navbar-left">
           <li>
            <a href="sendme.php" style="color:white;">
              <span class="glyphicon glyphicon-envelope">راسلني</span>
            </a>
          </li>
          <li>
            <a href="index.php" style="color:white;">
              <span class="glyphicon glyphicon-home">الصفحة الرئيسية</span>
            </a>
          </li>   
          
        </ul>

 </header>
 
 <div class="continer">
  <articale class="row">
   
   <section class="col-lg-9">
     
     <?php 
     $sel_sql="SELECT * FROM posts WHERE id = '$_GET[post_id]' ";
     $run_sql= mysqli_query($conn, $sel_sql);
     while($rows = mysqli_fetch_assoc($run_sql)){
      echo '
        <div class="panel panel-default">
         <div class="panel-body">
           <div class="panel-header">
             <h3 style="font-family:Segoe UI Semibold ; color:#f37a86;">'.$rows['title'].'</h3>
           </div>
              <div class="col-lg-10">
              <p>'.$rows['content'].'</p>
              </div>
              <div class="col-lg-2">
              <img src="'.$rows['image'].'" width="100%">
              </div>
             
         </div>
        </div>
      ';
     }
     ?>

   </section>

   <aside class="col-lg-3">
    
    <div class="list-group">
     <?php 
     $sel_side = "SELECT * FROM posts";
     $run_side = mysqli_query($conn, $sel_side);
      while($rows = mysqli_fetch_assoc($run_side)){
      echo' 
       <a href="post.php?post_id='.$rows['id'].'" class = "list-group-item" >
        
        <div class="col-sm-8">
        <h4 style="font-family:Segoe UI Semibold; color:#f37a86;" class="list-group-item-heading">'.$rows['title'].'</h4>
        <p class="list-group-item-text">'.substr($rows['content'],0,100).'</p>
        </div>
        <div class="col-sm-4">
        <img src="'.$rows['image'].'" width="100%">
        </div>
         <div style="clear:both;"></div>
       </a>

      ';
      }
    ?>
    </div> 
   </aside>

  </articale>
 </div>

   

</body>
</html>
