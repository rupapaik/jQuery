<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Set Attribute</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery Effects: Set Content And Attribute
<hr>

<button id="name">Show Name</button>
<button id="dep">Show department</button>
<button id="skill">Show Skill</button>

<div class = "par">
  <div>
    Name: <input type = "text" id = "getname" value = "Name Will Be Here.."/>
  </div>
  <p id = "line1"><strong> Department </strong></p>
  <p id = "line2">Skill</p>
</div>

<?php

function inputName(){
  echo "Bangladesh.";
}

function department(){
  echo "<b>Biology.</b>";
}

function skill(){
  echo "java,php";
}

?>

<script>

     $(document).ready(function(){

           $("#name").click(function(){
                $("#getname").val("<?php inputName(); ?>");
           });

           $("#dep").click(function(){
                $('#line1').html("<?php department();?>");
           });

           $("#skill").click(function(){
               $('#line2').text("<?php skill();?>");
           });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
