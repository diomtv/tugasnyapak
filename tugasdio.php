<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/conditions/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $negara = $parsed_json ->{'current_observation'}->{'observation_location'}->{'country'};
  $kota = $parsed_json->{'current_observation'}->{'observation_location'}->{'full'};
  $suhu = $parsed_json->{'current_observation'}->{'temp_c'};
  echo " ${negara} and Weather in ${kota} is ${suhu} C ";
?>
<br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/history_20060405/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $tahun = $parsed_json ->{'history'}->{'date'}->{'year'};
  $bulan = $parsed_json->{'history'}->{'date'}->{'mon'};
  $hari= $parsed_json->{'history'}->{'date'}->{'mday'};
  echo "in ${tahun}-${bulan}-${hari}  ";
?>
<br><br>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $jam= $parsed_json ->{'moon_phase'}->{'sunrise'}->{'hour'};
  $menit = $parsed_json->{'moon_phase'}->{'sunrise'}->{'minute'};
  echo "in Australia,Sydney time to sunrise is ${jam}.${menit} ";
?>