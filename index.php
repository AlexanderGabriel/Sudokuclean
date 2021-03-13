<?php

$originalfeld = $_GET['feld'];
if(is_array($_GET['feld']))
{
	for($y = 0; $y < count($_GET['feld']); $y++)
	{
		for($x = 0; $x < count($_GET['feld'][$y]); $x++) if($_GET['feld'][$x][$y] == '') $_GET['feld'][$x][$y] = 0;
	}
}
$vzeilen = array(
	array($_GET['feld'][0][0], $_GET['feld'][1][0], $_GET['feld'][2][0],   $_GET['feld'][3][0], $_GET['feld'][4][0], $_GET['feld'][5][0],   $_GET['feld'][6][0], $_GET['feld'][7][0], $_GET['feld'][8][0])
	, array($_GET['feld'][0][1], $_GET['feld'][1][1], $_GET['feld'][2][1],   $_GET['feld'][3][1], $_GET['feld'][4][1], $_GET['feld'][5][1],   $_GET['feld'][6][1], $_GET['feld'][7][1], $_GET['feld'][8][1])
	, array($_GET['feld'][0][2], $_GET['feld'][1][2], $_GET['feld'][2][2],   $_GET['feld'][3][2], $_GET['feld'][4][2], $_GET['feld'][5][2],   $_GET['feld'][6][0], $_GET['feld'][7][2], $_GET['feld'][8][2])
	, array($_GET['feld'][0][3], $_GET['feld'][1][3], $_GET['feld'][2][3],   $_GET['feld'][3][3], $_GET['feld'][4][3], $_GET['feld'][5][3],   $_GET['feld'][6][3], $_GET['feld'][7][3], $_GET['feld'][8][3])
	, array($_GET['feld'][0][4], $_GET['feld'][1][4], $_GET['feld'][2][4],   $_GET['feld'][3][4], $_GET['feld'][4][4], $_GET['feld'][5][4],   $_GET['feld'][6][4], $_GET['feld'][7][4], $_GET['feld'][8][4])
	, array($_GET['feld'][0][5], $_GET['feld'][1][5], $_GET['feld'][2][5],   $_GET['feld'][3][5], $_GET['feld'][4][5], $_GET['feld'][5][5],   $_GET['feld'][6][5], $_GET['feld'][7][5], $_GET['feld'][8][5])
	, array($_GET['feld'][0][6], $_GET['feld'][1][6], $_GET['feld'][2][6],   $_GET['feld'][3][6], $_GET['feld'][4][6], $_GET['feld'][5][6],   $_GET['feld'][6][6], $_GET['feld'][7][6], $_GET['feld'][8][6])
	,  array($_GET['feld'][0][7], $_GET['feld'][1][7], $_GET['feld'][2][7],   $_GET['feld'][3][7], $_GET['feld'][4][7], $_GET['feld'][5][7],   $_GET['feld'][6][7], $_GET['feld'][7][7], $_GET['feld'][8][7])
	, array($_GET['feld'][0][8], $_GET['feld'][1][8], $_GET['feld'][2][8],   $_GET['feld'][3][8], $_GET['feld'][4][8], $_GET['feld'][5][8],   $_GET['feld'][6][8], $_GET['feld'][7][8], $_GET['feld'][8][8])
	);
