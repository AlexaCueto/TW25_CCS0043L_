<?php require('../inc_and_req/header.php'); 

$Skills = array("HTML, CSS, Javascript", "C++, Java", "Adobe Photoshop, Adobe Illustrator",
                        "Microsoft Office", "Research Writing", "Digital Drawing, Design");

?>

<div class="resume-wrapper">
    <h2>Skills</h2>
    <ul>
        <?php
        foreach ($Skills as $skill) {
            echo "<li>$skill</li>";
        }
        ?>
    </ul>
</div>

<?php require('../inc_and_req/footer.php'); ?>

