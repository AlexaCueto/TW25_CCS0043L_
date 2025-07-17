<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Avengers Characters</title>
<style>
  body {
    background-color: #0b0c10;
    color: #c5c6c7;
    font-family: 'Arial Black', Arial, sans-serif;
    margin: 0;
    padding: 20px;
  }
  h1 {
    text-align: center;
    color: #66fcf1;
    text-shadow: 0 0 10px #45a29e;
    margin-bottom: 30px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #1f2833;
    box-shadow: 0 0 15px #45a29e;
    border-radius: 8px;
    overflow: hidden;
  }
  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #45a29e;
  }
  th {
    background-color: #45a29e;
    color: #0b0c10;
    font-size: 1.1em;
  }
  tr:hover {
    background-color:rgb(158, 239, 233);
    color: #0b0c10;
    cursor: pointer;
  }
  img {
    width: 160px;
    height: 190px;
    border: 2px solid #66fcf1;
    transition: transform 0.3s ease;
  }
  img:hover {
    transform: scale(1.1);
  }

  /* Responsive */
  @media (max-width: 968px) {
    table, thead, tbody, th, td, tr {
      display: block;
    }
    tr {
      margin-bottom: 15px;
      background-color: #1f2833;
      box-shadow: 0 0 10px #45a29e;
      border-radius: 8px;
      padding: 10px;
    }
    th {
      display: none;
    }
    td {
      padding-left: 50%;
      position: relative;
      text-align: right;
      border-bottom: 1px solid #45a29e;
    }
    td::before {
      content: attr(data-label);
      position: absolute;
      left: 15px;
      width: 45%;
      padding-left: 15px;
      font-weight: bold;
      text-align: left;
      color: #66fcf1;
    }
    img {
      margin-left: 100px;
      display: block;
    }
  }
</style>
</head>
<body>

<h1>Avengers Characters</h1>

<?php
$avengers = array(
    1 => array("name" => "Natasha Romanoff", "image" => "..\\natasha_pic.webp" , "age" => 34, "birthday" => "1987-11-22", "contact" => "09367482912"),
    2 => array("name" => "Steve Rogers", "image" => "..\\steve_pic.webp", "age" => 101, "birthday" => "1918-07-04", "contact" => "09234567890"),
    3 => array("name" => "Carol Danvers", "image" => "..\\carol_pic.webp", "age" => 33, "birthday" => "1989-03-17", "contact" => "09267890123"),
    4 => array("name" => "Stephen Strange", "image" => "..\\stephen_pic.jpg", "age" => 42, "birthday" => "1979-11-18", "contact" => "09456789012"),
    5 => array("name" => "Clint Barton", "image" => "..\\clint_pic.webp", "age" => 38, "birthday" => "1983-06-07", "contact" => "09256789012"),
    6 => array("name" => "Burce Banner", "image" => "..\\bruce_pic.webp", "age" => 40, "birthday" => "1981-09-18", "contact" => "09273849567"),
    7 => array("name" => "Tony Stark", "image" => "..\\tony_pic.webp", "age" => 48, "birthday" => "1975-05-29", "contact" => "09384956789"),
    8 => array("name" => "Wanda Maximoff", "image" => "..\\wanda_pic.jpg", "age" => 29, "birthday" => "1994-02-16", "contact" => "09283746578"),
    9 => array("name" => "Peter Parker", "image" => "..\\peter_pic.jpg", "age" => 21, "birthday" => "2003-08-10", "contact" => "09271234567"),
    10 => array("name" => "Thor Odin", "image" => "..\\thor_pic.webp", "age" => 1500, "birthday" => "0000-01-01", "contact" => "09267890123")
);

//alphabetically arranged
$nameSort = array();
foreach ($avengers as $key => $details) {
    $nameSort[$key] = $details['name'];
}
asort($nameSort);  

echo "<table>";
echo "<thead><tr><th>Name</th><th>Image</th><th>Age</th><th>Birthday</th><th>Contact</th></tr></thead>";
echo "<tbody>";
foreach ($nameSort as $key => $name) {
    $hero = $avengers[$key];
    echo "<tr>";
    echo "<td data-label='Name'>{$hero['name']}</td>";
    echo "<td data-label='Image'><img src='images/{$hero['image']}' alt='{$hero['name']}'></td>";
    echo "<td data-label='Age'>{$hero['age']}</td>";
    echo "<td data-label='Birthday'>{$hero['birthday']}</td>";
    echo "<td data-label='Contact'>{$hero['contact']}</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>

</body>
</html>
