<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Grade Ranking</title>
</head>

<body>
    <div class="container">
        <h1> Grade Information</h1>
        <?php
        //variable declaration
         $studentName = "Alexa Joyce G. Cueto";
        ?>
        <div class="student-info">
            <h2> Name: <?=$studentName; ?><h2>
            <div class ="profile-photo">
                <img src = "../TECHNICAL_2/number_2/alexaProfile.jpg" alt="Alexa Cueto Profile Picture">
            </div>
        </div>

        <?php
    $grade = 100;
    $rank = " ";

    if ($grade == 100 && $grade >=93){
        echo "Rank A";
    }elseif ($grade >=90 && $grade <=92){
        echo "Rank A-";
    }elseif ($grade >=87 && $grade <=89){
        echo "Rank B+";
    }elseif ($grade >=83 && $grade <=86){
        echo "Rank B";
    }elseif ($grade >=80 && $grade <=82){
        echo "Rank B-";
    }elseif ($grade >=77 && $grade <=79){
        echo "Rank C+";
    }elseif ($grade >=73 && $grade <=76){
        echo "Rank C";
    }elseif ($grade >=70 && $grade <=72){
        echo "Rank C-";
    }elseif ($grade >=67 && $grade <=69){
        echo "Rank D+";
    }elseif ($grade >=63 && $grade <=66){
        echo "Rank D";
    }elseif ($grade >=60 && $grade <=62){
        echo "Rank D-";
    }elseif ($grade <=60){
        echo "Rank F";
    }else{
        echo "Invalid Grade";
    }
    ?>
    </div>

</body>

</html>