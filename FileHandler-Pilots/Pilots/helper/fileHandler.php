<?php

//header('Content-Type: text/plain; charset=utf-8');

if (!function_exists('readDataToArray')) {

    function readDataToArray(string $filename, string $separator) {
        $csvArray = [];
        if (file_exists($filename)) {
            $file = fopen($filename, 'r');
            if ($file) {
                while (($line = fgetcsv($file, null, $separator)) !== false) {
                    $csvArray[] = $line;
                    //print($csvArray[0]["név"]);
                }
                fclose($file);
                return $csvArray;

                /* $arrayLength = count($csvArray);
                  for ($i = 0; $i < $arrayLength; $i++) {
                  foreach ($array[$i] as $value) {
                  print( $value);
                  }
                  } */
            }
        }
        return false;
    }

}





//$csvArray= array();






if (!function_exists('readFile')) {

    function readFile(string $filename, string $separator) {
        $html = "";
        if (file_exists($filename)) {
            $file = fopen($filename, 'r');
            //
            //$header = fgetc($file, 'r');
            if ($file) {
                $html .= '<table>' . PHP_EOL;

                while (($line = fgetcsv($file, null, $separator)) !== false) {
                    $html .= '<tr>';
                    foreach ($line as $key => $value) {
                        $html .= '<td>' . $value . '</td>';
                    }
                    $html .= '</tr>' . PHP_EOL;
                }

                $html .= '</table>';
                fclose($file);
            }
        }
        return $html;
    }

}



if (!function_exists('countRowsInfile')) {

    function countRowsInfile(string $filename) {
        return count(file($filename));
    }

}


if (!function_exists('driverNameInLastRow')) {

    function driverNameInLastRow(array $array) {
        $name = "";
        for ($index = 0; $index < count($array); $index++) {
            if ($index = count($array) - 1) {
                $name = $array[$index][0];
                //print('<p>4. feladat' . $nev . '</p>');
            }
        }
        return $name;
    }

}

if (!function_exists('PilotsBirthBeforeAYear')) {

    function PilotsBirthBefore1901(array $array, int $year) {

        foreach ($array as $csv) {
            print("<pre>");
            foreach ($csv as $key => $value) {
                
            }
            $year = explode('.', $csv[1])[0];
            if ($year < 1901) {
                print($csv[0] . "-" . $csv[1]);
            }
        }
    }

}

