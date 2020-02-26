<?php
$page_info = ["title" => "Homepage"];
include 'header.php'
?>

<body>
    <div class="container-fluid">
        <?php include 'partials/navbar.php' ?>

        <!-- The world famous Bootstrap "Jumbotron" -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 knockout-text text-uppercase">Fluid jumbotron</h1>
                <p class="lead text-center">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>

        <div class="container-fluid my-max-width-container">
            <div class="row">
                <div class="col img-placeholder ">
                    <p class="knockout-text">Placeholder.</p>
                </div>
                <div class="col callout-text align-middle">
                    <p>Crytocurrency bespoke decentralized. In a smart home. Companies privacy build at activists data. privacy Ultra-private funding apps, strategy startups onecutive computer. In startups developers bot precision anywhere entrepreneurs. Visionary fab bespoke strong in cloud. Despite policies ability bespoke strong deal cryptocurrency. Now forecast security edit. Services circuit company read, at labs smartphone deal direct. Document components offline, security crypto devices funding, Ultra-private on internet.</p>
                </div>
    
            </div>
        <div>

        <div class="container-fluid my-max-width-container">
            <div class="row">

  <?php          
  //Ususally wouldn't do this but im adding it here to demo a loop
  $example = ["Example 1" => "Crytocurrency bespoke decentralized. In a smart home. Now digital designs id anywhere atoms. Now strategy startups documents designs. Venture crypto adopters niche. ", 
              "Example 2" => "Companies privacy build at activists data. Video algorithm system ultra-private policies engineering. Users takedowns. ",
              "Example 3" => " Ultra-private on internet. Ultra-private funding apps, Video algorithm system ultra-private policies engineering. Users takedowns. "];
?>
<?php
foreach ($example as $heading => $text):
?>
            <div class="col triptic-col">
                <div class="img-placeholder ">
                    <p class="knockout-text"><?=$heading?></p>
                </div>
                <div class="triptic-text">
                    <p><?=$text?></p>
                </div>
            </div>

<?php
endforeach;
?>
            </div>
        </div>

    </div>        
</body>
</html>