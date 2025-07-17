<?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "dogdb";

//donnection
$conn = new mysqli($servername, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection to the database has failed: " . $conn->connect_error);
}

//fetch data from the dog table
$sql = "SELECT * FROM dog";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dog Records</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fff8f0;
            margin: 0;
            padding: 60px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        .header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .header img {
            width: 60px;
            height: auto;
        }

        .header h2 {
            margin: 0;
            color: #ff8c00;
            font-size: 2rem;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 600px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(255, 186, 113, 0.4);
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
            font-size: 1rem;
        }

        th {
            background-color: #ffba71;
            color: #5a2e00;
            font-weight: 700;
        }

        td {
            background-color: #fff8f0;
            color: #333;
            border-bottom: 1px solid #ffd6a2;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background-color: #fff0e0;
            transition: background-color 0.3s ease;
        }

        @media (max-width: 992px) {
            th, td {
                font-size: 0.95rem;
                padding: 12px 14px;
            }

            .header h2 {
                font-size: 1.7rem;
            }

            table {
                min-width: 550px;
            }
        }

        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                text-align: center;
            }

            .header img {
                width: 50px;
            }

            .header h2 {
                font-size: 1.5rem;
            }

            table {
                min-width: 500px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="dogIcon.png" alt="Dog Icon" />
        <h2>Dog Records</h2>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Dog ID</th>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Color</th>
                    <th>Height in ft</th>
                    <th>Weight in kg</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($rows as $dog) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($dog['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($dog['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($dog['breed']) . "</td>";
                        echo "<td>" . htmlspecialchars($dog['age']) . "</td>";
                        echo "<td>" . htmlspecialchars($dog['address']) . "</td>";
                        echo "<td>" . htmlspecialchars($dog['color']) . "</td>";
                        echo "<td>" . htmlspecialchars($dog['height']) . "</td>";
                        echo "<td>" . htmlspecialchars($dog['weight']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='9'>No records found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
