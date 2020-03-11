<?php 
$page_info = ["title" => "about"];
include 'header.php';
 ?>
<body class="<?=$page_info["title"]?>-page">
    <div class="container-fluid">
        <?php include 'partials/navbar.php' ?>

        <div class="subpage-content-container">
            <h1 class="knockout-text">About Us</h1>
            <div class="about-p-container border-bottom rounded">
            <p > <span> This project was created from scratch to demo some PHP and Bootstrap as it seems to be in alot of  
            "Nice to have" sections. I'm just demo-ing some of the standard bootstrap stuff and some PHP for pulling 
            together a site with a few templates, partials etc. I've done a few things here I wouldn't recomend such 
            as adding an unnessisary loop for the homepage and not expanded / abstracted as much as I might have if this wasn't a <em>very basic</em> demo.</span>
            </p>
            </div>
        
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>



