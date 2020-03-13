<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Toggle</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery: fadein(), fadeOut(), fadeTo(), fadetoggle()
<hr>
<button id="fadeIn">FadeIn</button>
<button id="fadeOut">fadeOut</button>
<button id="fadeTo">fadeTo</button>
<button id="fadetoggle">FadeToggle</button>
<div class = "para">
  <h3> We Are Learning jQuery</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
</div>

<script>

     $(document).ready(function(){
       
           $("#fadeIn").click(function(){
                $(".para").fadeIn(1000);
           });

           $("#fadeOut").click(function(){
                $(".para").fadeOut(1000);
           });

           $("#fadeTo").click(function(){
                $(".para").fadeTo('1000',0.4);
           });

           $("#fadetoggle").click(function(){
                $(".para").fadeToggle(100);
           });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
