<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Add Elements</h2>
    </section>
       <section class="content">
	  <hr/>
<?php
function add(){
  echo "Live Project";
}
function before(){
  echo "Traning";
}
function after(){
  echo "Project";
}

?>
<!-- <button id ="add">Append</button> -->
<button id ="before">Add Before</button>
<button id ="after">Add After</button>
<div id ="par">
  <p><span style="color:red"> With Live </span></p>
</div>
<script>

 $(document).ready(function(){
   $("#add").click(function(){
        //$("p").append("<?php add();?>");//Added Front
          $("p").prepend("<?php add();?>");//Added Back
          $("p").prepend("<?php add();?>");//Added Back
     });

     $("#before").click(function(){
        $("p").before("<?php before();?>");
       });

       $("#after").click(function(){
          $("p").after("<?php after();?>");
         });
 });

</script>

    </section>
        <?php include 'inc/footer.php';?>