$vfeld = array(
    array(& $vzeilen[0][0], & $vzeilen[1][0], & $vzeilen[2][0], & $vzeilen[3][0], & $vzeilen[4][0], & $vzeilen[5][0], & $vzeilen[6][0], & $vzeilen[7][0], & $vzeilen[8][0])
	, array(& $vzeilen[0][1], & $vzeilen[1][1], & $vzeilen[2][1], & $vzeilen[3][1], & $vzeilen[4][1], & $vzeilen[5][1], & $vzeilen[6][1], & $vzeilen[7][1], & $vzeilen[8][1])
	, array(& $vzeilen[0][2], & $vzeilen[1][2], & $vzeilen[2][2], & $vzeilen[3][2], & $vzeilen[4][2], & $vzeilen[5][2], & $vzeilen[6][2], & $vzeilen[7][2], & $vzeilen[8][2])
	, array(& $vzeilen[0][3], & $vzeilen[1][3], & $vzeilen[2][3], & $vzeilen[3][3], & $vzeilen[4][3], & $vzeilen[5][3], & $vzeilen[6][3], & $vzeilen[7][3], & $vzeilen[8][3])
	, array(& $vzeilen[0][4], & $vzeilen[1][4], & $vzeilen[2][4], & $vzeilen[3][4], & $vzeilen[4][4], & $vzeilen[5][4], & $vzeilen[6][4], & $vzeilen[7][4], & $vzeilen[8][4])
	, array(& $vzeilen[0][5], & $vzeilen[1][5], & $vzeilen[2][5], & $vzeilen[3][5], & $vzeilen[4][5], & $vzeilen[5][5], & $vzeilen[6][5], & $vzeilen[7][5], & $vzeilen[8][5])
	, array(& $vzeilen[0][6], & $vzeilen[1][6], & $vzeilen[2][6], & $vzeilen[3][6], & $vzeilen[4][6], & $vzeilen[5][6], & $vzeilen[6][6], & $vzeilen[7][6], & $vzeilen[8][6])
	, array(& $vzeilen[0][7], & $vzeilen[1][7], & $vzeilen[2][7], & $vzeilen[3][7], & $vzeilen[4][7], & $vzeilen[5][7], & $vzeilen[6][7], & $vzeilen[7][7], & $vzeilen[8][7])
	, array(& $vzeilen[0][8], & $vzeilen[1][8], & $vzeilen[2][8], & $vzeilen[3][8], & $vzeilen[4][8], & $vzeilen[5][8], & $vzeilen[6][8], & $vzeilen[7][8], & $vzeilen[8][8])
);

$zeilen = array(
    array($_GET['feld'][0][0], $_GET['feld'][1][0], $_GET['feld'][2][0],   $_GET['feld'][3][0], $_GET['feld'][4][0], $_GET['feld'][5][0],   $_GET['feld'][6][0], $_GET['feld'][7][0], $_GET['feld'][8][0])
	, array($_GET['feld'][0][1], $_GET['feld'][1][1], $_GET['feld'][2][1],   $_GET['feld'][3][1], $_GET['feld'][4][1], $_GET['feld'][5][1],   $_GET['feld'][6][1], $_GET['feld'][7][1], $_GET['feld'][8][1])
	, array($_GET['feld'][0][2], $_GET['feld'][1][2], $_GET['feld'][2][2],   $_GET['feld'][3][2], $_GET['feld'][4][2], $_GET['feld'][5][2],   $_GET['feld'][6][0], $_GET['feld'][7][2], $_GET['feld'][8][2])

    , array($_GET['feld'][0][3], $_GET['feld'][1][3], $_GET['feld'][2][3],   $_GET['feld'][3][3], $_GET['feld'][4][3], $_GET['feld'][5][3],   $_GET['feld'][6][3], $_GET['feld'][7][3], $_GET['feld'][8][3])
	, array($_GET['feld'][0][4], $_GET['feld'][1][4], $_GET['feld'][2][4],   $_GET['feld'][3][4], $_GET['feld'][4][4], $_GET['feld'][5][4],   $_GET['feld'][6][4], $_GET['feld'][7][4], $_GET['feld'][8][4])
	, array($_GET['feld'][0][5], $_GET['feld'][1][5], $_GET['feld'][2][5],   $_GET['feld'][3][5], $_GET['feld'][4][5], $_GET['feld'][5][5],   $_GET['feld'][6][5], $_GET['feld'][7][5], $_GET['feld'][8][5])

    , array($_GET['feld'][0][6], $_GET['feld'][1][6], $_GET['feld'][2][6],   $_GET['feld'][3][6], $_GET['feld'][4][6], $_GET['feld'][5][6],   $_GET['feld'][6][6], $_GET['feld'][7][6], $_GET['feld'][8][6])
	, array($_GET['feld'][0][7], $_GET['feld'][1][7], $_GET['feld'][2][7],   $_GET['feld'][3][7], $_GET['feld'][4][7], $_GET['feld'][5][7],   $_GET['feld'][6][7], $_GET['feld'][7][7], $_GET['feld'][8][7])
	, array($_GET['feld'][0][8], $_GET['feld'][1][8], $_GET['feld'][2][8],   $_GET['feld'][3][8], $_GET['feld'][4][8], $_GET['feld'][5][8],   $_GET['feld'][6][8], $_GET['feld'][7][8], $_GET['feld'][8][8])
);

