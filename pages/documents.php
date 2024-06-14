
<?php  include '../componenets/navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<?php include '../libries/styles/styles.css' ?>
</head>
<body>
	<div class="container"> 
	      <p class="text-primary fs-5">Downloads</p>
	      <h2>Documents</h2>
	      <p class="fs-5">Please find all documents related to this project below..</p>
	</div>
	<div class="container text-center mt-5">
	  <div class="row">
	    <div class="col">
	    	<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-text">Research Paper</h5>
			  </div>
			  <img class="text-center" src="../public/pdf_icon.jpg" style="width: 100px; height: 100px; display: block;margin-left: auto; margin-right: auto">
			  <ul class="list-group list-group-flush mt-2">
    			<li class="list-group-item"><a href="document_download.php?file=Research_Paper" target="_thapa" style="text-decoration: none">Download PDF Now</a></li>
			</div>
	    </div>
	    <div class="col">
	      	<div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-text">Final Overall Report</h5>
			  </div>
			  <img class="text-center" src="../public/pdf_icon.jpg" style="width: 100px; height: 100px; display: block;margin-left: auto; margin-right: auto">
			  <ul class="list-group list-group-flush mt-2">
    			<li class="list-group-item"><a href="document_download.php?file=Final_overall_report" target="_thapa" style="text-decoration: none">Download PDF Now</a></li>
			</div>
	      </div>
	    <div class="col">
			  <div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-text">Overall Proposal Report</h5>
				  </div>
				  <img class="text-center" src="../public/pdf_icon.jpg" style="width: 100px; height: 100px; display: block;margin-left: auto; margin-right: auto">
			  	  <ul class="list-group list-group-flush mt-2">
    			  <li class="list-group-item"><a href="document_download.php?file=overall_proposal_report" target="_thapa" style="text-decoration: none">Download PDF Now</a></li>
		      </div>
		</div>
	 </div>
	 <div class="row mt-5">
		<div class="col">
			<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-text">Status Document 1-2023-24-077</h5>
				  </div>
				  <img class="text-center" src="../public/pdf_icon.jpg" style="width: 100px; height: 100px; display: block;margin-left: auto; margin-right: auto">
			  	  <ul class="list-group list-group-flush mt-2">
    			  <li class="list-group-item"><a href="document_download.php?file=Status_Document_1-2023-24-077" target="_thapa" style="text-decoration: none">Download PDF Now</a></li>
		     </div>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-text">TMP-023-24-077(TAF)</h5>
				  </div>
				  <img class="text-center" src="../public/pdf_icon.jpg" style="width: 100px; height: 100px; display: block;margin-left: auto; margin-right: auto">
			  	  <ul class="list-group list-group-flush mt-2">
    			  <li class="list-group-item"><a href="document_download.php?file=TMP_023-24-077(TAF)" target="_thapa" style="text-decoration: none">Download PDF Now</a></li>
		    </div>
		</div>
		<div class="col">
		
		</div>
		
	  </div>
	</div>
	<br><br>
	<?php include '../libries/scripts/scripts.js'; ?>
</body>
</html>