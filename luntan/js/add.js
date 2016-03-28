function show(){
	document.getElementById('top').style.display = "block";
    document.getElementById('center').style.display = "block";
}

function show_login(){
	document.getElementById('top_login').style.display = "block";
    document.getElementById('center').style.display = "block";
}

function hide(){
	document.getElementById('top').style.display = "none";
    document.getElementById('center').style.display = "none";
    document.getElementById('top_login').style.display = "none";
    
//    window.location.href="test.php";
    
}
$(function(){
    //按钮单击时执行
    $("#login").click(function(){
          
          //Ajax调用处理
//        $.ajax({
//           type: "POST",
//           url: "ajax_.php",
//           data: "name=garfield&age=18",
//           success: function(data){
//                    $("#myDiv").html('<h2>'+data+'</h2>');
//              }
//        });
//    	alert("asdfasf");
     });
});

//----
function new_login(){
	alert('请登录');
	show_login();
}