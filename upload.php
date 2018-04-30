<h2>Codenair.com-Upload and Save image Using PHP MySQL</h2>
<form method="POST" action="" enctype="multipart/form-data">
<input type="file" name="image"/>
<input type="submit" name="submit" value="Upload"/>
</form>
<?php
//
include("connect.php");
if(isset($_POST['submit'])){
 //Targeting Folder
 $target="files/";
 $target=$target.basename($_FILES['image']['name']);
 //Getting Selected image Type
 $type=pathinfo($target,PATHINFO_EXTENSION);
 //Allow Certain File Format To Upload
 if($type!='jpg' && $type!='jpeg' && $type!='png' && $type!='gif'){
  echo "Only JPG,JPEG,PNG and GIF file format are allowed to Upload";
 }else{
  //checking for Exsisting image Files
  if(file_exists($target)){
   echo "File Already Exist";
  }else{

   //Moving The image file to Desired Directory
  $uplaod_success=move_uploaded_file($_FILES['image']['tmp_name'],$target);
  if($uplaod_success==TRUE){
   //Getting Selected image Information
   $name=$_FILES['image']['name'];
      $size=$_FILES['image']['size'];
   $sql="INSERT INTO image (name,size,type)VALUES('$name','$size','$type')";
   $result=mysql_query($sql);
   if($result==TRUE){
    echo "Your image '$name' Successfully Upload and Information Saved Our Database ||<a href=index.php>View Uploaded Images</a>";
   }
  }
  }


 }

}
?>
