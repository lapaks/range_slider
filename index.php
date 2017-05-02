<?php include_once('inc/header.php'); ?>
<?php include 'inc/img_slider.php';?>
<div class="slider-range relative">
    <div class="container">
        <main>
          <form oninput="output.value = Math.round(range.valueAsNumber / 1000)">
            <div class="range">
              <input id="range" name="range" type="range" min="0" max="100000" step="10" data-rangeslider="" onchange="updateTextInput(this.value);" onchange="updateTextInput(this.value);">
              <div class="range-output">
                <output class="output" name="output" for="range">
                  0
                </output>
              </div>
            </div>
          </form>
        </main>
    </div>
</div>
<?php include_once('inc/footer.php'); ?