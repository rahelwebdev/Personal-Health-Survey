<?php 
session_start();

include 'header.php'; 

include 'data-collector.php';

?>

  <div class="row">
    <div class="col-sm-8" style= "text-align: center; margin:auto;"
>
      <!-- CONTENT -->
      
      <h5><b>QUESTION 3</b></h5>
      <h3>How important is physical activity to you?</h3>

      <form action="resultPage.php" method="post" onsubmit="return validateQuestion('range-slider');">

        <div class="row flex-nowrap">
            <div class="col">
              <p>not at all important</p>
            </div>
            <div class="col" style="text-align: center;">
              <p></p>
            </div>
            <div class="col" style="text-align: right;">
              <p>very important</p>
            </div>
        </div>

        <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
        <input type="hidden" name="lastPageID" value="question3">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">OK</button>
        <p class="spacer"></p>
        <a href="resultpage.php" class="next">See Result </a>

      </form>

      <!-- END OF CONTENT -->
    </div>
  </div>
  
<?php include 'healthy-person-eating-fruit.php'; ?>




<?php include 'footer.php'; ?>