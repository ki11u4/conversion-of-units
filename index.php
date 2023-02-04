<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GROUP 2 COVERSION OF UNIT</title>
  </head>
  <body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
        .container {
            height: 500px;
            width: 400px;
        }
        b {
            color: pink;
        }
    </style>
    <div class="container shadow-lg p-3 bg-body rounded mt-5">
        <div class="container-fluid shadow-sm">
            <h2 class="text-uppercase p-1">conversion of unit</h2>
            <p class="p-1 text-danger">Length only</p>
        </div>
        <div class="container-fluid">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input type="text" name="from_value" value="<?php echo $from_value; ?>" class="form-control" id="" placeholder="Enter number" >
                </div>
                <select name ="from_unit" class="form-select" aria-label="Default select example">
                    <option selected>Select Unit</option>
                    <option value="inches"<?php if($from_unit == 'inches') { echo " selected"; } ?>>Inch</option>
                    <option value="feet"<?php if($from_unit == 'feet') { echo " selected"; } ?>>Foot</option>
                    <option value="yards"<?php if($from_unit == 'yards') { echo " selected"; } ?>>Yard</option>
                    <option value="miles"<?php if($from_unit == 'miles') { echo " selected"; } ?>>Mile</option>
                    <option value="millimeters"<?php if($from_unit == 'millimeters') { echo " selected"; } ?>>Millimiter</option>
                    <option value="centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>Centimeter</option>
                    <option value="meters"<?php if($from_unit == 'meters') { echo " selected"; } ?>>Meter</option>
                    <option value="kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>Kilometer</option>
                    <option value="nautical_miles"<?php if($from_unit == 'nautical_miles') { echo " selected"; } ?>>Nautical Miles</option>
                    <option value="nanometre"<?php if($from_unit == 'nanometre') { echo " selected"; } ?>>Nanometre</option>
                    <option value="micrometre"<?php if($from_unit == 'micrometre') { echo " selected"; } ?>>Micrometre</option>
                </select>
            </div>
            <div class="container-fluid">
                <div class="mb-3">
                    <label for="" class="form-label"></label>
                    <input class="form-control" type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" aria-label="readonly input example" readonly />
                </div>
                <select name="to_unit" class="form-select" aria-label="Default select example">
                    <option selected>Select Unit</option>
                    <option value="inches"<?php if($to_unit == 'inches') { echo " selected"; } ?>>Inch</option>
                    <option value="feet"<?php if($to_unit == 'feet') { echo " selected"; } ?>>Foot</option>
                    <option value="yards"<?php if($to_unit == 'yards') { echo " selected"; } ?>>Yard</option>
                    <option value="miles"<?php if($to_unit == 'miles') { echo " selected"; } ?>>Mile</option>
                    <option value="millimeters"<?php if($to_unit == 'millimeters') { echo " selected"; } ?>>Millimeter</option>
                    <option value="centimeters"<?php if($to_unit == 'centimeters') { echo " selected"; } ?>>Centimeter</option>
                    <option value="meters"<?php if($to_unit == 'meters') { echo " selected"; } ?>>Meter</option>
                    <option value="kilometers"<?php if($to_unit == 'kilometers') { echo " selected"; } ?>>Kilometer</option>
                    <option value="nautical_miles"<?php if($to_unit == 'nautical_miles') { echo " selected"; } ?>>Nautical Miles</option>
                    <option value="nanometre"<?php if($to_unit == 'nanometre') { echo " selected"; } ?>>Nanometre</option>
                    <option value="micrometre"<?php if($to_unit == 'micrometre') { echo " selected"; } ?>>Micrometre</option>
                </select>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-primary mt-4" type="submit" name="submit" value="submit">Convert</button>
            </div>
        </form>
    </div>
    <div class="attribution d-flex justify-content-center mt-5">
    <p>Challenge by our <b>Prof. Renz Angelo Cadaoas</b>. Coded by <b>Group 2.</b></p>
  </div>
  </body>
</html>