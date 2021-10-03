

<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="SMR.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
    background-blend-mode:lighten;
  background-position: center;
  background-size: cover;
  background-image: url("1.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;

}
input[type=text],input[type=password] {
  padding: 2px ;
  margin: 8px 0;
  border-radius: 5px;
  border: 2px solid black;
  font-family: Arial, Helvetica, sans-serif;
  border-top: red;
}
input[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 1px;
  margin: 2px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-family: "Times New Roman", Times, serif;
  font-size: 20px;
}

input[type=submit]:hover {
  background-color: #45a049;
}
#reg{
  font-size: 20px;
}
</style>
</head>
<body>
     <header>
    <nav>
      <ul> 
      <li class="ho"><a href="SMR1.html">HOME</a></li>
     </ul> 
    </nav>
</header>
  <div class="container">
  </div>
   <?php
        include("conn.php");
        //error_reporting(0);
        if(isset($_POST['submit']))
        {
            $uname = $_POST['userid'];
            $pass = $_POST['password'];
            $name=$_POST['name'];
            $query1 = "insert into userpass values('$uname','$pass','$name') "; 
            $data1 = mysqli_query($con,$query1);
            if($data1)
            {
                //echo "<font color='white'><br><br>Registered Successfully. <a href='login.php'><font color='yellow'><br>Click Here to LogIN</a></font>";
                header('location:login.php');
            }
        }
        else
        {
            echo "<h3><font color='black'></font></h3>";
        }
    ?>

    <h1><fieldset class="form-container">
      
      <form action="" method="post">
              <center>
              <label for="userid"> UserID : </label>
              <input type="text" name="userid" placeholder="Your user id here" required value="" /><br> 
              <label for="password"> Password : </label>
              <input type="password" name="password" placeholder="Your password here" value="" required /><br>
              <label for="name"> Name: </label>
              <input type="text" name="name" placeholder="Your name here" value="" required /><br>
              <label for="gender"> Male</label>
              <input type="radio" name="gender" value="" required />
              <label for="gender"> Female</label>
              <input type="radio" name="gender" value="" required /> <br>
              <input type="submit" class="submit btn btn-success" value= "Register" name="submit">

            </center>

      </form>
      
   </fieldset></h1></div>
  
    </div>
</body>
</html>


