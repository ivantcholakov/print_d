<?php

	include 'print_d.php';

	echo '<style>body { font-family: arial; } h3 { font-size:16px; } </style>';

	echo '<h3>Direct print</h3>';
	echo print_d('Print string');
	echo print_d(1);
	echo print_d(1.1);
	echo print_d(true);
	echo print_d(null);
	echo print_d(array(1, 2, 3));
	echo print_d(array());

	echo '<br style="clear:both;">';
	echo '<h3>Printing variables</h3>';

	$integer = 1;
	echo print_d($integer);

	$string = 'Variable string';
	echo print_d($string);

	$null = null;
	echo print_d($null);

	$array = array(1, 'Two', 3, '4');
	echo print_d($array);

	$array2 = array('a' => 1, 'b' => 2, 'c' => 'D');
	echo print_d($array2);
	echo print_d($array2['a']);

	$empty_array = array();
	echo print_d($empty_array);

	echo '<br style="clear:both;">';
	echo '<h3>Printing classes</h3>';

	$stdclass = new stdclass;
	$stdclass->var1 = 'Variable 1';
	$stdclass->var2 = 3.14;
	echo print_d($stdclass);

	class Test
	{
		var $var1 = 'Var 1 value',
			$var2 = 'Var 2 value',
			$var3 = null;

		function method1()
		{
			return 'from method';
		}

		function method2($value, $value2 = 'Default value set')
		{
			return array(1, 2, 3);
		}
	}

	$testclass = new Test;
	echo print_d($testclass);
	echo print_d($testclass, true);

	echo print_d(new stdclass);

	echo '<br style="clear:both;">';
	echo '<h3>Printing multidimensional arrays</h3>';

	$m_array = array(
		array(1, 2, 3),
		array('one', 'two', 'three'),
		4,
		'five',
		(object) array('a' => 'b', 'c' => 'd'),
		array(array(1, 2, 3), array(4, 5, 6))
	);
	echo print_d($m_array);

	echo '<br style="clear:both;">';
	echo '<h3>Printing functions</h3>';

	echo print_d(date('Y'));
	echo print_d($testclass->method1());
	echo print_d($testclass->method2(true));

	$date = array('2014' => 'Year');
	echo print_d($date[date('Y')]);
