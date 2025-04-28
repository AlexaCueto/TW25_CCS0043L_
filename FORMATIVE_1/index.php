<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alexa Cueto Resume</title>
    
</head>
<body>
    <?php
        $fullName = "Alexa Joyce G. Cueto";
        $course = "BSIT - Web and Mobile Technology Student";
        $address = "4938 Enrique Street, Palanan, Makati";
        $mobileNumber = "09455574721";
        $age = 20;
        $heading2 = "About Me";
        $aboutMe = "A passionate and hard-working programming student specializing in web and software development.
                I thrive in collaborative environments and enjoy problem-solving through creativity and logical thinking.
                Prior to programming, I explored fashion, writing, and theater production, enhancing my communication,
                time management, and creativity skills.";
        $heading3 = "Education";
        $elementary = "St. Joseph's Institute Inc.";
        $elementaryYear = "(2010-2017)";
        $jhs = "CNHS Special Science";
        $jhsYear = "(2017 -2021)";
        $shs = "San Beda University Manila";
        $shsYear = "(2021-2023)";
        $college = "FEU Institute of Technology";
        $collegeYear = "(2023 - Present)";
        $heading4 = "Skills";
        $Skills = array("HTML, CSS, Javascript", "C++, Java", "Adobe Photoshop, Adobe Illustrator",
                        "Microsoft Office", "Research Writing", "Digital Drawing, Design");
    ?>
    
    <div class="resume-container">
        <button type="button" onclick="changeColor()">Change Color</button>
        <header class = "top-section">  <!-- this is for my profile part -->
            <div class ="profile-photo">
                <img src = "../FORMATIVE_1/alexaProfile.jpg" alt="Alexa Cueto Profile Picture">
            </div>
            <div class ="profile-info">
                <h1><?= $fullName; ?></h1>
                <hr> <!-- horizontal rule -->
                <p><?= $course; ?></p>
                <p><?= $fullName; ?></p>
                <p><?= $age; ?></p>
                <p><?= $address; ?></p>
                <p><?= $mobileNumber; ?></p>
            </div>
        </header>

        <!-- for the body section -->
        <section class="about-me">
            <h2><?= $heading2; ?></h2>
            <p><?= $aboutMe; ?></p>
        </section>


        <!-- left section -->
         <div class="main-content">
            <section class="left-section">
                <h2><?= $heading3; ?></h2>
                <p><strong><?= $elementary; ?></strong> <?= $elementaryYear; ?></p>
                <p><strong><?= $jhs; ?></strong> <?= $jhsYear; ?></p>
                <p><strong><?= $shs; ?></strong> <?= $shsYear; ?></p>
                <p><strong><?= $college; ?></strong> <?= $collegeYear; ?></p>
            </section>

         <!-- right section -->
          <section class="right-section">
            <h2><?= $heading4; ?></h2>
            <ul>
                <li><?= $Skills[0]; ?></li>
                <li><?= $Skills[1]; ?></li>
                <li><?= $Skills[2]; ?></li>
                <li><?= $Skills[3]; ?></li>
                <li><?= $Skills[4]; ?></li>
                <li><?= $Skills[5]; ?></li>
            </ul>
          </section>
        </div>
        
    </div>

    <script>
        function changeColor() {
            let resumeContainer = document.querySelector('.resume-container');
            let isColorDark = resumeContainer.classList.toggle('dark-theme');
        
            if (isColorDark) {
                resumeContainer.style.backgroundColor = '#712929';
                resumeContainer.style.color = 'white';
            } else {
                resumeContainer.style.backgroundColor = '#f4f4f4';
                resumeContainer.style.color = 'black';
            }
        }        
    </script>
</body>
</html>