<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Fundamentals</h2>
    </section>
       <section class="content">
	  <hr/>
<p id ="para">Traning With Live Project</p>
<button>Hide</button>

<script>

 $(document).ready(function(){
   $("button").click(function(){
        $("#para").hide();
     });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
