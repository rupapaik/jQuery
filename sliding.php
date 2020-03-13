<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Sliding</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery Effects: Sliding
<hr>
<button id="slidedown">Slide Down</button>
<button id="slideup">Slide Up</button>
<button id="slidetoggle">Slide Toggle</button>
<div class = "para">
  <h3> We Are Learning jQuery</h3>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
          It has roots in a piece of classical Latin literature from 45 BC,
          making it over 2000 years old. Richard McClintock,
          a Latin professor at Hampden-Sydney College in Virginia,
          looked up one of the more obscure Latin words, consectetur,
          from a Lorem Ipsum passage, and going through the cites of the
          word in classical literature, discovered the undoubtable source.</p>
</div>

<script>

     $(document).ready(function(){
       
           $("#slidedown").dblclick(function(){
                $(".para").slideDown(3000);
           });

           $("#slideup").mouseenter(function(){
                $(".para").slideUp("fast");
           });

           $("#slidetoggle").click(function(){
                $(".para").slideToggle(1000);
           });

 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
