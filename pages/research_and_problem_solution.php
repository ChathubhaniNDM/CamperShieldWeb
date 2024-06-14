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
	  <div class="row">
	    <div class="col">
	      <h2 class="problem">Research Problem & Solution</h2>
		  <br>
	      <h5 class="followingnew">Proposed Problem</h5>
	      <h5 class="mthow">How to enhance camper safety and experience by addressing the main challenges faced during camping activities? </h5>
	      <p class="mt-3" id="justify-p">
		  Camping and outdoor activities are often hindered by various risks and difficulties, which discourage participation and can impact the overall experience. The primary challenges identified include: Wild Animal Attacks: Campers are at risk of encountering dangerous wildlife, which poses a serious threat to their safety. Tent Construction in Specific Environmental Conditions: Building a secure and comfortable tent in diverse and sometimes harsh environmental conditions can be challenging. Identifying Edible and Poisonous Plant Species: Knowing which plants are safe to eat and which are poisonous is crucial for foraging and safety in the wilderness. Finding Suitable Water Sources for Bathing: Ensuring access to clean and safe water sources for bathing is essential for maintaining hygiene and health during camping trips. These issues collectively contribute to a reluctance in engaging in camping activities, reducing the appeal and enjoyment of outdoor adventures.
	  	  </p>
	    </div>
	    <div class="col">
		<h2 class="mtnew">Video</h2>
        <video class="video-container" width="100%" height="auto" controls>
    		<source src="../public/camper-shield.mp4" type="video/mp4">
    		Your browser does not support the video tag.
			</video>
			<p class="description1">Product Demonstration - Solution</p>
	    </div>
	  </div>
	</div>

	<div class="container mt-4">
		<h5 class="followingnew">Proposed Solution</h5>
		<div>
			<p id="justify-p">
			CamperShield is a mobile application designed to tackle the major challenges faced by campers, ensuring a safer and more enjoyable camping experience. The app integrates advanced technologies and trained models to provide comprehensive solutions.
			The app identifies animals by their footprints, enabling campers to be aware of nearby wildlife. This feature uses trained models to analyze footprint images, providing real-time alerts to campers about potential wildlife threats in their vicinity.
			CamperShield assists users in selecting optimal tent construction locations and provides step-by-step guidance for setting up tents. This feature ensures that campers can choose safe and stable sites for their tents, adapting to various environmental conditions.
			With a robust database and image recognition technology, the app helps users identify different mushroom species. Campers can take photos of mushrooms and receive instant feedback on whether they are edible or poisonous, promoting safe foraging practices.
			The app analyzes water sources to determine their suitability for bathing. By evaluating water quality indicators, CamperShield helps campers find clean and safe water sources, ensuring they maintain hygiene and health during their trips.
			CamperShield employs deep learning algorithms and real-time data processing to deliver accurate and reliable information to users. Each function is designed to mitigate risks and enhance the overall camping experience, providing campers with the tools they need to stay safe and enjoy their outdoor adventures. By addressing key challenges with innovative solutions, CamperShield encourages more individuals to engage in camping activities confidently and safel.
			</p>
		</div>
	</div>

	<?php include '../libries/scripts/scripts.js'; ?>
</body>
</html>