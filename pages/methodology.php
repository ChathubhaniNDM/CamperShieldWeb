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
		<h2>Methodology</h2>
	</div>
	
	<div class="container">
	  <div class="row">
	    <div class="col">
	      <img src="../public/methodology.png" class="methodology">
	    </div>
			
	    <div class="col">
	    	<p id="justify-p">The proposed Application consists of 4 main components. They are;</p>
	      	<ol>
	      		<li class="fw-bold">Tent Construction Location selection and Guidance</li>
	      		<li class="fw-bold">Footprint & Sound Recognition for Wildlife Detection</li>
	      		<li class="fw-bold">Mushroom Identification Feature</li>
	      		<li class="fw-bold">Guidance for selecting suitable water source for bathing</li>
	      	</ol>
	      	<p id="justify-p">
			  Our mobile application development focuses on enhancing camping experiences through advanced technology and meticulous data-driven methodologies. We began by collecting comprehensive data on animal footprints, mushrooms, and safety assessments for camping and bathing sites. This involved collaborations with local zoos, extensive fieldwork, and expert consultations to ensure a robust dataset.
	      	</p>
	      	<p id="justify-p">
			  Data preparation was a critical step, involving rigorous preprocessing such as image cleaning, resizing, and normalization for Convolutional Neural Networks (CNNs), and encoding and scaling for safety assessment models. This ensured high-quality input for our machine learning algorithms.
	      	</p>
			  <p id="justify-p">
			  For biological identification tasks, we leveraged TensorFlow to develop CNN models capable of recognizing animal footprints and mushrooms. These models utilize convolutional, pooling, and fully connected layers to extract and classify image features accurately.
	      	</p>
			  <p id="justify-p">
			  In parallel, our safety assessment models used Random Forest algorithms to evaluate camping and bathing site safety. These models analyzed environmental, climatic, and water source data to provide users with informed safety ratings, aiding decision-making during outdoor activities.
	      	</p>
			  <p id="justify-p">
			  The application's user interface was developed using React Native for efficiency and cross-platform compatibility, seamlessly integrating sophisticated backend models with a user-friendly frontend.
	      	</p>
			  <p id="justify-p">
			  In summary, our systematic approach combines advanced technology with meticulous data handling to create a mobile application that enhances safety, convenience, and engagement for campers, empowering them with reliable data-driven insights during their outdoor adventures.
	      	</p>
	    </div>
	  </div>
	</div>

	<?php include '../libries/scripts/scripts.js'; ?>
</body>
</html>