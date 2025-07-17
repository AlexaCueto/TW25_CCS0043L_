<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Volume Shape Formula</title>
    <style>
        body {
            background: #f5f8ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #1a237e;
            margin-top: 40px;
            font-weight: 700;
            letter-spacing: 1.2px;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            max-width: 900px;
            margin: 30px auto 60px auto;
            background: #fff;
            box-shadow: 0 4px 16px rgba(0,0,64,0.08);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border: 2px solid #1a237e;
            padding: 16px 12px;
            text-align: center;
            color: #1a237e;
            font-size: 1.05em;
        }

        th {
            background: #1a237e;
            color: #fff;
            font-size: 1.2em;
        }

        tr.shape-title td {
            font-weight: bold;
            font-size: 1.1em;
            color: #1a237e;
            border-top: 4px double #1a237e;
        }

        tr.shape-title.cube td {
            background: #d0e6ff; 
        }

        tr.shape-title.cube td:hover {
            background:rgb(67, 128, 198); 
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        tr.shape-title.prism td {
            background: #c2f0ea;
        }

        tr.shape-title.prism td:hover {
            background: rgb(106, 181, 141); 
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        tr.shape-title.cylinder td {
            background: #e2d9f3; 
        }

        tr.shape-title.cylinder td:hover {
            background: rgb(150, 123, 182); 
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        tr.shape-title.pyramid td {
            background: #ffe2c2; 
        }

        tr.shape-title.pyramid td:hover {
            background: rgb(255, 170, 102); 
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        tr.shape-title.cone td {
            background: #ffd1dc; 
        }

        tr.shape-title.cone td:hover {
            background: rgb(255, 105, 135); 
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        tr.shape-title.sphere td {
            background: #fff6c2; 
        }

        tr.shape-title.sphere td:hover {
            background: rgb(255, 230, 102); 
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }

        tbody tr:hover {
            background-color: rgba(26, 35, 126, 0.1);
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Volume of Shapes</h1>
    <?php
    //User-defined functions
    function volumeCube($side) {
        return pow($side, 3);
    }

    function volumeRectangularPrism($length, $width, $height) {
        return $length * $width * $height;
    }

    function volumeCylinder($radius, $height) {
        return pi() * pow($radius, 2) * $height;
    }

    function volumePyramid($baseArea, $height) {
        return ($baseArea * $height) / 3;
    }

    function volumeCone($radius, $height) {
        return (1/3) * pi() * pow($radius, 2) * $height;
    }

    function volumeSphere($radius) {
        return (4/3) * pi() * pow($radius, 3);
    }

    //Values
    $side = 15;

    $length = 10; $width = 12; $height = 8;

    $radiusCylinder = 7;
    $heightCylinder = 20;

    $baseAreaPyramid = 50;
    $heightPyramid = 15;

    $radiusCone = 5;
    $heightCone = 12;

    $radiusSphere = 8;

    echo "<table>";
    echo "<tr>
            <th>Value</th>
            <th>Formula</th>
            <th>Answer</th>
          </tr>";

    //Cube
    echo '<tr class="shape-title cube"><td colspan="3">Cube</td></tr>';
    echo "<tr>
            <td>s = $side</td>
            <td>V = s<sup>3</sup></td>
            <td>" . volumeCube($side) . "</td>
          </tr>";

    //Rectangular Prism
    echo '<tr class="shape-title prism"><td colspan="3">Right Rectangular Prism</td></tr>';
    echo "<tr>
            <td>l = $length, w = $width, h = $height</td>
            <td>V = l × w × h</td>
            <td>" . volumeRectangularPrism($length, $width, $height) . "</td>
          </tr>";

    //Cylinder
    echo '<tr class="shape-title cylinder"><td colspan="3">Cylinder</td></tr>';
    echo "<tr>
            <td>r = $radiusCylinder, h = $heightCylinder</td>
            <td>V = πr<sup>2</sup>h</td>
            <td>" . round(volumeCylinder($radiusCylinder, $heightCylinder), 2) . "</td>
          </tr>";

    //Pyramid
    echo '<tr class="shape-title pyramid"><td colspan="3">Pyramid</td></tr>';
    echo "<tr>
            <td>Base Area = $baseAreaPyramid, h = $heightPyramid</td>
            <td>V = (1/3) × Base Area × h</td>
            <td>" . round(volumePyramid($baseAreaPyramid, $heightPyramid), 2) . "</td>
          </tr>";

    //Cone
    echo '<tr class="shape-title cone"><td colspan="3">Cone</td></tr>';
    echo "<tr>
            <td>r = $radiusCone, h = $heightCone</td>
            <td>V = (1/3)πr<sup>2</sup>h</td>
            <td>" . round(volumeCone($radiusCone, $heightCone), 2) . "</td>
          </tr>";

    //Sphere
    echo '<tr class="shape-title sphere"><td colspan="3">Sphere</td></tr>';
    echo "<tr>
            <td>r = $radiusSphere</td>
            <td>V = (4/3)πr<sup>3</sup></td>
            <td>" . round(volumeSphere($radiusSphere), 2) . "</td>
          </tr>";

    echo "</table>";
    ?>
</body>
</html>
