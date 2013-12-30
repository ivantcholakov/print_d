<?php

	include 'print_d.php';

	echo '<style>body { font-family: arial; } h3 { font-size:16px; } </style>';

	echo '<h3>Direct print</h3>';
	echo print_d('Print string');
	echo print_d(1);
	echo print_d(1.1);
	echo print_d(true);
	echo print_d(array(1, 2, 3));

	echo '<br style="clear:both;">';
	echo '<h3>Printing variables</h3>';

	$integer = 1;
	echo print_d($integer);

	$string = 'Variable string';
	echo print_d($string);

	$array = array(1, 'Two', 3, '4');
	echo print_d($array);

	echo '<br style="clear:both;">';
	echo '<h3>Printing classes</h3>';

	$stdclass = new stdclass;
	$stdclass->var1 = 'Variable 1';
	$stdclass->var2 = 3.14;
	echo print_d($stdclass);

	class Test
	{
		var $var1 = 'Var 1 value',
			$var2 = 'Var 2 value';

		function method1()
		{

		}

		function method2($value, $value2 = 'Default value set')
		{

		}
	}

	$testclass = new Test;
	echo print_d($testclass);