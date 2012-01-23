<?php

//this will make error messages visible on Edumedia
//It's temporary and should be deleted when you've fixed your errors
/*error_reporting(-1);
ini_set('display_errors', 'on');*/

//var_dump($_POST);

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Money calculator form</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>

<form action="forms.php" method="post">

	<div class ="num1">
        <label for="num1" >Number 1</label>
        <input id="num1" name="num1">
    </div>   
     
     <div class="symbol">
     <label for="symbols">select</label>
    	<select id="symbols" name="symbols">
        	<option value="+">+</option>
        	<option value="-">-</option>
        	<option value="*">x</option>
       		<option value="/">/</option>
   		 </select>  
      </div>    
        
        
    <div class= "num2">
        <label for="num2">Number 2</label>
        <input type="numbers" id="num2" name="num2">
     </div>    
    
    <div class="btn">
    	<button type="submit">Calculate</button>
    </div>
</form>


<?php if (!empty($_POST['num1']) && !empty($_POST['num2'])) : ?>

	<?php
			$num1 = $_POST['num1'];
    		$num2 = $_POST['num2'];
    		 
	?>

    <?php if ($_POST['symbols'] == '+') : ?> 
    		<?php $sum_total = $num1 + $num2; ?>
   			<p>The numbers <?php echo $_POST['num1']; ?> + <? echo $_POST['num2'];?> = <?php print ($sum_total); ?></p>
    <?php print number_format ($sum_total * 0.13); ?> 
    
	<?php elseif ($_POST['symbols'] == '-') : ?>
    		<?php $sum_total = $num1 - $num2; ?>
    		<p>The numbers <?php echo $_POST['num1']; ?> - <? echo $_POST['num2'];?> = <?php print ($sum_total); ?></p>
	<?php print number_format ($sum_total * 0.13); ?> 
    
    <?php elseif ($_POST['symbols'] == 'x') : ?>
   			 <?php $sum_total = $num1 * $num2; ?>
    		<p>The numbers <?php echo $_POST['num1']; ?> * <? echo $_POST['num2'];?> = <?php print ($sum_total); ?></p>
	<?php print number_format ($sum_total * 0.13); ?> 
    
    <?php elseif ($_POST['symbols'] == '/') : ?>
   		 <?php $sum_total = $num1 / $num2; ?>
   		 <p>The numbers <?php echo $_POST['num1']; ?> / <? echo $_POST['num2'];?> = <?php print ($sum_total); ?></p>
	<?php print number_format ($sum_total * 0.13); ?> 
  
    <?php else : ?>
        
<?php endif; ?>
 
<?php endif; ?>
    
    


</body>
</html>