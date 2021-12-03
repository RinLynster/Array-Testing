<!DOCTYPE html>
<html>
<head>
	<title>Lakuemas PHP Logic Test</title>
</head>
<body>
	<?php
		/*
		Samuel Andrew
		PHP Native
		Lakuemas PHP Logic Test
		*/
		//No. 1
		//XO("ooxx") => true
		if(substr_count("xxoo","x") == substr_count("xxoo", "o")){
			echo "true"."<br>";
		}else{
			echo "false"."<br>";
		}
		//XO("xooxx") => false
		if(substr_count("xooxx","x") == substr_count("xooxx", "o")){
			echo "true"."<br>";
		}else{
			echo "false"."<br>";
		}
		//XO("ooxXm") => true
		if((substr_count("ooxXm","x") + (substr_count("ooxXm", "X"))) == substr_count("ooxXm", "o")){
			echo "true"."<br>";
		}else{
			echo "false"."<br>";
		}
		//XO("zpzpzpp") => true (if there is no x an o return to true)
		if((substr_count("zpzpzpp","x")) + (substr_count("zpzpzpp", "o")) == 0){
			echo "true"."<br>";
		}else{
			echo "false"."<br>";
		}
		//XO("zzoo") => false
		if(substr_count("zzoo","x") == substr_count("zzoo", "o")){
			echo "true"."<br>";
		}else{
			echo "false"."<br>";
		}

		//No. 2
		//"din" => "((("
		$str = "din";
		if((substr_count($str, "d") == 1) && (substr_count($str, "i") == 1) && (substr_count($str, "n") == 1)){
			$replacestr = str_replace('din', '(((', $str);
			echo $replacestr."<br>";
		}elseif((substr_count($str, "d") > 1) && (substr_count($str, "i") > 1) && (substr_count($str, "n") > 1)){
			$replacestr = str_replace('din', ')))', $str);
			echo $replacestr."<br>";
		}else{
			echo "syntax error"."<br>";
		}
		//"recede" => "()()()"
		$str1 = "recede";
		if((substr_count($str1, "r") == 1) && (substr_count($str1, "e") == 1) && (substr_count($str1, "c") == 1) && (substr_count($str1, "d") == 1)){
			$replacestr1 = str_replace('recede', '((((((', $str1);
			echo $replacestr1."<br>";
		}elseif((substr_count($str1, "r") > 1) && (substr_count($str1, "e") > 1) && (substr_count($str1, "c") > 1) && (substr_count($str1, "d") > 1)){
			$replacestr1 = str_replace('recede', '))))))', $str1);
			echo $replacestr1."<br>";
		}elseif((substr_count($str1, "r") == 1) && (substr_count($str1, "e") > 1) && (substr_count($str1, "c") == 1) && (substr_count($str1, "d") == 1)){
			$replacestr1 = str_replace('recede', '()()()', $str1);
			echo $replacestr1."<br>";
		}else{
			echo "syntax error"."<br>";
		}
		//"Success" => ")())())"
		$str2 = "Success";
		if((((substr_count($str2, "S")) + (substr_count($str2, "s"))) == 1) && (substr_count($str2, "u") == 1) && (substr_count($str2, "c") == 1) && (substr_count($str2, "e") == 1)){
			$replacestr2 = str_replace('Success', '(((((((', $str2);
			echo $replacestr2."<br>";
		}elseif((((substr_count($str2, "S")) + (substr_count($str2, "s"))) > 1) && (substr_count($str2, "u") > 1) && (substr_count($str2, "c") > 1) && (substr_count($str2, "e") > 1)){
			$replacestr2 = str_replace('Success', ')))))))', $str2);
			echo $replacestr2."<br>";
		}elseif((((substr_count($str2, "S")) + (substr_count($str2, "s"))) > 1) && (substr_count($str2, "u") == 1) && (substr_count($str2, "c") > 1) && (substr_count($str2, "e") == 1)){
			$replacestr2 = str_replace('Success', ')())())', $str2);
			echo $replacestr2."<br>";
		}else{
			echo "syntax error"."<br>";
		}
		//"(( @" => "))(("
		$str3 = "(( @";
		if((substr_count($str3, "(") == 1) && (substr_count($str3, " ") == 1) && (substr_count($str3, "@") == 1)){
			$replacestr3 = str_replace('(( @', '((((', $str3);
			echo $replacestr3."<br>";
		}elseif((substr_count($str3, "(") > 1) && (substr_count($str3, " ") > 1) && (substr_count($str3, "@") > 1)){
			$replacestr3 = str_replace('(( @', '))))', $str3);
			echo $replacestr3."<br>";
		}elseif((substr_count($str3, "(") > 1) && (substr_count($str3, " ") == 1) && (substr_count($str3, "@") == 1)){
			$replacestr3 = str_replace('(( @', '))((', $str3);
			echo $replacestr3."<br>";
		}else{
			echo "syntax error"."<br>";
		}
	?>
</body>
</html>