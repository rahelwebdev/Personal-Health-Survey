<?php 
session_start();
session_destroy();

include 'header.php'; 
?>

  <div class="row">
    <div class="col-sm-8" style= "text-align: center; margin:auto;"
>
      <!-- CONTENT -->
      <p id="introduction">We care about your health! 
        <br>Fill out this questionnare to see where you are at<br>
         in terms of your personal health. <br>
         We will provide useful information for how you can improve your health.</p>
      
      <h5><b>QUESTION 1</b></h5>
      <h3>How healthy are you physically?</h3>

      <form action="questionPage2.php" method="post" onsubmit="return validateQuestion('range-slider');">
        <p class="instruction">Estimate your health with this range slider.</p>

        <div class="row flex-nowrap">
            <div class="col">
              <p>not very healthy</p>
            </div>
            <div class="col" style="text-align: center;">
              <p>my health is o.k.</p>
            </div>
            <div class="col" style="text-align: right;">
              <p>excellent health</p>
            </div>
        </div>

        <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
        <input type="hidden" name="lastPageID" value="index">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">OK</button>  
        <p class="spacer"></p>
        <a href="questionPage2.php" class="next">Next </a>
      </form>

      <!-- END OF CONTENT -->
    </div>
  </div>
  
<?php include 'healthy-person-eating-fruit.php'; ?>




<?php include 'footer.php'; ?>