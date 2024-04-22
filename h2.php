<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
      $f1 = $_POST["f1"];  
      $f2 = $_POST["f2"]; 
      $f3 = $_POST["f3"]; 
      $f4 = $_POST["f4"]; 
      $f5 = $_POST["f5"]; 
      $c = mysqli_connect("localhost","root","","badboy")  ;
  if(mysqli_connect_error())
         echo "not connect";
  else
        [
    $re = mysqli_query($c,"insert into aboli values ('$f1','$f2','$f3','$f4','$f5')")

        ]
      
      
          
       
     
     
     
     
     ?>
  <p align = "center"> anjam shod </p>
  <a href="home.html">home</a>
</body>
</html>