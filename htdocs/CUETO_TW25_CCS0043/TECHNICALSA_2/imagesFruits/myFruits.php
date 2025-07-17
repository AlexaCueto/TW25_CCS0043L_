<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My 10 Fruits</title>
    <style>
    body {
        background: linear-gradient(135deg, #ffe1e1 0%, rgb(238, 140, 152) 100%);
        font-family: 'Quicksand', 'Segoe UI', Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #e63946;
        font-size: 2.5em;
        margin-top: 32px;
        letter-spacing: 1px;
        text-shadow: 1px 2px 6px #ffe8e8, 0 0 10px #ff7f7f;
    }

    table {
        margin: 40px auto;
        width: 92%;
        max-width: 1000px;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(255, 110, 110, 0.2);
        background: #fff0f3;
    }

    thead th {
        background: linear-gradient(to right, #ff6f91, #ff9671);
        color: #fff;
        padding: 16px 12px;
        font-size: 1.15em;
        letter-spacing: 1px;
        border-bottom: 4px solid #ffdab9;
        text-shadow: 0 0 3px #ffafcc;
    }

    tbody td {
        padding: 16px 12px;
        text-align: center;
        color: #d1495b;
        background-color: rgba(255, 250, 250, 0.9);
        font-size: 1.05em;
        border-bottom: 2px solid #ffc4d6;
    }

    tbody tr:hover {
        background-color:rgb(177, 63, 82);
        transition: background-color 0.3s ease-in-out;
        cursor: pointer;
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(255, 105, 135, 0.3);
    }

    td[data-label='Image'] img {
        width: 90px;
        height: 90px;
        object-fit: cover;
        border-radius: 12px;
        border: 3px solid #ff85a2;
        box-shadow: 0 3px 10px rgba(255, 102, 133, 0.3);
        background: #fffafc;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    td[data-label='Image'] img:hover {
        transform: scale(1.2) rotate(2deg);
        box-shadow: 0 6px 20px rgba(255, 102, 133, 0.6);
    }


    @media (max-width: 768px) {

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        thead {
            display: none;
        }

        tbody tr {
            margin-bottom: 18px;
            background: #fff6f8;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(255, 140, 160, 0.15);
        }

        tbody td {
            border: none;
            padding: 12px 20px 12px 45%;
            text-align: left;
            position: relative;
            border-bottom: 1px solid #ffdce5;
        }

        tbody td:before {
            content: attr(data-label);
            position: absolute;
            left: 16px;
            top: 14px;
            font-weight: bold;
            color: #e63946;
            white-space: nowrap;
        }

        td[data-label='Image'] img {
            width: 70px;
            height: 70px;
        }
    }
    </style>
</head>

<body>
    <h1>My Ten Fruits</h1>
    <?php

    //array of fruits
    $myFruits = array(
        array(
            "name" => "Cherry",
            "image" => "../imagesFruits/cherry.jpg",
            "description" => "A small, round fruit that is typically red or black.",
            "facts" => "Cherries are known for their sweet and tart flavors, and they are often used in desserts."
        ),
        array(
            "name" => "Apple",
            "image" => "../imagesFruits/apple.jpg",
            "description" => "This crisp, sweet fruit typically comes in shades of red or green.",
            "facts" => "Apples are packed with beneficial fiber and a good source of vitamin C."
        ),
        array(
            "name" => "Banana",
            "image" => "../imagesFruits/banana.avif",
            "description" => "A mellow and sweet fruit, easily recognized by its long, yellow casing.",
            "facts" => "Bananas are well-regarded for their high potassium content."
        ), 
        array(
            "name" => "Grapes",
            "image" => "../imagesFruits/grapes.webp",
            "description" => "Small, globular fruits that naturally cluster together.",
            "facts" => "Grapes can be eaten fresh, processed as juice or dried as raisins."
        ),
        array(
            "name" => "Mango",
            "image" => "../imagesFruits/mango.jpg",
            "description" => "A succulent, sweet tropical fruit with a large central pit.",
            "facts" => "Mangoes are known as the 'king of fruits'."
        ),
        array(
            "name" => "Kiwi",
            "image" => "../imagesFruits/kiwi.jpg",
            "description" => "A diminutive brown fruit revealing vibrant green flesh upon cutting.",
            "facts" => "Kiwis provide a substantial amount of vitamin C and are good for dietary fiber."
        ),
        array(
            "name" => "Papaya",
            "image" => "../imagesFruits/papaya.jpg",
            "description" => "A tropical fruit with a sweet, orange flesh and black seeds.",
            "facts" => "Papayas are rich in antioxidants and enzymes that aid digestion."
        ),
        array(
            "name" => "Orange",
            "image" => "../imagesFruits/orange.jpg",
            "description" => "A citrus fruit that is typically orange in color.",
            "facts" => "Oranges are an excellent source of vitamin C."
        ),
        array(
            "name" => "Dragon Fruit",
            "image" => "../imagesFruits/dragon _fruit.webp",
            "description" => "A unique fruit with a vibrant pink skin and white or red flesh dotted with tiny black seeds.",
            "facts" => "Dragon fruit is low in calories and high in vitamin C."
        ),
        array(
            "name" => "Guava",
            "image" => "../imagesFruits/guava.webp",
            "description" => "A tropical fruit with a sweet, fragrant flesh that can be pink or white.",
            "facts" => "Guavas are rich in dietary fiber and vitamin C, and they have a unique aroma."
        )
    );

    //alphabetically arranged
    $fruitsSort = array();
    foreach ($myFruits as $key => $fruit) {
        $fruitsSort[$key] = $fruit['name'];
    }
    asort($fruitsSort);
    echo "<table>";
    echo "<thead><tr><th>Name</th><th>Image</th><th>Description</th><th>Facts</th></tr></thead>";
    echo "<tbody>";
    foreach ($fruitsSort as $key => $name) {
        $fruit = $myFruits[$key];
        echo "<tr>";
        echo "<td data-label='Name'>{$fruit['name']}</td>";
        echo "<td data-label='Image'><img src='{$fruit['image']}' alt='{$fruit['name']}' style='width:100px;height:100px;'></td>";
        echo "<td data-label='Description'>{$fruit['description']}</td>";
        echo "<td data-label='Facts'>{$fruit['facts']}</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>

</body>

</html>