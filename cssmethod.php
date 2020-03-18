<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery CSS Method</h2>
    </section>
       <section class="content">
	  <hr/>


<?php
$bg = "background-color";
$bgvalue = "#666";

$clr = "color";
$clrvalue = "#fff";

$pdd = "padding";
$pddvalue = "30px";

$wd = "width";
$wdvalue = "330px";

?>
<button id ="style">Add CSS</button>


<div class = "par">
  <p id ="mc" >We Live in Bangladesh</p>
</div>


<script>

 $(document).ready(function(){
     $("#style").click(function(){
        $("#mc").css({
        "font-size":"20px",//avabeo use kora jay;
        "<?php echo $bg;?>":"<?php echo $bgvalue; ?>",
        "<?php echo $clr;?>":"<?php echo $clrvalue; ?>",
        "<?php echo $pdd;?>":"<?php echo $pddvalue; ?>",
        "<?php echo $wd;?>":"<?php echo $wdvalue; ?>",

        });
    });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
