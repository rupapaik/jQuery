<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Animation</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery Effects: Chaining
<hr>
<button id="chain">Start Animation</button>


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
           $("#chain").click(function(){
                $(".animate").css("background","green").slideUp(3000).slideDown(3000);
           });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
