<?php 
$page_info = ["title" => "thankyou"];
include 'header.php';
 ?>
<body class="<?=$page_info["title"]?>-page">
    <div class="container-fluid">
        <?php include 'partials/navbar.php' ?>

        <div class="subpage-content-container">
            <h1 class="knockout-text">Thanks!</h1>
            <div class="about-p-container thanks border-bottom rounded">
            <p >
            
                <?php 
                if(count($_POST) == 0 || $_POST["name"] == ""){
                    header("location:contact.php");
                }else if(isset($_POST["name"]) && isset($_POST["email"])){
                  echo 'Thanks for getting in touch with us ' . $_POST["name"] . ". Someone from our team will contact you at " . $_POST["email"] . " shortly. (Not Realy, this is a demo)"; 
                }    
                ?>
                
            </p>
            </div>
        
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>