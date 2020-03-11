<?php 
$page_info = ["title" => "contact"];
include 'header.php';

$clean_name = "";
$clean_message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
}

 ?>
<body class="<?=$page_info["title"]?>-page">
    <div class="container-fluid">
    <?php include 'partials/navbar.php' ?>

    <div class="subpage-content-container">
    <h1 class="knockout-text">Contact Us</h1>
    <div class="contact-form">
        <form method="post" action="" id="contact-form">
            <label for="name" >Name:</label>
            <input type="text" name="name">
            <label for="phone" >Phone:</label>
            <input type="phone" name="phone">
            <label for="email" >Email:</label>
            <input type="email" name="email">
            <label for="message" >Message:</label>
            <textarea name="message" id="message" cols="30" rows="10">Whats your message?</textarea>
            <input type="submit" value="Submit" id="submit  ">
        </form>
        </div>

    </div>


    </div>
    <?php include 'footer.php' ?>
</body>