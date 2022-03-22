<?php 
session_start();

include 'header.php'; 

include 'data-collector.php';
?>

  <div class="row">
    <div class="col-sm-8" style= "text-align: center; margin:auto;"
>
      <!-- CONTENT -->
      
      <h5><b>QUESTION 2</b></h5>
      <h3>Do you take nutritional supplements?</h3>

      <form action="questionPage3.php" method="post" onsubmit="return validateQuestion('range-slider');">
  <p></p>
  <input type="radio" id="supplements" name="nutritional supplements" value="supplements">
  <label for="supplements">YES</label><br>
  <input type="radio" id="supplements" name="nutritional supplements" value="supplements">
  <label for="supplements">NO</label><br>
  <br>
    <input type="hidden" name="lastPageID" value="question2">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">OK</button>
        <p class="spacer"></p>
        <a href="questionPage3.php" class="next">Next </a>

</form>

      <!-- END OF CONTENT -->
    </div>
  </div>
  
<?php include 'healthy-person-eating-fruit.php'; ?>




<?php include 'footer.php'; ?>