<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Twenty Names</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
            background-color:rgba(45, 45, 45, 0.7);
            color: #e0d6cd;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background-image: linear-gradient(to top, #1c1c1c, #3b2f2f);
        }
        
        h1{
            margin-top: 30px;
            font-size: 2em;
            color: #ffeccf;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
            border-bottom: 2px solid #ffeccf;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        table {
            width: 90%;
            max-width: 1100px;
            border-collapse: collapse;
            background-color: #3d2e2e;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 40px;
        }

        table th {
            background-color: #294023;
            color: #ffeccf;
            padding: 14px 18px;
            text-align: center;
            font-size: 1.15em;
            border: 1px solid #6f553f;
            user-select: none;
            text-shadow: 1px 1px 2px #000;
        }

        table td {
            padding: 12px 18px;
            border: 1px solid #6f553f;
            text-align: center;
            font-size: 1em;
            background-color: #403535;
            transition: background-color 0.3s ease;
        }

        table tbody tr:nth-child(odd) td {
            background-color: #6f553f;
        }

        table tbody tr:nth-child(even) td {
            background-color: #4a3a2f;
        }

        table tbody tr:hover td {
            background-color: #294023;
            color: #ffeccf;
            cursor: default;
        }

        table caption {
            caption-side: top;
            font-size: 1.4em;
            font-weight: bold;
            color: #ffeccf;
            padding: 12px 0;
            text-shadow: 1px 1px 3px #000;
        }

        @media (max-width: 600px) {
            table, thead, tbody, th, td,tr {
                display: block;
                width: 90%;
            }

            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tbody tr {
                margin-bottom: 1.2rem;
                border: 1px solid #6f553f;
                border-radius: 8px;
                background-color: #403535;
                box-shadow: 0 0 10px rgba(64, 53, 53, 0.7);
            }

            tbody td {
                border: none;
                border-bottom: 1px solid #6f553f;
                position: relative;
                padding-left: 50%;
                text-align: left;
                background-color: transparent;
            }

            tbody td:before {
                position: absolute;
                top: 12px;
                left: 18px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                font-weight: bold;
                color: #ffeccf;
                text-shadow: 1px 1px 2px #000;
            }
        }
    </style>
</head>

<body>
    <h1>Attack on Titan Characters</h1>

    <?php

    $names = array(
        "eren Yeager", "mikasa Ackerman", "armin Arlert", "levi Ackerman", "erwin Smith",
        "jean Kirstein", "sasha Blouse", "connie Springer", "reiner Braun", "annie Leonhart",
        "hange Zoë", "zeke Yeager", "hitch Dreyse", "falco Grice", "pieck Finger",
        "historia Reiss", "ymir Fritz", "bertolot Hoover", "dot Pixis", "hannes"
    );

    echo '<table>';
    echo '<thead><tr>';
    echo '<th>Name</th>';
    echo '<th>Number of characters</th>';
    echo '<th>Uppercase first character</th>';
    echo '<th>Replace vowels with @</th>';
    echo '<th>Check position of character "a"</th>';
    echo '<th>Reverse name</th>';
    echo '</tr></thead><tbody>';

    foreach ($names as $name) {
        $nameLength = strlen($name);
        $upperCaseName = ucfirst($name);
        $replacedVowels = str_replace(array('a', 'e', 'i', 'o', 'u'), '@', strtolower($name));

        //find positions of character 'a'
        $positions = [];
        $nameLower = strtolower($name); 
        for ($i = 0; $i < strlen($nameLower); $i++) {
            if ($nameLower[$i] === 'a') {
            $positions[] = $i;
            }
        }
        $positionOfA = !empty($positions) ? implode(', ', $positions) : "Not found";

        $reversedName = strrev($name);

        echo '<tr>';
        echo "<td data-label='Name'>$name</td>";
        echo "<td data-label='Number of characters'>$nameLength</td>";
        echo "<td data-label='Uppercase first character'>$upperCaseName</td>";
        echo "<td data-label='Replace vowels with @'>$replacedVowels</td>";
        echo "<td data-label='Position of a'>$positionOfA</td>";
        echo "<td data-label='Reverse name'>$reversedName</td>";
        echo '</tr>';
    }

    echo '</tbody></table>';

    ?>

</body>

</html>
