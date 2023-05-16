<?php

enum Week
{
	case Monday;
	case Tuesday;
	case Wednesday;
	case Thursday;
	case Friday;
	case Saturday;	
	case Sunday;	
}

function is_weekend(Week $week) bool{
	if ($week == Week::Saturday || $week == Week::Sunday){
		return true;
	}else {
		return false;
	}	
}


echo is_weekend(Week::Friday),"\n";
echo is_weekend(Week::Sunday),"\n";

?>
