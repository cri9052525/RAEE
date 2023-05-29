<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella RAEE</title>
</head>
<style>
        :root {
            --colore1: #8aaa73;
            --colore2: #bcd7bf;
            --colore3: #3e7831;
            --colore4: #b9c5a0;
            --colore5: #9da267;
        }


    body {
        background-color: var(--colore2);
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: center;
        height: 100vh;
    }

    * {
        font-family: 'Segoe UI';
        box-sizing: border-box;
    }

    table,
    th,
    td {
        background-color: var(--colore1);
    }

    #topnav {
            position: absolute;
            top: 0;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 7vh;
            width: 100%;
            background-color: var(--colore1);
            z-index: 2;
        }

        #navcenter {
            height: 5vh;
            justify-content: center;
        }

        #navleft {
            justify-content: start;
        }

        #navright {
            justify-content: end;
        }

        #navleft,
        #navcenter,
        #navright {
            width: 33%;
            display: flex;
            align-items: center;
        }


        a {
            width: 5vw;
            height: 3vh;
            color: white;
            text-decoration: none;
            background-color: var(--colore4);
            margin: 2vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-radius: 30vh;
            transition: all;
            transition: .4s;
        }

        #navleft a, #navright a{
            padding-left:4vw;
            padding-right:4vw;
        }

        a:hover {
            background-color: var(--colore2);
        }

        #navcenter svg {
            height: 5vh;
            width: 5vh;
        }
        @media (orientation: portrait) {
            #topnav {
                height: 10vh;
            }

            #navleft {
                width: 55vw;
            }
            #navleft a{
                margin: 1vh;
                padding: 1vh;
                width: 50%;
            }
            #navright {
                width: 55vw;
            }
            #navright a{
                margin: 1vh;
                padding: 1vh;
                width: 100%;
            }

            #navleft,#navright{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #navcenter {
                width: 20vw;
            }

            main {
                display: flex;
                justify-content: center;
                align-items: start;
                width: 100%;
                height: 100%;
            }
            table{
                width: 100%;
            }
        }
    td,
    th {
        width: 10vw;
        height: 3vh;
        text-align: center;
    }

    table {
        margin-top: 10vh;
        margin-bottom: 10vh;
    }

    td {
        background-color: var(--colore2);
    }
</style>

<body>
    <div id="topnav">
        <div id="navleft">
            <a href="inserisci.php">Inserisci</a>
            <a href="visualizza.php">Visualizza</a>
        </div>
        <div id="navcenter">
            <a href="index.php" style="background-color: rgba(255, 255, 255, 0); ">
                <svg height="800px" width="800px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #000000;
                        }
                    </style>
                    <g>
                        <path class="st0" d="M410.889,43.919H301.535C299.775,19.787,280.578,0.08,255.994,0c-24.591,0.08-43.786,19.787-45.549,43.919
               H101.112c-22.791,0-41.408,18.633-41.408,41.4v32.156c0,5.692,4.65,10.35,10.338,10.35h0.678l23.856,342.881
               C96.151,493.408,116.064,512,138.855,512h234.283c22.759,0,42.7-18.592,44.286-41.295l23.836-342.881h0.678
               c5.696,0,10.358-4.658,10.358-10.35V85.318C452.296,62.552,433.659,43.919,410.889,43.919z M146.884,319.686
               c-4.316-6.895-2.322-16.817,1.562-23.59c2.411-4.23,13.337-22.589,13.337-22.589l-18.318-10.818l51.399-0.113l25.931,44.952
               l-19.065-11.012l-23.28,40.98h0.021c-4.396,7.847-8.32,15.016-8.53,22.718C159.942,342.856,147.542,320.768,146.884,319.686z
                M243.004,384.628c-6.192-0.049-26.94-0.194-32.151-0.098c-23.857,0.42-29.993-5.376-32.543-9.784
               c-0.529-0.937-1.086-1.89-1.644-2.851c-6.782-11.755-0.965-22.121,5.898-34.351l60.74,0.419L243.004,384.628z M223.523,258.458
               l-40.246-23.606c3.128-5.329,13.628-23.227,16.15-27.78c11.553-20.878,19.663-23.292,24.741-23.292h3.286
               c13.579,0,19.646,10.221,26.827,22.283L223.523,258.458z M256.353,202.502l-0.02,0.04c-4.582-7.735-8.836-14.71-15.388-18.746
               c20.03,0.016,45.38,0.323,46.627,0.291c8.126-0.275,15.727,6.402,19.65,13.159c2.43,4.182,12.901,22.848,12.901,22.848
               l18.517-10.463l-25.601,44.564h-51.895l19.077-11.012L256.353,202.502z M334.668,374.035c-3.834,7.193-13.398,10.415-21.217,10.447
               c-4.852,0.024-26.23-0.242-26.23-0.242l-0.218,21.266l-25.79-44.452l25.951-44.952v22.024l47.152-0.34l-0.007-0.016
               c8.973-0.114,17.163-0.299,23.916-3.956C348.203,351.123,335.266,372.938,334.668,374.035z M366.643,319.283
               c-0.549,0.952-1.098,1.904-1.655,2.874c-6.794,11.738-18.678,11.884-32.701,12.062l-29.992-52.832l40.561-23.058
               c3.06,5.394,13.308,23.42,15.977,27.893C371.136,306.664,369.174,314.89,366.643,319.283z" />
                    </g>
                </svg>
            </a>
        </div>
        <div id="navright">
            <a href="https://github.com/cri9052525/RAEE">Info</a>
        </div>
    </div>
    
    <main>
        <table>
            <tr>
                <th onclick="window.location.href = 'visualizza.php?param=modello'">Modello</th>
                <th onclick="window.location.href = 'visualizza.php?param=marca'">Marca</th>
                <th onclick="window.location.href = 'visualizza.php?param=data'">Data</th>
                <th onclick="window.location.href = 'visualizza.php?param=gruppo'">Gruppo</th>
            </tr>
            <?php
            error_reporting(0);
            include 'connessione.php';

            $sql = "SELECT * FROM `rifiuti`";
            $rawResult = mysqli_query($conn, $sql);
            $result = [];
            while ($row = mysqli_fetch_row($rawResult)) {
                array_push($result, $row);
            }

            if ($_GET["param"] == "modello") {
                function compare_modello($a, $b)
                {
                    return strnatcmp(strtolower($a[1]), strtolower($b[1]));
                }
                usort($result, 'compare_modello');
            }
            if ($_GET["param"] == "marca") {
                function compare_marca($a, $b)
                {
                    return strnatcmp(strtolower($a[2]),  strtolower($b[2]));
                }

                usort($result, 'compare_marca');
            }
            if ($_GET["param"] == "data") {
                function compare_data($a, $b)
                {   
                    return max($b[3], $a[3]);
                }

                usort($result, 'compare_data');
            }
            if ($_GET["param"] == "gruppo") {
                function compare_gruppo($a, $b)
                {
                    return $a[4] - $b[4];
                }

                usort($result, 'compare_gruppo');
            }

            for ($i = 0; $i < count($result); $i++) {
                echo "<tr>";
                echo "<td>" . $result[$i][1] . "</td>";
                echo "<td>" . $result[$i][2] . "</td>";
                echo "<td>" . $result[$i][3] . "</td>";
                echo "<td>" . $result[$i][4] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>

</body>

</html>