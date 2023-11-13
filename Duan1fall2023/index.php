<?php
include("header.php");
?>



<section style="min-height:450px;">

<div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselId" data-slide-to="0" class="active"></li>
        <li data-target="#carouselId" data-slide-to="1"></li>
        <li data-target="#carouselId" data-slide-to="2"></li>
        <li data-target="#carouselId" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="img/banner1.jpeg" alt="First slide" style="width:100%;height:450px;" >
        </div>
        <div class="carousel-item">
            <img src="img/banner2.jpg" alt="Second slide" style="width:100%;height:450px;">
        </div>
        <div class="carousel-item">
            <img src="img/banner3.jpeg" alt="Third slide" style="width:100%;height:450px;">
        </div>
        <div class="carousel-item">
            <img src="img/banner4.jpg" alt="Forth slide" style="width:100%;height:450px;">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



</section>



<?php
include("footer.php");
?>