$zielfeld = array(
    array(& $zeilen[0][0], & $zeilen[1][0], & $zeilen[2][0], & $zeilen[3][0], & $zeilen[4][0], & $zeilen[5][0], & $zeilen[6][0], & $zeilen[7][0], & $zeilen[8][0])
    , array(& $zeilen[0][1], & $zeilen[1][1], & $zeilen[2][1], & $zeilen[3][1], & $zeilen[4][1], & $zeilen[5][1], & $zeilen[6][1], & $zeilen[7][1], & $zeilen[8][1])
	, array(& $zeilen[0][2], & $zeilen[1][2], & $zeilen[2][2], & $zeilen[3][2], & $zeilen[4][2], & $zeilen[5][2], & $zeilen[6][2], & $zeilen[7][2], & $zeilen[8][2])
	, array(& $zeilen[0][3], & $zeilen[1][3], & $zeilen[2][3], & $zeilen[3][3], & $zeilen[4][3], & $zeilen[5][3], & $zeilen[6][3], & $zeilen[7][3], & $zeilen[8][3])
	, array(& $zeilen[0][4], & $zeilen[1][4], & $zeilen[2][4], & $zeilen[3][4], & $zeilen[4][4], & $zeilen[5][4], & $zeilen[6][4], & $zeilen[7][4], & $zeilen[8][4])
	, array(& $zeilen[0][5], & $zeilen[1][5], & $zeilen[2][5], & $zeilen[3][5], & $zeilen[4][5], & $zeilen[5][5], & $zeilen[6][5], & $zeilen[7][5], & $zeilen[8][5])
	, array(& $zeilen[0][6], & $zeilen[1][6], & $zeilen[2][6], & $zeilen[3][6], & $zeilen[4][6], & $zeilen[5][6], & $zeilen[6][6], & $zeilen[7][6], & $zeilen[8][6])
	, array(& $zeilen[0][7], & $zeilen[1][7], & $zeilen[2][7], & $zeilen[3][7], & $zeilen[4][7], & $zeilen[5][7], & $zeilen[6][7], & $zeilen[7][7], & $zeilen[8][7])
	, array(& $zeilen[0][8], & $zeilen[1][8], & $zeilen[2][8], & $zeilen[3][8], & $zeilen[4][8], & $zeilen[5][8], & $zeilen[6][8], & $zeilen[7][8], & $zeilen[8][8])
);

$blocks[0][0] = array(& $zeilen[0][0], & $zeilen[0][1], & $zeilen[0][2], & $zeilen[1][0], & $zeilen[1][1], & $zeilen[1][2], & $zeilen[2][0], & $zeilen[2][1], & $zeilen[2][2]);
$blocks[1][0] = array(& $zeilen[0][3], & $zeilen[0][4], & $zeilen[0][5], & $zeilen[1][3], & $zeilen[1][4], & $zeilen[1][5], & $zeilen[2][3], & $zeilen[2][4], & $zeilen[2][5]);
$blocks[2][0] = array(& $zeilen[0][6], & $zeilen[0][7], & $zeilen[0][8], & $zeilen[1][6], & $zeilen[1][7], & $zeilen[1][8], & $zeilen[2][6], & $zeilen[2][7], & $zeilen[2][8]);
$blocks[0][1] = array(& $zeilen[3][0], & $zeilen[3][1], & $zeilen[3][2], & $zeilen[4][0], & $zeilen[4][1], & $zeilen[4][2], & $zeilen[5][0], & $zeilen[5][1], & $zeilen[5][2]);
$blocks[1][1] = array(& $zeilen[3][3], & $zeilen[3][4], & $zeilen[3][5], & $zeilen[4][3], & $zeilen[4][4], & $zeilen[4][5], & $zeilen[5][3], & $zeilen[5][4], & $zeilen[5][5]);
$blocks[2][1] = array(& $zeilen[3][6], & $zeilen[3][7], & $zeilen[3][8], & $zeilen[4][6], & $zeilen[4][7], & $zeilen[4][8], & $zeilen[5][6], & $zeilen[5][7], & $zeilen[5][8]);
$blocks[0][2] = array(& $zeilen[6][0], & $zeilen[6][1], & $zeilen[6][2], & $zeilen[7][0], & $zeilen[7][1], & $zeilen[7][2], & $zeilen[8][0], & $zeilen[8][1], & $zeilen[8][2]);
$blocks[1][2] = array(& $zeilen[6][3], & $zeilen[6][4], & $zeilen[6][5], & $zeilen[7][3], & $zeilen[7][4], & $zeilen[7][5], & $zeilen[8][3], & $zeilen[8][4], & $zeilen[8][5]);
$blocks[2][2] = array(& $zeilen[6][6], & $zeilen[6][7], & $zeilen[6][8], & $zeilen[7][6], & $zeilen[7][7], & $zeilen[7][8], & $zeilen[8][6], & $zeilen[8][7], & $zeilen[8][8]);

