<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php 
session_start();
    $name = "ExampleName";
       $value = 200;
        $expiration = time() + (60*60*24*7);
       setcookie($name, $value, $expiration);
?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	<?php
	  
    if(isset($_GET)){
       print_r($_GET) . "<br>"; 
    }
        
       
	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>
	


    <a href="9.php?id=10">Click Here</a>
    <br>
    <?php 
        if(isset($_COOKIE["ExampleName"])){
            echo "hello";
        }else {
            echo "no cookie";
        }
    ?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>