<!DOCTYPE html>
<html>
<title>Aham-Indian Ancestry prediction tool</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://www.parsecdn.com/js/parse-1.2.2.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
  * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #000000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #000000;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-60 {
  float: left;
  width: 70%;
  margin-top: 6px;
}


  </style>
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="./index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Aham</a>
  <a href="./index.php#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
  <a href="./index.php#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
  <a href="./index.php#team" class="w3-bar-item w3-button">Team</a>
  <a href="./index.php#work" class="w3-bar-item w3-button">Work</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">

</div>


<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5 w3-center" id="contact">
  <font color="red"><h2>Thankyou for submitting!!! </h2></font>
  <center><div class="w3-row" style="width:60%; font-size:20px;" >
    <div class="w3-col">
<?php
    $target_dir = "uploads";
    $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
    $fileTmpPath = $_FILES['fileToUpload']['tmp_name'];
    $jobid=$_POST['jobid'];
    $email=$_POST['email'];
    $name = basename($jobid,".vcf")or die();
    $name_id=(rand(100000,999999));
    if(!is_dir("uploads/$name_id")){
      mkdir("uploads/$name_id", 0777, true)or die();
    }
    $filename=$name.".vcf";
    echo "<br><br><br><h4>The file has been saved under job_id <font color=red>".$jobid.".</font> Please stay with this page, the link will be created once the program has been finished. And the result will be mailed to <font color=red>".$email."</font>.</h4>";
    move_uploaded_file($tmp_name, "$target_dir/$name_id/$filename")or die();
?>
    </div>
  </div></center>
</div>




<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>copyrights owned by <a href="http://www.igib.res.in">CSIR-IGIB</a></h4>

  <div style="bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script>

function Validatebodypanelbumper()
{
   var regexp;
   var extension =     forms.filename.value.substr(forms.filename.value.lastIndexOf('.'));
   if ((extension.toLowerCase() != ".vcf") && (extension != ""))
   {
      alert("The \"FileUpload\" field contains an unapproved filename.");
      forms.filename.focus();
      return false;
   }
   return true;
}

// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>