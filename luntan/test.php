<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">            
<html>
  <head>
  <meta http-equiv=Content-Type content="text/html;charset=utf-8">
      <title></title>
      <style type="text/css">
         #top{
             position: absolute;
              top:40%;
              left: 40%;
              z-index: 300;
              width: 20%;
              height: 20%;
              background-color: blue;
         }
         #center{
             position: absolute;
              top:0px;
              z-index: 200;
              width: 200px;
              height: 200px;
              background:#fff; 
              filter: alpha(opacity=70); 
              opacity: 0.7;
              width: 100%;
              height: 100%;
         }
         #bottom{
             position: absolute;
               top:0px;
               z-index: 100;
               width: 100%;
               height: 100%;
               background-color: red;
         }
      </style>
  </head>
  <body>
    <div id= "top"></div>
    <div id= "center"></div>
    <div id= "bottom"></div>
   </body>
</html>
