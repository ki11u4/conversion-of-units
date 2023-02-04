<?php

const LENGTH_TO_METER = array(
  "inches" => 0.0254,
  "feet" => 0.3048,
  "yards" => 0.9144,
  "miles" => 1609.3,
  "millimeters" => 0.001,
  "centimeters" => 0.01,
  "meters" => 1,
  "kilometers" => 1000,
  "nautical_miles" => 1852,
  "micrometre" => 1e+6,
  "nanometre" => 1e+9
);


function optionize($string) {
  return str_replace(' ', '_', strtolower($string));
}


function float_to_string($float, $precision=10) {
  $float = (float) $float;
  $string = number_format($float, $precision, '.', '');
  $string = rtrim($string, '0');
  $string = rtrim($string, '.');
  return $string;
}

// Length
function convert_to_meters($value, $from_unit) {
  if(array_key_exists($from_unit, LENGTH_TO_METER)) {
    return $value * LENGTH_TO_METER[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_meters($value, $to_unit) {
  if(array_key_exists($to_unit, LENGTH_TO_METER)) {
    return $value / LENGTH_TO_METER[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_length($value, $from_unit, $to_unit) {
  $meter_value = convert_to_meters($value, $from_unit);
  $new_value = convert_from_meters($meter_value, $to_unit);
  return $new_value;
}