<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

    if(3 > 1){
        echo "I love PHP"."<br>";
    }elseif(3 == 1){
        echo "fsdfd"."<br>";
    }else{
        echo "hghg"."<br>";
    }
    
    for($i=0;$i<10;$i++){
        echo $i."<br>";
    }
    
    $num = 5;
    switch($num){
        case 1:
        echo "Number is 1"."<br>";
        break;
        case 2:
        echo "Number is 2"."<br>";
        break;
        case 3:
        echo "Number is 3"."<br>";
        break;
        case 4:
        echo "Number is 4"."<br>";
        break;
        case 5:
        echo "Number is 5"."<br>";
        break;
        default:
        echo "Not defined"."<br>";
        break;
    }
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>