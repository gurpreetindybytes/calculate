<?php

namespace Calculation;

define('PI','3.14');
class Calculate
{
	public static function area($h,$w){
		return $h * $w;
	}	

	public static function radius($r){
		return PI * $r * $r;
	}

	public static function percentage($total_marks,$obtain_marks){
		return $obtain_marks * 100 / $total_marks;
	}
}