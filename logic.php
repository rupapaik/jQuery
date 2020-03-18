<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Conditional Logic</h2>
    </section>
       <section class="content">
	  <hr/>
<div id="par">
<form id="myform">
  <table>
    <tr>
      <td>First Name: </td>
      <td><input type="text" id="required"></td>
    </tr>
    <tr>
      <td>Last Name: </td>
      <td><input type="text" ></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="text" id="required"></td>
    </tr>
    <tr>
      <td>Website:</td>
      <td><input type="text" ></td>
    </tr>
    <tr>
      <td></td>
      <td><button id="submitbtn">Submit</button></td>
    </tr>
  </table>
  <div id ="stat"></div>
</form>
</div>
<script>

 $(document).ready(function(){
   var isValid = true;
   $("#submitbtn").click(function(e){
      $("input[type='text']#required").each(function){
        if(($(this).val())==''){
          isValid = false;
          $(this).css({
            "border":"1px solid red",
            "background":"black"
          });
        }else{
          $(this).css({
            "border":"",
            "background":""
          });
        }
      });
      if(isValid == false){
        e.preventDefault();
      }else{
        clear();
        document.getelementById("stat").innnerHTML = "Thanks For Submitting......";
        return false;
      }

     };
 });

 function clear(){
   $('#myform :input').each(function){
     $(this).val("");
   });
 }

</script>

    </section>
        <?php include 'inc/footer.php';?>
