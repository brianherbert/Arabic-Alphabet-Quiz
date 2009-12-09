<?php
	header('Content-Type: text/html; charset=utf-8');
	
	$numbers = array(0=>'٠', 1=>'١', 2=>'٢', 3=>'٣', 4=>'٤',
					5=>'٥', 6=>'٦', 7=>'٧', 8=>'٨', 9=>'٩');
	$latin_number = array_rand($numbers, 1);
	$test_number = $numbers[$latin_number];
?>
<html>
<head>
<title>Arabic Number Quiz</title>
</head>
<body>

	<h1>
	<?php
		if($_POST['user_answer'] == $_POST['correct_answer'] && $_POST['correct_answer'] != '') {
			echo 'CORRECT! '.$numbers[$_POST['correct_answer']].' is '.$_POST['correct_answer'].'.';
			//echo 'تصحيح';
		}elseif($_POST['correct_answer'] != ''){
			echo 'INCORRECT. '.$numbers[$_POST['correct_answer']].' is '.$_POST['correct_answer'].'.';
		}else{
			echo 'Quiz yourself (مسابقة نفسك).';
		}
	?>
	</h1>
	
	<h1><?php echo $test_number; ?></h1>
	
	<form method="post" action="#">
	<input type="text" name="user_answer" />
	<input type="hidden" name="correct_answer" value="<?php echo $latin_number; ?>" />
	<input type="submit" value="Submit" />
	</form>
	
</body>
</html>