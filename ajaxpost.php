<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Conditional Logic</h2>
    </section>
       <section class="content">
	  <hr/>
<div id="par">
  <div id="state"></div>
<form id="myform">
  <table>
    <tr>
      <td>First Name: </td>
      <td><input type="text" id="required"></td>
    </tr>
    <tr>
      <td>Skill: </td>
      <td><input type="text" ></td>
    </tr>
    <tr>
      <td>Email: </td>
      <td><input type="text" ></td>
    </tr>
    <tr>
      <td></td>
      <td><button id="submit">Submit</button></td>
    </tr>
  </table>
</form>
</div>
<script>

 $(document).ready(function(){
  $("#myform").submit(function(){
    // $.post("content.php",{"name":"Rupa","Skill":"Laravel"},function(data){
      $.post("content.php",$("#myform").serialize(),function(data){
      $("#state").html(data);
    });
    return false;
  });
 });

 function clear(){
   $('#myform :input').each(function){
     $(this).val("");
   });
 }

</script>

    </section>
        <?php include 'inc/footer.php';?>
