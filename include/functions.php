<?PHP
function GetMoonPhase($moonage)
{
  $WeatherIcon = array("wi-moon-new",
  "wi-moon-waxing-cresent-1",
  "wi-moon-waxing-cresent-2",
  "wi-moon-waxing-cresent-3",
  "wi-moon-waxing-cresent-4",
  "wi-moon-waxing-cresent-5",
  "wi-moon-waxing-cresent-6",
  "wi-moon-first-quarter",
  "wi-moon-waxing-gibbous-1",
  "wi-moon-waxing-gibbous-2",
  "wi-moon-waxing-gibbous-3",
  "wi-moon-waxing-gibbous-4",
  "wi-moon-waxing-gibbous-5",
  "wi-moon-waxing-gibbous-6",
  "wi-moon-full",
  "wi-moon-waning-gibbous-1",
  "wi-moon-waning-gibbous-2",
  "wi-moon-waning-gibbous-3",
  "wi-moon-waning-gibbous-4",
  "wi-moon-waning-gibbous-5",
  "wi-moon-waning-gibbous-6",
  "wi-moon-3rd-quarter",
  "wi-moon-waning-crescent-1",
  "wi-moon-waning-crescent-2",
  "wi-moon-waning-crescent-3",
  "wi-moon-waning-crescent-4",
  "wi-moon-waning-crescent-5",
  "wi-moon-waning-crescent-6");

  return $WeatherIcon[round($moonage)-1];

}



function getConditionIcon($IN_WOEID) {

  $content = file_get_contents($WeatherPath="http://weather.yahooapis.com/forecastrss?w=".$IN_WOEID."&u=c");
  $x = new SimpleXmlElement($content);

  $description = $x->channel->item->description;
  //$imgpattern = '/src="(.*?)"/i';
  $imgpattern = '/[0-9]\/(.*[0-9])\./s';
  preg_match($imgpattern, $description, $matches);

  return $matches[1];

}


?>
