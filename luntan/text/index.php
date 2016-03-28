<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="jq.js"></script>
<script type="text/javascript">
    $(function(){
        //按钮单击时执行
        $("#testAjax").click(function(){
              
              //Ajax调用处理
            $.ajax({
               type: "POST",
               url: "ajax_.php",
               data: "name=garfield&age=18",
               success: function(data){
                        $("#myDiv").html('<h2>'+data+'</h2>');
                  }
            });
            
         });
    });
</script>    
</head>
    <body>
        <div id="myDiv"><h2>通过 AJAX 改变文本</h2></div>
        <button id="testAjax" type="button">Ajax改变内容</button>
    </body>
</html>