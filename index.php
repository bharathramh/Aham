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
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Aham</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Team</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Work</a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="images/aham.jpg" alt="boat" style="width:100%;min-height:300px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">More about AHAM</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h2>AHAM</h2>
      <h3>A tool for Indian Ancestary prediction</h3>
    </header>
    <div class="w3-container">
      <h4><p>The word aham (अहम्) in sanskrit means 'I', This tool helps in identifying the ancestary from the Indian population data. This project has been developed with the help of IGV.</p>
      <br>
      <p>The Indian Genome Variation Consortium (IGVC) project, an initiative of the Council for Scientific and Industrial Research (CSIR)—was set up to develop a database of genomic variations in Indian population for predictive marker discovery in complex diseases such as diabetes, asthma, neuropsychiatric, infectious and cardiovascular disorders, response to drugs, etc. (4). The Phase I of the project was conducted to determine the extent of genetic differentiation in India. Toward this genotype data of 405 SNPs from 75 genes and 4.2 Mb contiguous chromosome 22 regions were studied in 55 contrasting populations (4, 5). These populations were identified from 4 major linguistic groups namely, Austro-Asiatic (AA), Tibeto-Burman (TB), Indo-European (IE) and Dravidian(DR) spanning 6 geographical regions of habitat (N, north; NE, north-east; W, west; E, east; S, south; C, central) and different ethnic groups (LP, large population, caste; IP, isolated population, tribes; SP, special population, religious groups). Five genetically distinct clusters were identified and a set of 24 populations that represent these clusters were selected for the Phase II of the project. In the Phase II, 3824 SNPs from 834 candidate gene as well as ∼50 000 (Affy 50 K array) genome wide neutral markers have been genotyped using the illumina, sequenom and affymetrix platforms. This initiative lays the foundation for the integration of global genotype-to-phenotype data (6) with Indian population data and development of a federated database.</p></h4>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5 w3-center" id="contact">
  <h2>Aham - Tool</h2>
  <center><div class="w3-row" style="width:60%; font-size:20px;" >
    <div class="w3-col">
  <form class="w3-container w3-card-4 w3-padding-16 w3-white" name="forms" method="post" action="upload.php" onsubmit="return Validatebodypanelbumper();" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="jobid">Job Identifier</label>
    </div>
    <div class="col-60">
      <input type="text" id="jobid" name="jobid" placeholder="Job ID.." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-60">
      <input type="text" id="email" name="email" placeholder="email.." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">VCF File</label>
    </div>
    <div class="col-60">
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" accept=".vcf" required name="fileToUpload">
        <label class="custom-file-label" for="customFile" ></label>
      </div>
    </div>
  </div>
  <br>
  <input type="submit" value="Upload">
      </form>
    </div>
  </div></center>
</div>
<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/prakrithi.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Prakrithi</h3>
  <p>Tool developer</p>
</div>

<div class="w3-quarter">
  <img src="images/mitali.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Mitali Mukarji</h3>
  <p>Corresponding author</p>
</div>

<div class="w3-quarter">
  <img src="images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Tahseen Abass</h3>
  <p>Tool developer</p>
</div>

<div class="w3-quarter">
  <img src="images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ankit pathak</h3>
  <p>Tool developer</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1 w3-center" id="work">
  <h2>Aham - Tool design & Work</h2>
    <div class="w3-container">
      <br><br>
      <h4><p>The word aham (अहम्) in sanskrit means 'I', This tool helps in identifying the ancestary from the Indian population data. This project has been developed with the help of IGV.</p>
      <br>
      <p>The Indian Genome Variation Consortium (IGVC) project, an initiative of the Council for Scientific and Industrial Research (CSIR)—was set up to develop a database of genomic variations in Indian population for predictive marker discovery in complex diseases such as diabetes, asthma, neuropsychiatric, infectious and cardiovascular disorders, response to drugs, etc. (4). The Phase I of the project was conducted to determine the extent of genetic differentiation in India. Toward this genotype data of 405 SNPs from 75 genes and 4.2 Mb contiguous chromosome 22 regions were studied in 55 contrasting populations (4, 5). These populations were identified from 4 major linguistic groups namely, Austro-Asiatic (AA), Tibeto-Burman (TB), Indo-European (IE) and Dravidian(DR) spanning 6 geographical regions of habitat (N, north; NE, north-east; W, west; E, east; S, south; C, central) and different ethnic groups (LP, large population, caste; IP, isolated population, tribes; SP, special population, religious groups). Five genetically distinct clusters were identified and a set of 24 populations that represent these clusters were selected for the Phase II of the project. In the Phase II, 3824 SNPs from 834 candidate gene as well as ∼50 000 (Affy 50 K array) genome wide neutral markers have been genotyped using the illumina, sequenom and affymetrix platforms. This initiative lays the foundation for the integration of global genotype-to-phenotype data (6) with Indian population data and development of a federated database.</p></h4>
    </div>
</div>




<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>copyrights owned by <a href="http://www.igib.res.in">CSIR-IGIB</a></h4>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
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