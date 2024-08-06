<?php
include "../src/TariffInterface.php";
include "../src/ServiceInterface.php";
include "../src/TariffAbstract.php";
include "../src/TariffBasic.php";
include "../src/ServiceGPS.php";
include "../src/ServiceDriver.php";
include "../src/TariffHour.php";

@var TariffInterface
$tariff = new TariffHour(5, 61);

echo $tariff->countPrice();