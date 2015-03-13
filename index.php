<!DOCTYPE html>

<html lang="en">
<head>

    <!--
        Torinometeo Theme Based ON Charisma V2.0.0

        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===

        Torinometeo Theme Based ON Charisma V2.0.0
    -->
    <meta charset="utf-8">
    <title><?= $WSName; ?> Realtime Weather Station - Powered By Torinometo.org</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Realtime Meteo Station">

    <!-- The styles -->
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
    <link href='css/weather-icons.min.css' rel='stylesheet'>
    <link href='css/ConditionsIcons.css' rel='stylesheet'>


    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- LIBS -->
    <?PHP include_once './include/lib.php'; ?>



</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <span id="StationName"><?= $WSName; ?></span><i class="ci ci-<?=getConditionIcon($WOEID);?>"></i></a>
                <div class="pull-right">
                  <a href="http://www.torinometeo.org/"> <img alt="Powered by Torinometeo.org" src="img/logoTMmini.png" class="hidden-xs"/></a>
                </div>
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
	<div class="row">
        	<!-- left menu starts -->
		<?PHP include_once './include/leftmenu.php'; ?>
	        <!-- left menu ends -->
		<div id="content" class="col-md-10 col-sm-10">
				<!-- content starts -->
				<div class="row">
					<div class="col-md-3">

							<div class="row">
                <div class="box col-md-12" >
                  <div class="box-inner">
                    <div class="box-header well">
                      <h2><i class="wi wi-tornado"></i>Pressure</h2>
                    </div>
                    <div class="box-content col-centered">
                      <div class="row">
                        <div id="barometer_gauge" class="col-md-12 col-centered" >
                        </div>
                      </div>
                      <div class="row">
                        <div  class="box col-md-12" >
                          <div class="box-inner">
                            <div class="box-header well">
                              <h2><i class="wi wi-tornado"></i> Current</h2>
                            </div>
                            <div class="box-content col-centered LCDContainerLil">
                              <span id="BaroContainer"></span>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div  class="box col-md-6" >
                          <div class="box-inner">
                            <div class="box-header well">
                              <h2><i class="wi wi-tornado"></i> Min</h2>
                            </div>
                            <div class="box-content col-centered LCDContainerLil">
                              <span id="BaroMinContainer"></span>
                            </div>
                          </div>
                        </div>
                        <div  class="box col-md-6" >
                          <div class="box-inner">
                            <div class="box-header well">
                              <h2><i class="wi wi-thermometer"></i> Max</h2>
                            </div>
                            <div class="box-content col-centered LCDContainerLil">
                              <span id="BaroMaxContainer"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

							<br/>

							<div class="row">
                <div class="box col-md-12" >
								<div class="box-inner">
										<div class="box-header well">
											<h2><i class="wi wi-strong-wind"></i> Wind Speed</h2>
										</div>
										<div class="box-content">
                      <div class="row">
                        <div id="wind_speed_gauge" class="col-md-12 col-centered" >
                        </div>
                      </div>
                      <div class="row">
                        <div  class="box col-md-6" >
                          <div class="box-inner">
                            <div class="box-header well">
                              <h2><i class="wi wi-thermometer-exterior"></i> Wind</h2>
                            </div>
                            <div class="box-content col-centered LCDContainerLil">
                          <span id="WindSpeedContainer"></span>
                          </div>
                          </div>
                        </div>
                        <div  class="box col-md-6" >
                          <div class="box-inner">
                            <div class="box-header well">
                              <h2><i class="wi wi-thermometer"></i> Gust</h2>
                            </div>
                            <div class="box-content col-centered LCDContainerLil">
                              <span id="GustSpeedContainer"></span>
                            </div>
                          </div>
                        </div>
                      </div>
										</div>
								</div>
							</div>
            </div>
							<br/>

							<div class="row">
                <div class="box col-md-12" >
								<div class="box-inner">
										<div class="box-header well">
											<h2><i class="wi wi-moon-waxing-cresent-1"></i> Moon</h2>
										</div>
										<div class="box-content">
                      <div class="row">
                      <div class="col-md-4">
                      <div id="Moon" class="col-centered">
                        <i class="icoabs wi <?PHP echo GetMoonPhase($MoonPhase->age()); ?>"></i>
                        <i class="icobkgabs wi wi-moon-full"></i>
                      </div>
                    </div>
                      <div id="MoonDesc" class="col-md-8">
                         <span class="col-centered">
                           Distance: <?= round($MoonPhase->distance()); ?> km<br/>
                           Phase: <?= $MoonPhase->phase_name(); ?><br/>
                           Percentage Visible: <?= round($MoonPhase->illumination()*100); ?>%<br/>
                           Moonrise: <?= date("H:i", $MoonData['moonrise']);?><br/>
                           Moonset: <?= date("H:i", $MoonData['moonset']);?>
                        </span>
                      </div>
											</div>
                    </div>
								</div>
							</div>
            </div>
          </div>

					<div class="col-md-6">
            <div class="row">
            <div class="box col-md-12" >
						<div class="box-inner">
				      <div class="box-header well">
								<h2><i class="glyphicon glyphicon-camera"></i> Webcam</h2>
							</div>
							<div class="box-content">
								<div class="col-centered">
									<img src="<?= $webcam_url ?>" alt="<?= $webcam_desc ?>" class="img-responsive">
								</div>
							</div>
						</div>
          </div>
        </div>
          <br/>
          <div class="row">
            <div class="box col-md-6" >
            <div class="box-inner ">
              <div class="box-header well">
                <h2><i class="wi wi-thermometer"></i> Temperature <i class="wi wi-celsius"></i></h2>
              </div>
              <div class="box-content">
                <div class="row">
                  <div id="TempContainer" class="col-md-12 col-centered LCDContainerBig" >
                  </div>
                </div>
                <br/>
                <div class="row">
                  <div  class="box col-md-6" >
                    <div class="box-inner">
                      <div class="box-header well">
                        <h2><i class="wi wi-thermometer-exterior"></i> Min</h2>
                      </div>
                      <div class="box-content col-centered LCDContainerLil">
                        <span id="TMinContainer"></span>
                      </div>
                    </div>
                  </div>
                  <div  class="box col-md-6" >
                    <div class="box-inner">
                      <div class="box-header well">
                        <h2><i class="wi wi-thermometer"></i> Max</h2>
                      </div>
                      <div class="box-content col-centered LCDContainerLil">
                        <span id="TMaxContainer"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="box col-md-6" >
            <div class="box-inner">
              <div class="box-header well">
                <h2><i class="wi wi-thermometer"></i> Dew Point <i class="wi wi-celsius"></i></h2>
              </div>
                <div class="box-content">
                  <div class="row">
                    <div id="DewPointContainer" class="col-md-12 col-centered LCDContainerBig" >
                    </div>
                  </div>
                  <br/>
                  <div class="row">
                    <div  class="box col-md-6" >
                      <div class="box-inner">
                        <div class="box-header well">
                          <h2><i class="wi wi-thermometer-exterior"></i> Min</h2>
                        </div>
                        <div class="box-content col-centered LCDContainerLil">
                          <span id="DPMinContainer"></span>
                        </div>
                      </div>
                    </div>
                    <div  class="box col-md-6" >
                      <div class="box-inner">
                        <div class="box-header well">
                          <h2><i class="wi wi-thermometer"></i> Max</h2>
                        </div>
                        <div class="box-content col-centered LCDContainerLil">
                          <span id="DPMaxContainer"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>

					</div>
          <div class="col-md-3">

            <div class="row">
              <div class="box col-md-12" >
                <div class="box-inner">
                  <div class="box-header well">
                    <h2><i class="wi wi-sprinkles"></i> Humidity</h2>
                  </div>
                  <div class="box-content">
                    <div class="row">
                      <div id="humidity_gauge" class="col-md-12 col-centered"> </div>
                    </div>

                    <div class="row">
                      <div  class="box col-md-12" >
                        <div class="box-inner">
                          <div class="box-header well">
                            <h2><i class="wi wi-sprinkles"></i> Current</h2>
                          </div>
                          <div class="box-content col-centered LCDContainerLil">
                            <span id="HumContainer"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div  class="box col-md-6" >
                        <div class="box-inner">
                          <div class="box-header well">
                            <h2><i class="wi wi-sprinkles"></i> Min</h2>
                          </div>
                          <div class="box-content col-centered LCDContainerLil">
                            <span id="HumMinContainer"></span>
                          </div>
                        </div>
                      </div>
                      <div  class="box col-md-6" >
                        <div class="box-inner">
                          <div class="box-header well">
                            <h2><i class="wi wi-sprinkles"></i> Max</h2>
                          </div>
                          <div class="box-content col-centered LCDContainerLil">
                            <span id="HumMaxContainer"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>




            </div>

            <br/>

            <div class="row">
              <div class="box col-md-12" >
                <div class="box-inner">
                  <div class="box-header well">
                    <h2><i class="wi wi-wind-default _15-deg"></i> Wind Direction</h2>
                  </div>
                  <div class="box-content">
                    <div class="row">
                      <div id="wind_dir_gauge" class="col-md-12 col-centered" >

                      </div>
                    </div>
                    <div class="row">
                      <div  class="box col-md-6" >
                        <div class="box-inner">
                          <div class="box-header well">
                            <h2><i class="wi wi-wind-default _15-deg"></i> Wind</h2>
                          </div>
                          <div class="box-content col-centered LCDContainerLil">
                            <span id="WindDirContainer"></span>
                          </div>
                        </div>
                      </div>
                      <div  class="box col-md-6" >
                        <div class="box-inner">
                          <div class="box-header well">
                            <h2><i class="wi wi-wind-default _15-deg"></i> Gust</h2>
                          </div>
                          <div  class="box-content col-centered LCDContainerLil">
                            <span id="GustDirContainer"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br/>

            <div class="row">
              <div class="box col-md-12" >
                <div class="box-inner">
                  <div class="box-header well">
                    <h2><i class="wi wi-day-sunny"></i> Sun</h2>
                  </div>
                  <div class="box-content">
                    <div class="row">
                      <div class="col-md-4">
                        <div id="Moon" class="col-centered">
                          <img src="http://sohowww.nascom.nasa.gov/data/realtime/eit_304/1024/latest.jpg" alt="Last Sun Image - SOHO" class="img-responsive col-centered">
                        </div>
                      </div>
                      <div id="MoonDesc" class="col-md-8">
                        <span class="col-centered">
                          Sunrise: <?= date("H:i", date_sunrise(time(), SUNFUNCS_RET_TIMESTAMP, $Latitude, $Longitude,90+50/60));?><br/>
                          Sunset: <?= date("H:i", date_sunset(time(), SUNFUNCS_RET_TIMESTAMP, $Latitude, $Longitude,90+50/60));?>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

					</div>
			</div>
		</div>
	</div>
