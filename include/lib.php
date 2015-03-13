<link href="./style/layout.css" rel="stylesheet" type="text/css">
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-more.js"></script>
<script src="http://code.highcharts.com/modules/solid-gauge.js"></script>
<script type="text/javascript" src="./js/jQueryRotate.js"></script>
<script type="text/javascript" src="./js/Utils.js"></script>
<script type="text/javascript" src="./js/Tm-Ajax.js"></script>
<script type="text/javascript" src="./js/Graphs.js"></script>
<script type="text/javascript" src="./js/Gauges.js"></script>


<?PHP
include_once 'config.php';
include_once 'functions.php';
include 'MoonPhase.php';
include 'moon.php';
$MoonPhase = new MoonPhase();
$MoonData = (array)MoonRiseSet::calculateMoonTimes(date('m'), date('d'), date('Y'), $Latitude, $Longitude);
?>
