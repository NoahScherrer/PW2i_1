<!doctype html>

<html lang="de">

    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta content="Bootstrap V4.3.1 Template für IMS Frauenfeld" name="description">
        <meta content="Noah Scherrer, M. Zäch" name="author">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#00b25a">
        <meta name="msapplication-TileColor" content="#04b304">
        <meta name="theme-color" content="#ffffff">

        <!-- Title -->
        <title>Info Kanton Thurgau</title>

        <!-- Bootstrap CSS by CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <!-- Custom JavaScript -->
        <script src="//d3js.org/d3.v3.min.js"></script>
        <script src="//d3js.org/topojson.v1.min.js"></script>

        <script src="JavaScript/jquery.min.js"></script>

        <script src="JavaScript/d3.v3.min.js"></script>
        <script src="JavaScript/topojson.v1.min.js"></script>



        <!-- Custom CSS-->
        <link rel="stylesheet" href="CSS/index.css">

    </head>

    <header>
        <img src="Pics/TG_Symbol.PNG" alt="TG Logo" style="width: 100%">
    </header>

    <body>
        <div class="row mt-4">
            <div class="col-lg-6 ml-2">
                <h1>Ständige Bevölkerung Thurgau</h1>

                <div id="container">
                    <div id="graph"></div>
                </div>
            </div>

            <div class="col-lg-2">
                <h2>Filter</h2>
                <div class="form-group row">

                    <form name="myForm" id="myForm" style="width: 100%" action="index1.php" method="post">

                        <select class="form-control form-control my-2" name="Bezirk" id="Bezirk">
                            <option>Bezirk</option>

                            <option>Arbon</option>
                            <option>Frauenfeld</option>
                            <option>Kreuzlingen</option>
                            <option>Münchwilen</option>
                            <option>Weinfelden</option>
                        </select>

                        <select class="form-control form-control my-2 mb-4" name="Gemeinde" id="Gemeinde">
                            <option>Gemeinde</option>

                            <option name="M">Aadorf</option>
                            <option>Affeltrangen</option>
                            <option>Altnau</option>
                            <option>Amlikon-Bissegg</option>
                            <option>Amriswil</option>
                            <option>Arbon</option>
                            <option>Basadingen-Schlattingen</option>
                            <option>Berg</option>
                            <option>Berlingen</option>
                            <option>Bettwiesen</option>
                            <option>Bichelsee-Balterswil</option>
                            <option>Birwinken</option>
                            <option>Bischofszell</option>
                            <option>Bottighofen</option>
                            <option>Braunau</option>
                            <option>Bürglen</option>
                            <option>Bussnang</option>
                            <option>Diessenhofen</option>
                            <option>Dozwil</option>
                            <option>Egnach</option>
                            <option>Erlen</option>
                            <option>Ermatingen</option>
                            <option>Eschenz</option>
                            <option>Eschlikon</option>
                            <option>Felben-Wellhausen</option>
                            <option>Fischingen</option>
                            <option>Frauenfeld</option>
                            <option>Gachnang</option>
                            <option>Gottlieben</option>
                            <option>Güttingen</option>
                            <option>Hauptwil-Gottshaus</option>
                            <option>Hefenhofen</option>
                            <option>Herdern</option>
                            <option>Hohentannen</option>
                            <option>Homburg</option>
                            <option>Horn</option>
                            <option>Hüttlingen</option>
                            <option>Hüttwilen</option>
                            <option>Kemmental</option>
                            <option>Kesswil</option>
                            <option>Kradolf-Schönenberg</option>
                            <option>Kreuzlingen</option>
                            <option>Langrickenbach</option>
                            <option>Lengwil</option>
                            <option>Lommis</option>
                            <option>Mammern</option>
                            <option>Märstetten</option>
                            <option>Matzingen</option>
                            <option>Müllheim</option>
                            <option>Münchwilen</option>
                            <option>Münsterlingen</option>
                            <option>Neunforn</option>
                            <option>Pfyn</option>
                            <option>Raperswilen</option>
                            <option>Rickenbach</option>
                            <option>Roggwil</option>
                            <option>Romanshorn</option>
                            <option>Salenstein</option>
                            <option>Salmsach</option>
                            <option>Schlatt</option>
                            <option>Schönholzerswilen</option>
                            <option>Sirnach</option>
                            <option>Sommeri</option>
                            <option>Steckborn</option>
                            <option>Stettfurt</option>
                            <option>Sulgen</option>
                            <option>Tägerwilen</option>
                            <option>Thundorf</option>
                            <option>Tobel-Tägerschen</option>
                            <option>Uesslingen-Buch</option>
                            <option>Uttwil</option>
                            <option>Wagenhausen</option>
                            <option>Wäldi</option>
                            <option>Wängi</option>
                            <option>Warth-Weiningen</option>
                            <option>Weinfelden</option>
                            <option>Wigoltingen</option>
                            <option>Wilen</option>
                            <option>Wuppenau</option>
                            <option>Zihlschlacht-Sitterdorf</option>
                        </select>

                        <select class="form-control form-control my-2" name="Jahr" id="Jahr">
                            <option>Jahr</option>

                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                        </select>

                        <select class="form-control form-control my-2" name="Geschlecht" id="Geschlecht">
                            <option>Geschlecht</option>

                            <option>Männlich</option>
                            <option>Weiblich</option>
                            <option>*</option>
                        </select>

                        <select class="form-control form-control mb-4" name="Altersklasse" id="Altersklasse">
                            <option>Altersklasse</option>

                            <option>4 Jahre oder jünger</option>
                            <option>5 bis 9 Jahre</option>
                            <option>10 bis 14 Jahre</option>
                            <option>15 bis 19 Jahre</option>
                            <option>20 bis 24 Jahre</option>
                            <option>25 bis 29 Jahre</option>
                            <option>30 bis 34 Jahre</option>
                            <option>35 bis 39 Jahre</option>
                            <option>40 bis 44 Jahre</option>
                            <option>45 bis 49 Jahre</option>
                            <option>50 bis 54 Jahre</option>
                            <option>55 bis 59 Jahre</option>
                            <option>60 bis 64 Jahre</option>
                            <option>65 bis 69 Jahre</option>
                            <option>70 bis 74 Jahre</option>
                            <option>75 bis 79 Jahre</option>
                            <option>80 bis 84 Jahre</option>
                            <option>85 bis 89 Jahre</option>
                            <option>90+ Jahre</option>
                        </select>

                        <input type="submit" name="submit" value="Filtern" action="index.php" class="btn btn-primary btn-block" />
                    </form>
                </div>
            </div>
            <?php
            error_reporting(0);

            // Convert CSV to Array
            function csv_to_multidimension_array() {

                $delimiter = ',';
                if (!file_exists("CSV/InfoTG.csv") || !is_readable("CSV/InfoTG.csv")) {
                    return false;
                }

                $header = NULL;
                $data = array();

                if (($handle = fopen("CSV/InfoTG.csv", 'r')) !== false) {
                    while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                        $data[] = $row;
                    }
                    fclose($handle);
                }
                $ArrayData = array_reduce($data, 'array_merge', array());
                return $ArrayData;
            }
            
            $ArrayData[] = csv_to_multidimension_array();           

            // Code für das herausfinden der Momentanen Filter.
            $CurrentBezirk = $_POST['Bezirk'];
            $CurrentGemeinde = $_POST['Gemeinde'];
            $CurrentJahr = $_POST['Jahr'];
            $CurrentGeschlecht = $_POST['Geschlecht'];
            $CurrentAlter = $_POST['Altersklasse'];

            // Funktion für das Filtern aller Optionen.
            function filtern($ArrayOld, $ArrayData, $CurrentFilter, $Variable) {

                $ArrayNew = Array();
                foreach ($ArrayOld as $Stelle) {
                    if ($ArrayData($Stelle - $Variable) == $CurrentFilter) {
                        $ArrayNew[] = $Stelle + $Variable;
                    }
                }
                return($ArrayNew);
            }

            //Array mit allen PersErstellen
            for ($Counter = 19; $Counter < 15210; $Counter += 10) {
                $CurrentArray[] = $Counter;
            }

            // DatenArray auf alle gewählten Filter filtern.
            if ($CurrentBezirk != "Bezirk") {
                $ArrayBezirk = filtern($CurrentArray, $ArrayData, $CurrentBezirk, 6);
            } else {
                $ArrayBezirk = $CurrentArray;
            }

            if ($CurrentGemeinde != "Gemeinde") {
                $ArrayGemeinde = filtern($ArrayBezirk, $ArrayData, $CurrentGemeinde, 8);
            } else {
                $ArrayGemeinde = $ArrayBezirk;
            }

            if ($CurrentJahr != "Jahr") {
                $ArrayJahr = filtern($ArrayGemeinde, $ArrayData, $CurrentJahr, 5);
            } else {
                $ArrayJahr = $ArrayGemeinde;
            }

            if ($CurrentGeschlecht != "Geschlecht") {
                $ArrayGeschlecht = filtern($ArrayJahr, $ArrayData, $CurrentGeschlecht, 3);
            } else {
                $ArrayGeschlecht = $ArrayJahr;
            }

            if ($CurrentAlter != "Altersklasse") {
                $ArrayAltersklasse = filtern($ArrayGeschlecht, $ArrayData, $CurrentAlter, 1);
            } else {
                $ArrayAltersklasse = $ArrayGeschlecht;
            }
            ?>
            <div class="col-lg-3">
                <h2>Resultat</h2>

                <div class="input-group mb-2 mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width: 135px" id="basic-addon1">Bezirk</span>
                    </div>
                    <input type="text" class="form-control" name="rBezirk" value="<?php
                    // What to writte in rBezirke.
                    if ($CurrentBezirk == "Bezirk") {
                        echo "5 Stück";
                    } else {
                        echo $CurrentBezirk;
                    }
                    ?>" placeholder="Bezirk" aria-label="Bezirk" aria-describedby="basic-addon1" disabled>
                </div>

                <div class="input-group my-2 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width: 135px" id="basic-addon1">Gemeinde</span>
                    </div>
                    <input type="text" class="form-control" name="rGemeinde" value="<?php
                    // What to writte in rGemeinde.
                    if ($CurrentGemeinde == "Gemeinde") {

                        switch ($CurrentBezirk) {

                            case "Arbon":
                                echo "12 Stück";
                                break;

                            case "Frauenfeld":
                                echo "23 Stück";
                                break;

                            case "Kreuzlingen":
                                echo "14 Stück";
                                break;

                            case "Münchwilen":
                                echo "13 Stück";
                                break;

                            case "Weinfelden":
                                echo "18 Stück";
                                break;

                            default:
                                echo "80 Stück";
                                break;
                        }
                    } else {
                        echo $CurrentGemeinde;
                    }
                    ?>" placeholder="Gemeinde" aria-label="Gemeinde" aria-describedby="basic-addon1" disabled>
                </div>

                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width: 135px" id="basic-addon1">Jahr</span>
                    </div>
                    <input type="text" class="form-control" name="rJahr" value="<?php
                    // What to writte in rJahr.
                    if ($CurrentJahr == "Jahr") {
                        echo "2015 - 2019";
                    } else {
                        echo $CurrentJahr;
                    }
                    ?>" placeholder="Jahr" aria-label="Jahr" aria-describedby="basic-addon1" disabled>
                </div>

                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width: 135px" id="basic-addon1">Geschlecht</span>
                    </div>
                    <input type="text" class="form-control" name="rGeschlecht" value="<?php
                    // What to writte in rGeschlecht.
                    if ($CurrentGeschlecht == "Geschlecht") {
                        echo "Männlich und Weiblich";
                    } else {
                        echo $CurrentGeschlecht;
                    }
                    ?>" placeholder="Jahr" aria-label="Jahr" aria-describedby="basic-addon1" disabled>
                </div>

                <div class="input-group my-2 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width: 135px" id="basic-addon1">Altersklassen</span>
                    </div>
                    <input type="text" class="form-control" name="rAltersklasse" value="<?php
                    // What to writte in rAltersklasse.
                    if ($CurrentAlter == "Altersklasse") {
                        echo "Jedes Alter";
                    } else {
                        echo $CurrentAlter;
                    }
                    ?>"placeholder="Altersklassen" aria-label="Altersklassen" aria-describedby="basic-addon1" disabled>
                </div>

                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width: 135px" id="basic-addon1">Anzahl Personen</span>
                    </div>
                    <input type="text" class="form-control" name="rAnzahl" value="<?php
                           // What to writte in rAnzahl.
                           $TotalValue = 0;
                           foreach ($ArrayAltersklasse as $Value) {
                               $TotalValue = $TotalValue + $ArrayData[$Value];
                           }
                           echo $TotalValue;
                           ?>"placeholder="Anzahl Personen" aria-label="Anzahl Personen" aria-describedby="basic-addon1" disabled>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="JavaScript/main.js"></script>
        <script src="JavaScript/app.js"></script>

    </body>

</html>