//in $possible kommen die moeglichen Zahlen pro feld
for($y = 0; $y < 9; $y++)
{
	for($x = 0; $x < 9; $x++)
	{
		if($zeilen[$y][$x] === 0)
		{
			$bx = ($x - ($x % 3))/3;
			$by = ($y - ($y % 3))/3;
			for($n = 1; $n <= 9; $n++)
			{
				if(
					   !in_array($n, $zielfeld[$x])
					&& !in_array($n, $zeilen[$y])
					&& !in_array($n, $blocks[$bx][$by])
				)
					$possible[$x][$y][] = $n;
			}
		}
	}
}
//print_r($possible);die();
//jetzt fuer jede spalte in $possible ins originalfeld einsetzen und ein feld weitergehen
//in $cursor wird fuer jedes feld der aktuelle cursor in $possible gespeichert.
//wenn cursor gleich anzahl in possible dann muss so lange zurueck gegangen werden, bis der cursor wieder erhoeht werden kann
//wenn zurueck gegangen wird muessen alle nachfolgenden cursor zurueckgesetzt werden
$rollback = false;
for($y = 0; $y < 9; $y++)
{
	for($x = 0; $x < 9; $x++)
	{
		$foundvalidnumber = false;
		if($vfeld[$x][$y] === 0)
		{
			$bx = ($x - ($x % 3))/3;
			$by = ($y - ($y % 3))/3;
			if(!isset($cursor[$x][$y])) $cursor[$x][$y] = 0;
			for(1; $cursor[$x][$y] < count($possible[$x][$y]); $cursor[$x][$y]++)
			{
				$n = $possible[$x][$y][$cursor[$x][$y]];
				if(!in_array($n, $zielfeld[$x]) && !in_array($n, $zeilen[$y]) && !in_array($n, $blocks[$bx][$by]))
				{
					$zielfeld[$x][$y] = $n;
					$foundvalidnumber = true;
					$rollback = false;
					break;
				}
			}
		}
		else
		{
			if(!$rollback) $foundvalidnumber = true;
		}
		if($foundvalidnumber === false)
		{
			$rollback = true;
			$cursor[$x][$y] = 0;
			$zielfeld[$x][$y] = $vfeld[$x][$y];
		}
		if($rollback)
		{
			if($x == 0)
			{
				$y = $y -1;
				if($y == -1) echo('ohne l�sung wieder am Anfang'); $x = 9; $y = 8;
				$x = 7;
			}
			else
			{
				$x = $x -2;
			}
		}
	}
}
$_GET['feld'] = $originalfeld;

$results['feld'] = $zielfeld;

if(isset($_GET['api']) && $_GET['api'] == 1)
{
    echo json_encode($results);die();
}

if (file_exists('./vendor/autoload.php')) require './vendor/autoload.php';
else trigger_error("./vendor/autoload.php not found");
$oSmarty = new Smarty();
$oSmarty->template_dir = './/templates/';
$oSmarty->compile_dir = './templates_c/';

$oSmarty->assign('GET', $_GET);
if(isset($results)) $oSmarty->assign('results', $results);
echo (microtime());
$oSmarty->display('index.tpl.html');
