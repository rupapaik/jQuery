<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Dimention</h2>
    </section>
       <section class="content">
	  <hr/>


<button id ="select">Display</button>
<div class = "parr">
  <div id ="state"></div>
  <p class ="dimen" >We Live in Bangladesh</p>
</div>


<script>

 $(document).ready(function(){
     $("#select").click(function(){
       var val = "";
       val +="Width is: "+$(".dimen").width()+"<br/>";
       val +="Height is: "+$(".dimen").height()+"<br/>";
       val +="Inner Width is: "+$(".dimen").innerWidth()+"<br/>";
       val +="Inner Height is: "+$(".dimen").innerHeight()+"<br/>";
       val +="Outer Width is: "+$(".dimen").outerWidth(true)+"<br/>";
       val +="Outer Height is: "+$(".dimen").outerHeight(true)+"<br/>";
       $("#state").html(val);
    });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
