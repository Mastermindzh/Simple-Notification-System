<?php

function popUp($class, $text) {

echo '<div id="notifier" class = "'.$class.'"><a onclick="document.getElementById(\'notifier\').style.display=\'none\';return false;" href="#" id="close">
		X</a>
			'.$text.'
	  </div>
';
}
