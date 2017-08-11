
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            echo $username;
        }
/*  Step1: Make a form that submits one value to POST super global


 */

	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="6.php" method="post">
        <input type="text" name="username" placeholder="Enter username">
        <input type="submit" name="submit">
    </form>
</body>
</html>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>