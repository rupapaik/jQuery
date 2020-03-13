<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Get Attribute</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery Effects: Set And Get Attribute
<hr>

<button id="show">Change Value</button>

<div class = "par">
  <p><a href="http://www.facebook.com" id="live" title="Facebook">Facebook.com</a></p>
</div>

<script>

     $(document).ready(function(){

           $("#show").click(function(){
                // $("#live").attr("href","http://www.twitter.com"); });
                $("#live").attr({
                  "href"  : "http://www.twitter.com/",
                  "title" : "Twitter",

                });
            });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
