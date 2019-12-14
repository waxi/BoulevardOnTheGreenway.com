<?php

	switch ("dev") {

		case "dev":
			$webPath = "/BoulevardOnTheGreenway.com/";
			$imgPath = "/BoulevardOnTheGreenway.com/images/";
			$cssPath = "/BoulevardOnTheGreenway.com/css/";
			$jsPath  = "/BoulevardOnTheGreenway.com/js/";
		break;

		case "pro":
			$webPath = "https://www.BoulevardOnTheGreenway.com/";
			$imgPath = "https://www.BoulevardOnTheGreenway.com/images/";
			$cssPath = "https://www.BoulevardOnTheGreenway.com/css/";
			$jsPath  = "https://www.BoulevardOnTheGreenway.com/js/";
		break;

		default:
			$webPath = "https://www.BoulevardOnTheGreenway.com/";
			$imgPath = "https://www.BoulevardOnTheGreenway.com/images/";
			$cssPath = "https://www.BoulevardOnTheGreenway.com/css/";
			$jsPath  = "https://www.BoulevardOnTheGreenway.com/js/";
		break;

	};

	$hideNav = false;
	$hideFooter = false;

?>