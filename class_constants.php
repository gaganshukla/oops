<?php

class Clock{

	public const DAY_IN_SECONDS = 60 * 60 * 24;

	public function tommarow(){
		return time() + self::DAY_IN_SECONDS;
	}


}

echo Clock::DAY_IN_SECONDS. '<br />';

$clock = new Clock;
echo $clock->tommarow();

?>                                                                                                                                                                                       