<?php 
    include 'includes/db.php';
    require_once "form.php";
?>
<?php 
	session_start();
    $error = "";
    $fullname=$address=$email=$password="";
    $nameErr=$mailErr=$addErr=$passErr=$confPassErr="";
    
    if(isset($_POST['register'])){

        //validate mail such that same mail can not enter more than one time

        if(empty(trim($_POST['email']))){
            //trimming whitespace from the mail feild
            $mailErr = "Please enter an email";
        }
        else{
            //query to check the existence of same email address
            $sql = "SELECT client_id FROM client WHERE email= ?";

            if($stmt = mysqli_prepare($db,$sql)){
                mysql_stmt_bind_param($stmt,"s",$param_mail);
                $param_mail=$_POST['email'];

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt)>=1){
                        $mailErr = "You have already an account with this mail address";
                    }
                    else{
                        $email = trim($_POST['email']);
                    }
                }
                else{
                    echo "Ooof! Something went wrong!";
                }
                 mysqli_stmt_close($stmt);
            }
        }
        //validate password

        if(empty(trim($_POST['password']))){
            $passErr = "Please enter valid password";
        }
        else{
            $uppercase = 
        }

    	$fullname = $_POST['fullname']);
		$address = ($_POST['address']);
        $email   = ($_POST['email']);
        $password =($_POST['password']);
        $confPassword = ($_POST['confpassword']) ;
        try{
        if($password != $confPassword){
            //$error = '<p> Password does not match! Please try again! </p>';
            throw new Exception("Password does not match",234);
        }
        else{
            $hassedpass = md5($password);

            $query = "INSERT INTO client (fullname, address, email, password) VALUES ('$fullname','$address','$email','$hassedpass')";

            $register = mysqli_query($db,$query);

            if(!$register){
                die("Query Failed!".mysqli_error($db));
              }
              
              else{
                header("location:welcome.php");
              }
        }

   		 }
        catch(Exception $e){
        	echo $e->getMessage();
        }
         exit();    
    }
     
?>