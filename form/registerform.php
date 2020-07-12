<?php
$con=mysqli_connect("localhost","root","","sohalmixers");
if(mysqli_connect_errno())
{
    echo "Failed to connect:".mysqli_connect_errno();
}

$fname="";
$lname="";
$em="";
$em2="";
$password="";
$password2="";
$date="";
$error_array=array();
 


if(isset($_POST['register_button'])){
    
    //fname
    $fname=strip_tags($_POST['reg_fname']);
    $fname=str_replace(' ','',$fname);
    $fname=ucfirst(strtolower($fname));
    $_SESSION['reg_fname']=$fname;
    
    //lname
    $lname=strip_tags($_POST['reg_lname']);
    $lname=str_replace(' ','',$lname);
    $lname=ucfirst(strtolower($lname));
    $_SESSION['reg_lname']=$lname;
    
    //email
    $em=strip_tags($_POST['reg_email']);
    $em=str_replace(' ','',$em);
    $em=ucfirst(strtolower($em));
    $_SESSION['reg_email']=$em;
    
    //email2
    $em2=strip_tags($_POST['reg_email2']);
    $em2=str_replace(' ','',$em2);
    $em2=ucfirst(strtolower($em2));
     $_SESSION['reg_email2']=$em2;
    
    //password
    $password=strip_tags($_POST['reg_password']);
    
    //password2
     $password2=strip_tags($_POST['reg_password2']);
    
    //date
    $date=date("Y-m-d");
    
    
    if($em == $em2){
        if(filter_var($em,FILTER_VALIDATE_EMAIL)){
            
            $em=filter_var($em,FILTER_VALIDATE_EMAIL);
            
            //check mail
             $e_check=mysqli_query($dbcon,"SELECT email FROM users WHERE email='$em'");
            
            $num_rows=mysqli_num_rows($e_check);
            
            if($num_rows>0){
                array_push($error_array,"Email already in use<br>");
            }
            
            
        }
        else
        {
            array_push($error_array,"Invalid email format<br>");
        }
    }
    else
    {
         array_push($error_array,"Email dont match<br>");
    }
    
    if(strlen($fname)>25 || strlen($fname)<2){
        array_push($error_array,"Your First Name should be in between 2 and 25 characters<br>");
    }
    
    
    if(strlen($lname)>25 || strlen($lname)<2){
        array_push($error_array,"Your Last Name should be in between 2 and 25 characters<br>");
    }
    
    
    if($password!=$password2){
      array_push($error_array,"Passwords Dont Match<br>");
           }
    else
    {
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$password)){
           array_push($error_array,"Password can be only of numbers and characters<br>");
        }
    }
    if(strlen($password)>30 || strlen($password)<8)
    {
        array_push($error_array,"Password should be between 5 and 30 characters<br>");
    } 
    
    if(empty($error_array)){
        $password=md5($password);
        
        
        $username=strtolower($fname."_".$lname);
        $check_username_query=mysqli_query($dbcon,"SELECT username FROM users WHERE username='$username'");
        $user=$username;
        $i=0;
        //username already existing add number to username
        while(mysqli_num_rows($check_username_query)!=0){
            $i=$i+1;
            $username=$user."_".$i;
            
            $check_username_query=mysqli_query($dbcon,"select username FROM users WHERE username='$username'");
            if(mysqli_num_rows($check_username_query)==0)
            {
                $user=$user."_".$i;
            }
        }
        //pic //random
//       $rand=rand(1,2); 
//        
//       if($rand==1) $profile_pic="assets/images/profile_pics/defaults/head_deep_blue.png";
//        else if($rand==2)
//$profile_pic="files/images/profile_pics/defaults/head_emerald.png";
//        
        $query=mysqli_query($dbcon,"INSERT INTO users VALUES('','$fname','$lname','$user','$em','$password','$date')");
            
        
        
        array_push($error_array,"<span style='color:#14C800;'> Successfull! Login Now</span><br>");
        
        
        $_SESSION['reg_fname']="";
        $_SESSION['reg_lname']="";
        $_SESSION['reg_email']="";
        $_SESSION['reg_email2']="";
    }
    
}
 

?>