<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
        .navbar{
         
            background-color: black;
            border-radius: 30px;
            
        }
        .navbar ul{
            overflow: auto;
        }
        .navbar li{
            float:left;
            list-style: none; 
            margin: 13px 20px;
            
        }
        .navbar li a{
            padding: 3px 3px;
            text-decoration: none;
            color: white;
        }
        .navbar li a:hover{
            color: red
        }

        #a1{
        border: 2px solid white;
        margin: 20px 360px;
        padding: 75px;
        width: 33%;
        border-radius: 28px;
    
            background-color: skyblue;
        }

        .h1{
            color: white;
            background-color: black;
            margin: 20px 360px;
        
        border-radius: 21px;

        }



    </style>

</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
    </header>

<h1   class="h1"><pre>           FORM VALIDATION</pre></h1>
    
<form method="POST" autocomplete="off" action=backward.php align='center'>
     <pre id="a1">
First Name:<input type="text" name="firstname"  class="n1" > <br>
 Last Name:<input type="text" name="lastname" class="l1" ><br>
       Age:<input type="number" name="age"  class="a1" ><br>
   Contact:<input type="number" name="contact" class="c1"><br>
    E-mail:<input type="varchar" name="email" class="e1" > <br>
           <input type="submit" class="btn1" ><br>
    </pre>
</form>

</body>
</html>
