<?php include 'inc/header.php';?>
<body>
<div class="maincontent">
    <section class="header">
       <h2>jquery Get Attribute</h2>
    </section>
       <section class="content">
    <hr/>
<hr>
jQuery Effects: XML With AJAX Method
<hr>
<div class = "par">
<ul></ul>
</div>

<script>

     $(document).ready(function(){
       xmlindex();
        });
      function xmlindex(){
        $.ajax({
          url:"index.xml",
          dataType:"xml",
          success:function (data){
            $("ul").children().remove();
            $(data).find("employee").each(function(){
              var alldata = '<li>Name: '+$(this).find("name").text()+'</li>'
              '<li>Skill: '+$(this).find("skill").text()+'</li>'
              '<li>Company: '+$(this).find("company").text()+'</li>';
              $("ul").append(alldata);
            });
          },
          error :function(){
            $("ul").children().remove();
            $("ul").append("<li>There in no error...</li>");
        }
      });
  }

function autoLoad(){
  setTimeout(function(){
    xmlindex();
    autoLoad();
  },1000)
}


</script>

    </section>
        <?php include 'inc/footer.php';?>
