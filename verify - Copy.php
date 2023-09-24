<?php
	session_start();
      $con=mysqli_connect('localhost','root','','tourism');
      
    if(isset($_POST['submit']))
    {
      
      $firstname=$_POST['fname'];
      $lastname=$_POST['lname'];
      $passw=$_POST['pass'];
      $password=sha1($passw);
      $cpassword=$_POST['cpass'];
      
     $email=$_POST['email'];
      $phone=$_POST['phone'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $city=$_POST['city'];
      $pincode=$_POST['pincode'];
      $state=$_POST['state'];
      $name=$firstname.$lastname;
      $q=" select * from signup where email = '$email' && password='$password' ";

      $jquery="insert into signup(fname,lname,pass,email,phone,address,city,state,pincode) values('$firstname','$lastname','$password','$email','$phone','$address','$city','$state','$pincode')";
      
     
      
      $result = $con->query($jquery);/*
$num_row = mysqli_num_rows();

if( $num_row ==1 )
     {

 header("Location: home.php ");
       }
      else{
            
echo "Already had an account";
    
    
      }
*/
      
    }

	?>