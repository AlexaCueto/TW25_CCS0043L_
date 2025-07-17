    <?php
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "dogdb";

        //connection
        $conn = new mysqli($server, $user, $password, $database);

        //check connection
        if($conn->connect_error){
            die("Connection to the database has failed: " . $conn->connect_error);
        }

        $message = "";

        //check if the form is submitted
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $breed = $_POST['breed'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $color = $_POST['color'];
            $height = $_POST['height'];
            $weight = $_POST['weight'];

            //inserting data to dogdb
            $sql = "INSERT INTO dog (name, breed, age, address, color, height, weight)
                    VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";
            
            if($conn->query($sql) === TRUE){
                $message = "<p style = 'color:green;'>Dog registered successfully!</p>";
            } else {
                $message = "<p style ='color: red;'>Error: " . $conn->error . "</p>";
            }
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dog Registration</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fff8f0;
            margin: 0;
            padding: 60px 20px; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        form {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(255, 186, 113, 0.3);
            width: 600px;
            max-width: 90%; 
            padding: 50px 40px;
            box-sizing: border-box;
            text-align: center;
            margin: 40px 0; 
        }

        form h1 {
            color: #ff8c00;
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 2rem;
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        form img {
            width: 100px;
            margin-bottom: 15px;
        }

        label {
            display: block;
            text-align: left;
            margin: 14px 0 6px 0;
            font-weight: 600;
            color: #cc7a00;
            font-size: 1rem;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px 14px;
            border: 1.8px solid #ffba71;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(255, 186, 113, 0.5);
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            outline: none;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #ff8c00;
            box-shadow: 0 4px 12px rgba(255, 140, 0, 0.6);
        }

        input[type="submit"] {
            margin-top: 30px;
            width: 100%;
            background-color: #ffba71;
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-size: 1.15rem;
            font-weight: 700;
            color: #5a2e00;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(255, 186, 113, 0.7);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff8c00;
            box-shadow: 0 6px 15px rgba(255, 140, 0, 0.9);
            color: #fff;

        .message {
        margin-top: 20px;
        font-size: 1rem;
        text-align: center;
        }

        .message.success {
            color: green;
        }

        .message.error {
            color: red;
        }
    }
    </style>
    </head>
    <body>
    <form method="POST">
        <img src="dogIcon.png" alt="Cute Dog Icon" />
        <h1>Dog Registration Form</h1>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="breed">Breed:</label>
        <input type="text" id="breed" name="breed" required />

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required />

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required />

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required />

        <label for="height">Height (feet):</label>
        <input type="text" id="height" name="height" required />

        <label for="weight">Weight (kg):</label>
        <input type="text" id="weight" name="weight" required />

        <input type="submit" name="submit" value="Register Dog" />
        <?php if (!empty($message)) echo $message; ?>
    </form>
</body>
</html>
