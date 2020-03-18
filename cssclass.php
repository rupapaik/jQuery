<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery CSS Class</h2>
    </section>
       <section class="content">
	  <hr/>


<?php
function bg(){
  echo "bg";
}
function text(){
  echo "text";
}
?>
<button id ="style">Add Class</button>
<button id ="rmv">Remove Class</button>
<button id ="toggle">Toggle Class</button>

<div class = "par">
  <!-- <div class = "inside"></div> -->
  <p id="css">We Live in Bangladesh</p>
  <p class="text bg">We Live in Bangladesh</p>
</div>


<script>

 $(document).ready(function(){
     $("#style").click(function(){
        $("#css").addClass("text bg");
       });

       $("#rmv").click(function(){
            $("p").removeClass("<?php bg();?>");
         });

         $("#toggle").click(function(){
              $("p").toggleClass("<?php bg();?>");
           });


 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
