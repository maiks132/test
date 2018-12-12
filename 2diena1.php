<?php
error_reporting(-1);
ini_set('display_errors', 'on');

$i = 0;

while ($i < 10) 
{
	echo($i);
	$i++;
}

echo(" ");
$i = 0;
do {
	echo($i);
	$i++;
	}
	while ($i < 10);

	echo(" ");

for($i=0; $i<10; $i++)
	{
	if($i%2 == 0){
	echo($i);
	}
}

echo("<br>");
$integers = array(4, 5, 6, 
			array(
				6.1, 6.2, 6.3, 6.4 
				)
			);

foreach ($integers as $value) 
{
	if(is_array($value))
	{
		foreach ($value as $subvalue) 
		{
			echo(
		"subvalue: ".
		$subvalue .
		";<br> "
		);
		}
	}
	else
		echo(
		"value: ".
		$value .
		";<br> "
	);
}
echo("----------<br>");
for($i=0; $i < count($integers); $i++)
{
	if(!is_array($integers[$i]))
	{
	echo($integers[$i]);
	}
}

echo("<br>----------<br>");
$i=0;
while ($i<count($integers))
{
	if(!is_array($integers[$i]))
	{
	echo($integers[$i]);
	}
	$i++;
}

?>