<?php include_once('inc/header.php'); ?>
<?php include 'inc/img_slider.php';?>

<div class="slider-range relative">
    <div class="container">
        <main>
          <form >
            <div class="range">
              <input name="range" id="range" type="range" min="0" max="100" value="0" step="10" oninput="output.value = Math.round(range.valueAsNumber)">
              <div class="range-output">
                <output class="output" name="output" for="range">
                </output>
              </div>
            </div>
          </form>
        </main>
    </div>
</div>
<?php include_once('inc/footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<main>

<div class="range range-slider">

  <input class="input-range" name="range" id="range" type="range" min="0" max="100000" value="0" step="10" >
  <span class="range-value">1</span>
</div>
</main>

<script type="text/javascript">
    $(document).ready(function(){

        // $('.input-range').on('input', function() {
        //   $('.range-value').html(this.value);
        //   var test = $('.range-value').html();
        //     console.log(test);

        // });

        var range = $('#range'),
            output = $('.output');

            range.on('input', function() {
                output.value = Math.round(range.valueAsNumber / 1000);
                console.log(output);
            });
    });


</script>


