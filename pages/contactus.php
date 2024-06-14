<?php include '../componenets/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet Our Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php include '../libries/styles/styles.css' ?>
</head>
<body>
<div class="container contactus">
        <div class="row">
            <div class="col-lg-6">
                <h2>Contact Us</h2>
                <p class="fs-5">Please fill out the form below to get in touch with us.</p>
                
                <form action="action_page.php">
                    <div class="mb-3">
                        <label for="fname" class="form-label">Name</label>
                        <input type="text" id="fname" name="firstname" class="form-control" placeholder="Your name..">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <textarea id="subject" name="subject" class="form-control" placeholder="Write something.." style="height: 200px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="contact-details">
                  <br><br><br><br>
                    <h2>Contact Details</h2>
                    <p>For further queries, please reach us at <a href="mailto:researchcoco@gmail.com">campershield@gmail.com</a></p>
                    <p>Hope this project helped you. Thank you!</p>
                    <p class="team-signature">Camper Shield Team</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <?php include '../libries/scripts/scripts.js'; ?>
</body>
</html>
