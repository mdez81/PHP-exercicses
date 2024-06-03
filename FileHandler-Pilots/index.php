<!doctype html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php
        include './Pilots/helper/fileHandler.php';

        //print(readFile('./Pilots/db/pilotak.csv', ';'));
        //$lineCount = count(file('./Pilots/db/pilotak.csv'));

        print("<br>");
        //print("3. feladat: " . strval($lineCount) - 1);
        $numbersOfRows = countRowsInfile('./Pilots/db/pilotak.csv');
        print("3. feladat: " . strval($numbersOfRows) - 1);
        print("<br>");

        /* $csvArray = readDataToArray('./Pilots/db/pilotak.csv', ';');
          $arrayLength = count($csvArray);
          for ($i = 0; $i < $arrayLength; $i++) {
          foreach($array[$i] as $value) {
          echo $value;
          } */
        $csvArray = readDataToArray('./Pilots/db/pilotak.csv', ';');
        print("<pre>");
        for ($index = 0; $index < count($csvArray); $index++) {
            //print_r($csvArray[$index]);

            if ($index = count($csvArray) - 1) {

                //print_r($csvArray[$index]);
                $nev = $csvArray[$index][0];
                //print('<p>4. feladat' . $nev . '</p>');
            }

            print("4. feladat " . driverNameInLastRow($csvArray));

            /* if(date_parse($csvArray[$index][1]["year"] < 1901) && date_parse($csvArray[$index][1]["month"] < 1)) {
              print($csvArray[$index][0]. " ". $csvArray[$index][1]);
              }
              $month = 0;
              if (substr(explode('.', $csvArray[$index][1])[0], 0, 1) == 0) {
              $moth = substr(explode('.', $csvArray[$index][1][1]), 1, 1);
              } else {
              $moth = explode('.', $csvArray[$index][1]);
              } */

            //print($csvArray[$index][0]. "-". $csvArray[$index][1]);


            /* $rajtszam = $csvArray[$index][3];
              if ($rajtszam !== null) {
              $min = $rajtszam[1];
              if ($rajtszam < $min) {
              $min = $rajtszam;
              }

              print(strval($min));
              } */
        }
        print("</pre>");
        /* if(explode('.', $csvArray[$index][1])[0] <= 1901  ) {
          print($csvArray[$index][0]. "-". $csvArray[$index][1]);
          } */

        $rajtszam = [];
        foreach ($csvArray as $csv) {
            foreach ($csv as $key => $value) {
                print("<pre>");
                //print("$key => $value");
                //var_dump($csv[3]);
                //print(explode('.', $csv[1])[0]);
                print("</pre>");

                $db = 0;
                if ($key == $csv[3]) {
                    $db++;
                }

                if ($db > 1) {
                    print("7. feladat: " . $csv[3][0]);
                }
            }

            $year = explode('.', $csv[1])[0];
            if ($year < 1901) {
                //print($csv[0] . "-". $csv[1]);
            }





            //$rajtszam = (int) $csv[3];
            //var_dump($rajtszam);
        }

        //var_dump($csvArrays);
        //var_dump((int)$min);
        //print($startNumbers[$min]);
        //print($startNumbers[$min]);
        //print("6.feladat" . $rajtszam);

        print("<br>");
        print("5. feladat:");
        PilotsBirthBefore1901($csvArray, 1901);

        //$startNumbers = array_column($csvArray, '3');
        print("<pre>");
        //var_dump($startNumbers);
        //var_dump($numStartNumber); 

        /* for ($i = 0; $i < count($numStartNumber); $i++) {
          $min = $numStartNumber[0];
          if ($numStartNumber[$i] < $min) {
          $min = $numStartNumber[$i];
          }
          //print("6.feladat: ". $numStartNumber[$min]);
          } */
        //print("6.feladat: " . $numStartNumber[$min]);


        $startNumbers = array_column($csvArray, '3');
        print("<pre>");
        //var_dump($startNumbers);

        for ($i = 1; $i < count($startNumbers); $i++) {

            $min = $startNumbers[1];

            if ($startNumbers[$i] !== "" && $startNumbers[$i] < $min) {
                $min = $startNumbers[$i];
            }
        }
        var_dump($min);

        print("6. feladat: " . $csvArray[$min][2]);

        for ($i = 0; $i < count($csvArray); $i++) {
            //print_r($csvArray[$i][3]);
            for ($j = 0; $j < count($csvArray); $j++) {
                $db = 0;
                //var_dump((int)$csvArray[$j][3]);
                if ((int) $csvArray[$i][3] == (int) $csvArray[$j][3]) {
                    $db++;
                }
                //print($db);
            }
        }

        if ($db > 1) {
            //print("7. feladat: " . $csvArray[$i][3]);
        }
        ?>
    </body>
</html>


