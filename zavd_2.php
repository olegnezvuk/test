<?php include "header.php"; ?>
<?php

mb_internal_encoding('UTF-8');

if (isset($_POST['submit']))
{
	if (! empty($_POST['text']))
	{
		$text = str_replace("\n", ' ', $_POST['text']);
		$text = str_replace(['.',',',':',';','-','"',"'",'(',')'], '', $text);
		
		$result = [];
		
		foreach (explode(' ', $text) as $value)
		{
			$result[mb_strlen($value)][] = $value;
		}
		
		ksort($result);
		
		$array = [];
		
		foreach (array_slice($result, -3) as $value)
		{
			foreach ($value as $word)
			{
				$array[] = mb_strtolower($word);
			}
		}
		
		$return = implode(', ', array_reverse($array));
	}
	else
	{
		$return = 'Ошибка: Текст не введён.';
	}
}

?>
	
	<form method="post">
		<div><textarea name="text"></textarea></div>
		<div><input type="submit" name="submit" value="Выполнить"></div>
	</form>

<?=(!empty($return) ? '<div>'.$return.'</div>' : null)?>
<?php include "footer.php"; ?>