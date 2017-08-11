<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  
            $connection = mysqli_connect('localhost:8889', 'vijaya', 'vBtest09', 'php_practice');
            if($connection){
                echo "Success";
            }else {
                die("Connection problem ".mysqli_connect());
            }
            $query = "SELECT * from users";

            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)){
                    print_r($row);
                }
	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>


</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
