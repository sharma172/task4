<?php   

        
        
        $conn=mysqli_connect('localhost','root','','tourism');
        if($conn-> connect_error){
            echo "connection failed";
        }
        if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];
        $sql=" select email, pass from signup where email='".$_email."'"."AND pass='".$_pass"' ";
        $result=$conn->query($sql);
        if($result-> num_rows > 0){
            if($result["email"]=='$email' && $result["pass"]=='$pass'){
        echo "success";
        header('Location: main.php');
        echo "success";
 }
}
}

        

                    $conn -> close();
        ?>
        
<html>
<head>
<title>
dth services</title>
<style>
body{
background:url(travel.jpg);
background-size:cover;
background-repeat:no-repeat;
margin:0;
padding:0px 0px 0px 1000px;
font-famil:arial;
}
        .container{
    width: 90%;
    margin:auto;
    overflow: hidden;
}
#navbar
{
    background-color: black;
    color:white;
}
#navbar ul{
    padding:0;
    list-style: none;
}
#navbar li
{
    display: inline;
}
#navbar a{
    color:#fff;
    text-decoration: none;
    font-size: 18px;
    padding-right: 15px;
}
.login{
margin:auto;
width:250px;
box-shadow:0px 8px 16px 0px rgba(0,0,0,0.9);
padding:80px 40px;
margin-top:50px;
background:linear-gradient(top,red 0%,black 100%);

}
h2{
margin:0 0 30px 0;
padding:10px;
color:yellow;
text-align:center;
}
input{
width:100%;
margin-bottom:30px;
}
input[type=text], input[type=password]  {
border:none;
outline:none;
border:2px #fff dotted;
background:black;
border-radius:500px;
box-sizing:border-box;
color:#fff;
font-size:16px;
padding:10px;
text-align:center;

}
::placeholder{
color:rgba(255,255,255,0.5);
text-align:center;
}
input[type=submit]{
border:none;
outline:none;
padding:10px ;
color:white;
font-size:16px;
font-family:arial;
background:red;
cursor:pointer;
border-radius:20px;
}
input[type=submit] :hover{
background:#efed40;
color:#262626;
}
.bu{
    text-decoration: none;
    color:black;
    width:20px;
    height:20px;
    background-color: rgb(223,255,0);
}


</style>
</head>
<body>
    <nav id="navbar">

            <div class="container">

            
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            
            </div>
        </nav>

<form action="login.php" method="POST">
<div class ="login">
<h2> log in here </h2>
<input type="text" name="email" placeholder="enter email" required><br>
<input type="password" name="password" placeholder="enter password" required><br>
<input type="" name="login" value="login" href ="http://localhost/web/main.php"><br>
<a class="bu"  href ="http://localhost/web/main.php">submit </a> &nbsp &nbsp &nbsp &nbsp
<a class ="bu" href ="http://localhost/web/signup.php"> sign up </a> &nbsp &nbsp &nbsp &nbsp
       

</div>
</form>
</body>
</html>