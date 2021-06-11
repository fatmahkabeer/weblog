<?php include 'includes/db.php'; 
 $error = '';
 if(isset($_POST['submit'])){
  $title = strip_tags($_POST['title']);
  $date = date('Y-m-d h:i:s');
  if($_FILES['image']['name'] != ''){
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_path = 'includes/images/'.$image_name;
    $image_db_path = 'includes/images/'.$image_name;

    if($image_size < 1000000){
      if($image_ext == 'jpg' || $image_ext == 'png' || $image_ext == 'gif' ){
        if(move_uploaded_file($image_tmp, $image_path)){
          $ins_sql = "INSERT INTO posts(title, content, image, date) VALUES('$title', '$_POST[content]','$image_db_path','$date')";
          if(mysqli_query($conn, $ins_sql)){
            header('form.php');
            $error = '<div class="alert alert-info">The Data Have Been Inserted! </div>';
          }else{
            $error = '<div class="alert alert-danger">The Query Was Not Working! </div>';
          } 
        }else{
          $error = '<div class="alert alert-danger"> Sorry. Unfortunately Image Has Not Been Uploaded! </div>';
        }
      }else{
        $error = '<div class="alert alert-danger"> Image Format Was Not Correct! </div>';
      }
    }else{
      $error = '<div class="alert alert-danger">Image File Size Is Much Bigger Than Expect! </div>';
    }
  }else{
    $ins_sql = "INSERT INTO posts(title,content,date) VALUES('$title','$_POST[content]','$date')";
    if(mysqli_query($conn, $ins_sql)){
      header('form.php');
      $error = '<div class="alert alert-info">The Data Have Been Inserted! </div>';
    }else{
      $error = '<div class="alert alert-danger"> The Query Was Not Working! </div>';
    }
  }
 }

?>
<!DOCTYPE html>
<html dir="rtl">

<head>
<title>تخصصي الجيد</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
</head>

<body>

 <div class="container">
 <?php echo $error; ?>
   <articale class="row">
      
         <form class="form-horizontal" action="fatmaform.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
              <label for="image">تحميل الصوره</label>
              <input type="file" class="btn btn-info" id="image" name="image"> 
           </div>
           <div class="form-group">
              <label for="title" >الموضوع</label>
              <input type="text" class="form-control" name="title" placeholder="Insert the title" id="title">
           </div>
           <div class="form-group">
              <label for="cont" >المحتوى</label>
              <textarea id="cont" name="content"></textarea>   
           </div>
           <div class="form-group">
              <input type="submit" class="btn btn-block" name="submit" value="submit post">   
           </div>
         </form>
________________________________________________________________________________________________________________________________________
 <h3>الرسائل </h3>     
<table class="table table_striped" >

 <thead>
 <th>الرقم</th>
 <th>الاسم</th>
 <th>الايميل</th>
 <th>العنوان</th>
 <th>الرساله</th>
</thead>

<tbody>
<?php
$sql="SELECT * FROM sendme";
$run_sql=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($run_sql)){
echo'
<tr>

<td>'.$rows['id'].'</td>
<td>'.$rows['name'].'</td>
<td>'.$rows['email'].'</td>
<td>'.$rows['title'].'</td>
<td>'.$rows['content'].'</td>

</tr>
';
}

?>
</tbody>

</table>
      
   </articale>
 </div>
</body>
</html>