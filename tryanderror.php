
<!--HEADER 
https://www.hilton.com/en/hotels/sezitol-mango-house-seychelles/experiences/
-->
<?php include 'header.php';?>

<!---picture of wellness-area include--> 

<!--healthy person in pool include -->
  
  

<!--healthy woman holding fruit include-->
    
<!-- Footer include footer.php-->


  <div class="container-fluid">

  <div class="row">
    <div class="col" class="w-auto">
    <img src="images/woman_stretching_pool.jpg">  
    </div>

    <div class="col-3">
      <h2 style="text-align: center;"><b>WELLNESS</b></h2>
      <h4 style="text-align: center;">the focus is on you</h4>
      <h3 style="text-align: center;"><b>HEALTH SURVEY</b></h3>
      <p id="introduction">We care about your health! 
        <br>Fill out this questionnare to see where you are at<br>
         in terms of your personal health. <br>
         We will provide useful information for how you can improve your health.</p>
   
     <!--followed by range-slider not at all healthy extremely healthy -->
     
      <!-- CONTENT -->      
      <h7>First Question:</h7>
      <h3>How healthy are you physically?</h3>

      <form action="question-2.php" method="post" onsubmit="return validateQuestion('range-slider');">
        <p class="instruction">Schätze deine Gesundheit mit dem Slider ein.</p>
            <div>
              <p>not at all healthy</p>
            </div>
            <div style="text-align: center;">
              <p>my health is o.k.</p>
            </div>
            <div style="text-align: right;">
              <p>excellent health</p>
            </div>
      

        <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
        <input type="hidden" name="lastPageID" value="index">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>

    </div>

    <div class="col" class="w-auto">
    </div>
    <img src="images/healthy_woman.jpg">

  </div>

</div>

  <?php include 'footer.php';?>

</body>
</html>
