<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Remove Elements</h2>
    </section>
       <section class="content">
	  <hr/>

<button id ="remove">Remove</button>
<button id ="empty">Empty</button>

<div class = "animate">
  <div class = "inside"></div>
  <p id ="" style ="float:right;color:red;">We Live in Bangladesh</p>
</div>


<script>

 $(document).ready(function(){
     $("#remove").click(function(){
        $(".animate").remove();
       });

       $("#empty").click(function(){
          $("p").empty();
         });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
