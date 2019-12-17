<?php

	switch ("dev") {

		case "dev":
			$webPath = "/BoulevardOnTheGreenway.com/";
			$imgPath = "/BoulevardOnTheGreenway.com/images/";
			$cssPath = "/BoulevardOnTheGreenway.com/css/";
			$jsPath  = "/BoulevardOnTheGreenway.com/js/";
		break;

		case "pro":
			$webPath = "https://BoulevardOnTheGreenway.com/";
			$imgPath = "https://BoulevardOnTheGreenway.com/images/";
			$cssPath = "https://BoulevardOnTheGreenway.com/css/";
			$jsPath  = "https://BoulevardOnTheGreenway.com/js/";
		break;

		default:
			$webPath = "https://BoulevardOnTheGreenway.com/";
			$imgPath = "https://BoulevardOnTheGreenway.com/images/";
			$cssPath = "https://BoulevardOnTheGreenway.com/css/";
			$jsPath  = "https://BoulevardOnTheGreenway.com/js/";
		break;

	};

	$hideNav = false;
	$hideFooter = false;

?>