</div>


		    <hr>

		    </div>

		    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://www.torinometeo.org" target="_blank">Powered by Torinometeo</a>
          </p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/knockout/knockout-2.2.1.js"></script>
<script src="js/sevenSeg.js"></script>

<script type="text/javascript">
$( document ).ready(function() {

  //$("#TemperatureContainer").sevenSeg({digits:4, value: 23.5 });


  <?PHP
  $year = date('Y');
  $month = date('m');
  $lmonth = date('m') - 1;
  ?>
  var Dati = new DatiRealtime('MeteoData');
  Dati.RawFile = './GetRaw.php';
  Dati.Path = 'MeteoData.dat';

  var HistMonthData = new DatiStorico('MonthData');
  HistMonthData.RawFile = './Get2MonthRaw.php';
  HistMonthData.Path1 = './NOAA/RAW-<?= $year.'-'.$lmonth ?>.txt'; // month -1
  HistMonthData.Path2 = './NOAA/RAW-<?= $year.'-'.$month ?>.txt'; // this month

 WSpeedGauge = InitWindSpeedGauge('#wind_speed_gauge');
  WDirGauge = InitWindDirGauge('#wind_dir_gauge');
  BaroGauge = InitBarometerGauge('#barometer_gauge');
  HumGauge = InitHumidityGauge('#humidity_gauge');

  function UpdateRealtimeVal() {
    var VarWind = Dati.RawData('Wind');
    WSpeedGauge.series[0].points[0].update(VarWind);
    SetSegmentValue("#WindSpeedContainer",VarWind.toString(),GetNumLen(VarWind));
    var VarGust = Dati.RawData('Gust');
    WSpeedGauge.series[1].points[0].update(VarGust);
    SetSegmentValue("#GustSpeedContainer",VarGust.toString(),GetNumLen(VarGust));
    var VarWindDir = Dati.RawData('WindDir');
    WDirGauge.series[0].points[0].update(VarWindDir);
    SetSegmentValue("#WindDirContainer",VarWindDir.toString(),GetNumLen(VarWindDir));
    var VarGustDir = Dati.RawData('GustDir');
    WDirGauge.series[1].points[0].update(VarGustDir);
    SetSegmentValue("#GustDirContainer",VarGustDir.toString(),GetNumLen(VarWindDir));

    var VarPress = Dati.RawData('Press');
    BaroGauge.series[0].points[0].update(VarPress);
    SetSegmentValue("#BaroContainer",VarPress.toString(),GetNumLen(VarPress));
    var VarPMin = Dati.RawData('PMin');
    BaroGauge.series[1].points[0].update(VarPMin);
    SetSegmentValue("#BaroMinContainer",VarPMin.toString(),GetNumLen(VarPMin));
    var VarPMax = Dati.RawData('PMax');
    BaroGauge.series[2].points[0].update(VarPMax);
    SetSegmentValue("#BaroMaxContainer",VarPMax.toString(),GetNumLen(VarPMax));

    var VarHum = Dati.RawData('Hum');HumContainer
    SetSegmentValue("#HumContainer",VarHum,GetNumLen(VarHum));
    HumGauge.series[0].points[0].update(VarHum);
    var VarHMin = Dati.RawData('HMin');
    HumGauge.series[1].points[0].update(VarHMin);
    SetSegmentValue("#HumMinContainer",VarHMin,GetNumLen(VarHMin));
    var VarHMax = Dati.RawData('HMax');
    HumGauge.series[2].points[0].update(VarHMax);
    SetSegmentValue("#HumMaxContainer",VarHMax,GetNumLen(VarHMax));

    var VarTemp = Dati.RawData('Temp');
    SetSegmentValue("#TempContainer",VarTemp.toString(),GetNumLen(VarTemp));
    var VarTMax = Dati.RawData('TMax');
    SetSegmentValue("#TMaxContainer",VarTMax.toString(),GetNumLen(VarTMax));
    var VarTMin = Dati.RawData('TMin');
    SetSegmentValue("#TMinContainer",VarTMin.toString(),GetNumLen(VarTMin));
    var VarDewPoint = Dati.RawData('DewPoint');
    SetSegmentValue("#DewPointContainer",VarDewPoint.toString(),GetNumLen(VarDewPoint));
    var VarDPMax = Dati.RawData('DPMax');
    SetSegmentValue("#DPMaxContainer",VarDPMax.toString(),GetNumLen(VarDPMax));
    var VarDPMin = Dati.RawData('DPMin');
    SetSegmentValue("#DPMinContainer",VarDPMin.toString(),GetNumLen(VarDPMin));

  }
  UpdateRealtimeVal();
 setInterval(UpdateRealtimeVal, 5000);
});
  </script>

</body>
</html>
