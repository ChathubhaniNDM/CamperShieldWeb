<?php  include '../componenets/navbar.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Presentations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../libries/styles/styles.css">
</head>
<body>
    <div class="container"> 
        <h2>Presentations</h2>
        <p class="fs-5">Please find all presentations related to this project below.</p>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-text">Project Proposal</h5>
                    </div>
                    <img class="text-center" src="../public/pp_icon.png" style="width:100px; height:150px; display:block;margin-left:auto; margin-right:auto">
                    <ul class="list-group list-group-flush mt-2">
                        <li class="list-group-item"><a href="document_download.php?file=TMP-2023-24-077" target="_thapa" style="text-decoration: none">Download Powerpoint Document</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-text">Progress Presentation I</h5>
                    </div>
                    <img class="text-center" src="../public/pp_icon.png" style="width:100px; height:150px; display:block;margin-left:auto; margin-right:auto">
                    <ul class="list-group list-group-flush mt-2">
                        <li class="list-group-item"><a href="document_download.php?file=PP1_077" target="_thapa" style="text-decoration: none">Download Powerpoint Document</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-text">Progress Presentation II</h5>
                    </div>
                    <img class="text-center" src="../public/pp_icon.png" style="width:100px; height:150px; display:block;margin-left:auto; margin-right:auto">
                    <ul class="list-group list-group-flush mt-2">
                        <li class="list-group-item"><a href="document_download.php?file=PP2_new" target="_thapa" style="text-decoration: none">Download Powerpoint Document</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-text">Final Presentation</h5>
                </div>
                <img class="text-center" src="../public/pp_icon.png" style="width:100px; height:150px; display:block;margin-left:auto; margin-right:auto">
                <ul class="list-group list-group-flush mt-2">
                    <li class="list-group-item"><a href="document_download.php?file=Final_Presentation" target="_thapa" style="text-decoration: none">Download Powerpoint Document</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>
    <?php include '../libries/scripts/scripts.js'; ?>
</body>
</html>
