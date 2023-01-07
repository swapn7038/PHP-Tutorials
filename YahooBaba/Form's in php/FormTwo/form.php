<html> 
    <head>
        <title>Form Page </title> 

        <style> 

        form {
            display: flex;
            flex-direction:column;
            justify-content:center;
            height:90vh;
            align-items:center; 
            border:2px solid black;
            width:50%;
            margin:0 auto;
            background: linear-gradient(to top, #ddd, #ccc);
            box-shadow:3px 3px 6px rgba(0,0,0,0.6); 
        }

  
       </style> 
</head>

<body> 
    <form action="./testform.php" method="post">  

    Name : <input type="text" name="fname"> <br> <br> 
    Age : <input type="text" name="age"> <br> <br>
    
    <input type="submit" name="save"> 

</form> 
</body> 

</html> 
