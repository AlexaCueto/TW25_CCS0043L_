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
            <h2> Name: <?=$studentName; ?></h2>
            <div class ="profile-photo">
                <img src = "cuetoprofilepicture.jpg" alt="Profile Photo" width="200px" height="200px">
            </div>
        </div>

        <?php
    $grade = 98;
    $rank = " ";
    $rankDescription = " ";

    if ($grade >=93 && $grade <=100){
        $rank = "Rank: A";
        $rankDescription ="rank-a";
    }elseif ($grade >=90 && $grade <=92){
        $rank ="Rank: A-";
        $rankDescription ="rank-a-minus";
    }elseif ($grade >=87 && $grade <=89){
        $rank = "Rank: B+";
        $rankDescription ="rank-b-plus";
    }elseif ($grade >=83 && $grade <=86){
        $rank = "Rank: B";
        $rankDescription ="rank-b";
    }elseif ($grade >=80 && $grade <=82){
        $rank = "Rank: B-";
        $rankDescription ="rank-b-minus";
    }elseif ($grade >=77 && $grade <=79){
        $rank = "Rank: C+";
        $rankDescription ="rank-c-plus";
    }elseif ($grade >=73 && $grade <=76){
        $rank = "Rank: C";
        $rankDescription ="rank-c";
    }elseif ($grade >=70 && $grade <=72){
        $rank = "Rank: C-";
        $rankDescription ="rank-c-minus";
    }elseif ($grade >=67 && $grade <=69){
        $rank = "Rank: D+";
        $rankDescription ="rank-d-plus";
    }elseif ($grade >=63 && $grade <=66){
        $rank = "Rank: D";
        $rankDescription ="rank-d";
    }elseif ($grade >=60 && $grade <=62){
        $rank = "Rank: D-";
        $rankDescription ="rank-d-minus";
    }elseif ($grade <=60){
        $rank = "Rank: F";
        $rankDescription ="rank-f";
    }else{
        $rank = "Invalid Grade";
        $rankDescription ="invalid-grade";
    }
    ?>
     <div class="rank-container">
            <h3 class="<?= $rankDescription; ?>"> <?= $rank; ?> </h3>
        </div>
        <h4>Grade: <?= $grade; ?></h4>
    </div>

</body>
</html>