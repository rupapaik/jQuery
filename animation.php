<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Animation</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery Effects: Animation
<hr>
<button id="animation">Start Animation</button>
<button id="stop">Stop Animation</button>

<div class = "animate">
  <div class = "inside"></div>
</div>

<?php
function test(){
  echo "Callback Started.";
}
?>

<script>

     $(document).ready(function(){
           $("#animation").click(function(){
                $(".inside").animate({
                   left:'500px',
                   opacity:'0.5',
                   height:'200px',
                   width:'200px',
                },5000,function(){
                  alert("<?php echo test();?>");
              });
           });
           $("#stop").click(function(){
           $(".inside").stop();
         });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
