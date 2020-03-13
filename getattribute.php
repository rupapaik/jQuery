<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Get Attribute</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery Effects: Get Content And Attribute
<hr>

<button id="show">Show Text</button>
<button id="html">Show Html</button>
<button id="value">Show Value</button>

<div class = "par">
  <div>
    Name: <input type = "text" id = "name" value = "live project"/>
  </div>
  <p id = "line">We Live In <strong> Bangladesh </strong></p>
  <p id = "lines">We Love Our Counrty</p>
</div>

<script>

     $(document).ready(function(){
       
           $("#html").click(function(){
                alert("The Text Is:" +$("#line").html());
           });

           $("#show").click(function(){
                alert("The Text Is:" +$("#lines").text());
           });

           $("#value").click(function(){
                alert("The Text Is:" +$("#name").val());
           });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
