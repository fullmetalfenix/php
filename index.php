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
                <div class="col-md-6 ">
                    <div class="img-placeholder ">
                    <p class="knockout-text">Placeholder.</p>
                    </div>
                </div>
                <div class="col-md-6  align-middle">
                    <div class="callout-text">
                    <p>Crytocurrency bespoke decentralized. In a smart home. Companies privacy build at activists data. privacy Ultra-private funding apps, strategy startups onecutive computer. In startups developers bot precision anywhere entrepreneurs. Visionary fab bespoke strong in cloud. Despite policies ability bespoke strong deal cryptocurrency. Now forecast security edit. Services circuit company read, at labs smartphone deal direct. Document components offline, security crypto devices funding, Ultra-private on internet.</p>
                </div>
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
            <div class="col-md-4">
            <div  class="triptic-col">
                <div class="img-placeholder ">
                    <p class="knockout-text"><?=$heading?></p>
                </div>
                <div class="triptic-text">
                    <p><?=$text?></p>
                </div>
            </div>
            </div>

<?php
endforeach;
?>
            </div>
        </div>


<div class="container-fluid my-max-width-container">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <p class="d-block w-100 knockout-text" >Slide #1.</p>
    </div>
    <div class="carousel-item">
    <p class="d-block w-100 knockout-text" >Slide #2.</p>
    </div>
    <div class="carousel-item">
    <p class="d-block w-100 knockout-text" >Slide #3.</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>

    </div>      
</div>
    <?php include 'footer.php' ?>

</body>
</html>