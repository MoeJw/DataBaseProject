<!DOCTYPE HTML>
<html>
<head>
	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Baby Zone </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style >
	body{
		background: #f5f5f5;
	}
	.page{
    margin-left:400px; 
     box-shadow: 5px 10px 8px 20px rgba(0,0,0,0.2);    
    z-index: 2;
    background-color:#ffff;
   	margin-top:150px; 
    height: 400px;
    width: 600px;

}
.space{
	margin-left:200px;  
    

		
} 
.space1{
	margin-left:250px;  
}
.box{
	margin-top:30px; 
}
.space2{

}
.form-control1{
    
    height: calc(2.25rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

	</style>
</head>
<body>
    <?php

function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$db = "login";


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


return $conn;
}

$conn=OpenCon();


    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        
        $result=$conn->query("select username  from test where username='".$_POST['username']."'"."and password='".$_POST['password']."';");
 

    if($result->num_rows>=1){
          echo "<script>alert('your data is right')</script>";
          header('Location: '."employeesAcounts.html");
    }else{
        echo "<script>alert('erorr')</script>";
    }
        if (empty($_POST["username"])) {
          $nameErr = "Name is required";
        } else {
          //$name = test_input($_POST["name"]);


        }

        if (empty($_POST["password"])) {
            $nameErr = "Name is required";
          } else {
            //$name = test_input($_POST["password"]);
          }
      
        
      
       
      }
    
    
?>
<div class="page">
	<div class="space1"><img > </div>
	 <div class="box">
         <form   method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	 	<div class="form-group row" >
            <div class="space" class="col-xs-2">
                <label for="ex1" style="margin-right:250px;"> ID  </label>
                <input class="form-control1" id="ex1" type="text" name="username" value="dsd">
                <span style="color:red" > <?php echo "wrong username"?> </span>
            </div>

           	
            
            </div>      
            <div class="form-group row" >
            	<div  class="space" class="col-xs-2" >
                <label for="ex1" style="margin-right:250px;"> password </label>
               
                <input class="form-control1" id="ex1" type="text" name="password" value="1213"> 

                <span style="color:red" > <?php echo "wrong password"?> </span>
                </div>
            

            </div>  
            <div class="form-group row" >
            	
			       <div class="space1">
			      
                   <input class="btn btn-primary" href="expensess.html" style="float:right ;margin-right:300px;" type="submit" value="تسجيل الدخول">
                
                </div>
            </div>
             <div class="form-group row" >
             	<div class="space1">
             		<a href="one.html">هل نسيت كلمة السر؟ </a>
             	</div>
             </div>
          </form>
      </div>

	 </div>

</div>	

</body>
</html>