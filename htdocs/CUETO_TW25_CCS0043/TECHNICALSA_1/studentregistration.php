<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Registration</title>
    <style>

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, rgb(204, 224, 253) 0%, #ffffff 100%);
        margin: 50px auto;
        color: #2c3e50;
        max-width: 850px;
        padding: 0 20px;
    }
    
    /*Header*/
    h2 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #1a2a6c;
        text-align: center;
        margin-bottom: 40px;
        letter-spacing: 2px;
        text-shadow: 1px 1px 2px #a3b1c6;
    }

    form {
        background: #f7f9fc;
        border-radius: 12px;
        padding: 35px 50px;
        box-shadow: 0 8px 20px rgba(26, 42, 108, 0.15);
        border: 1px solid #d1d9e6;
    }

    /*Section headers*/
    .section {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: #34495e;
        border-left: 10px solid #1a2a6c;
        border-right: 10px solid #1a2a6c;
        padding-left: 12px;
        margin-top: 40px;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
    }

    /*Labels*/
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        font-size: 1rem;
        color: #34495e;
    }

    label.important {
        color: #1a2a6c;
        font-size: 1.1rem;
        margin-top: 25px;
    }

    /*Inputs and selects*/
    input[type="text"], input[type="date"], select {
        width: 100%;
        padding: 10px 14px;
        font-size: 1rem;
        border: 1.8px solid #aab7c4;
        border-radius: 8px;
        background: #ffffff;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #2c3e50;
    }

    input[type="text"]:focus, input[type="date"]:focus, select:focus {
        border-color: #1a2a6c;
        box-shadow: 0 0 8px #1a2a6caa;
        outline: none;
        background: #f0f4ff;
    }

    /*Checkbox */
    .checkbox-group label {
        font-weight: 500;
        font-size: 0.95rem;
        color: #3a4a6d;
        margin-top: 12px;
        cursor: pointer;
        display: block;
    }

    input[type="checkbox"] {
        transform: scale(1.1);
        margin-right: 10px;
        vertical-align: middle;
    }

    /*Full name*/
    .full-name-inputs>input {
        display: block;
        width: 100%;
        margin-bottom: 18px;
        border-radius: 8px;
    }

    /*Preferred name*/
    .preferred-name-inputs {
        display: flex;
        gap: 16px;
        margin-bottom: 25px;
    }

    .preferred-name-inputs>input {
        flex: 1;
        border-radius: 8px;
        padding: 10px 14px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        border: 1.8px solid #aab7c4;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .preferred-name-inputs>input:focus {
        border-color: #1a2a6c;
        box-shadow: 0 0 8px #1a2a6caa;
        background: #f0f4ff;
        outline: none;
    }

    /*Submit button*/
    input[type="submit"] {
        background: #1a2a6c;
        color: #f0f4ff;
        font-weight: 700;
        font-size: 1.15rem;
        padding: 14px 0;
        border: none;
        border-radius: 10px;
        width: 100%;
        cursor: pointer;
        margin-top: 40px;
        box-shadow: 0 5px 15px rgba(26, 42, 108, 0.4);
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background:rgb(92, 117, 189);
    }

    /*Output container*/
    .output {
        background: #e9efff;
        border-radius: 10px;
        padding: 30px 40px;
        margin: 40px auto;
        max-width: 850px;
        box-shadow: inset 0 0 12px #a3b1c6cc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #1a2a6c;
        font-size: 1.05rem;
        line-height: 1.6;
    }

    /*Horizontal rule*/
    hr {
        border: none;
        border-top: 1.5px solid #d1d9e6;
        margin: 30px 0;
    }

    /*Responsive*/
    @media (max-width: 600px) {
        .preferred-name-inputs {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>

    <h2>Student Registration Form</h2>

    <?php
if (isset($_POST['studentNumber'])) {

    //formatting data
    $lastName = ucwords(strtolower(trim($_POST['lastName'])));
    $firstName = ucwords(strtolower(trim($_POST['firstName'])));
    $middleName = ucwords(strtolower(trim($_POST['middleName'])));
    $preferredLastName = ucwords(strtolower(trim($_POST['preferredLastName'])));
    $preferredFirstName = ucwords(strtolower(trim($_POST['preferredFirstName'])));
    $preferredMiddleName = ucwords(strtolower(trim($_POST['preferredMiddleName'])));
    $siblings = ucwords(strtolower(trim($_POST['siblings'])));
    $prevSchoolBoard = ucwords(strtolower(trim($_POST['prevSchoolBoard'])));
    $prevSchoolName = ucwords(strtolower(trim($_POST['prevSchoolName'])));
    $reasonOfTransfer = ucwords(strtolower(trim($_POST['reasonOfTransfer'])));
    $wrsbSchools = ucwords(strtolower(trim($_POST['wrsbSchools'])));
    $birthCountry = ucwords(strtolower(trim($_POST['birthCountry'])));
    $province = ucwords(strtolower(trim($_POST['province'])));
    $citizenship = ucwords(strtolower(trim($_POST['citizenship'])));
    $otherStatus = ucwords(strtolower(trim($_POST['otherStatus'])));
    $verification = ucwords(strtolower(trim($_POST['verification'])));
    $entryDate = trim($_POST['entryDate']);
    $birthDate = trim($_POST['birthDate']);
    $lastAttendedDate = trim($_POST['lastAttendedDate']);
    $firstEntryDate = trim($_POST['firstEntryDate']);
    $studentNumber = trim($_POST['studentNumber']);
    $entryType = trim($_POST['entryType']);
    $grade = trim($_POST['grade']);
    $oen = trim($_POST['oen']);
    $isExpelled = isset($_POST['isExpelled']) ? "Yes" : "No";
    $gender = $_POST['gender'];
    $prevGrade = trim($_POST['prevGrade']);
    $language = $_POST['language'];
    $medicalConditions = ($_POST['medicalConditions']);
    $hasImmunizationRecord = isset($_POST['hasImmunizationRecord']) ? "Yes" : "No";
    $requiresEpiPen = isset($_POST['requiresEpiPen']) ? "Yes" : "No";
    $attendedPublicScBefore = isset($_POST['attendedPublicScBefore']) ? "Yes" : "No";
    $proofOfBirth = isset($_POST['proofOfBirth']);
    $statusInPH = isset($_POST['statusInPH']);

    //for outputting the submitted data
    echo "<div class='output'><h2>Submitted Registration Data</h2>";
    echo "<strong>Student Number:</strong> $studentNumber<br>";
    echo "<strong>Entry Date:</strong> $entryDate<br>";
    echo "<strong>Entry Type:</strong> $entryType<br>";
    echo "<strong>Grade:</strong> $grade<br>";
    echo "<strong>OEN:</strong> $oen<br>";
    echo "<strong>Currently Expelled:</strong> $isExpelled<br><hr>";

    echo "<strong>Full Name:</strong> $lastName, $firstName $middleName<br>";
    echo "<strong>Preferred Name:</strong> $preferredLastName, $preferredFirstName $preferredMiddleName<br>";
    echo "<strong>Gender:</strong> $gender<br>";
    echo "<strong>Date of Birth:</strong> $birthDate<br>";
    echo "<strong>Siblings in School:</strong> $siblings<br>";
    echo "<strong>Proof of Birth:</strong> $proofOfBirth<br><hr>";

    echo "<strong>Previous School Board:</strong> $prevSchoolBoard<br>";
    echo "<strong>Previous School:</strong> $prevSchoolName<br>";
    echo "<strong>Last Date Attended:</strong> $lastAttendedDate<br>";
    echo "<strong>Grade at Previous School:</strong> $prevGrade<br>";
    echo "<strong>Language of Instruction:</strong> $language<br>";
    echo "<strong>Reason for Transfer:</strong> $reasonOfTransfer<br>";
    echo "<strong>Attended WRDSB Before:</strong> $attendedPublicScBefore<br>";
    echo "<strong>WRDSB Schools:</strong> $wrsbSchools<br><hr>";

    echo "<strong>Medical Conditions:</strong> $medicalConditions<br>";
    echo "<strong>Immunization Record Provided:</strong> $hasImmunizationRecord<br>";
    echo "<strong>Requires Epi-Pen:</strong> $requiresEpiPen<br><hr>";

    echo "<strong>Birth Country:</strong> $birthCountry<br>";
    echo "<strong>Province of Birth:</strong> $province<br>";
    echo "<strong>Country of Citizenship:</strong> $citizenship<br>";
    echo "<strong>First Entry to Philippines:</strong> $firstEntryDate<br>";
    echo "<strong>Status in [Philippines]:</strong> $statusInPH<br>";
    echo "<strong>Other Status:</strong> $otherStatus<br>";
    echo "<strong>Verification in OSR:</strong> $verification<br>";
    echo "</div>";
}
?>

    <form method="post" action="">
        <div class="section"><strong>For School Use - Permission to Register:</strong></div>
        <label class="important">Student Number:</label>
        <input type="text" name="studentNumber" required>

        <label class="important">Entry Date:</label>
        <input type="text" name="entryDate" placeholder="YYYY-MM-DD" required>

        <label>Entry Type:</label>
        <input type="text" name="entryType">

        <label>Grade:</label>
        <input type="text" name="grade">

        <label>OEN:</label>
        <input type="text" name="oen">

        <div class="checkbox-group">
            <label><input type="checkbox" name="isExpelled"> Is the student currently expelled from any school or school
                board?</label>
        </div>

        <div class="section"><strong>Student Information</strong></div>

        <label class="important">Full Legal Name:</label>
        <div class="full-name-inputs">
            <input type="text" name="lastName" placeholder="Last Name" required>
            <input type="text" name="firstName" placeholder="First Name" required>
            <input type="text" name="middleName" placeholder="Middle Name">
        </div>

        <label>Preferred Name:</label>
        <div class="preferred-name-inputs">
            <input type="text" name="preferredLastName" placeholder="Last Name">
            <input type="text" name="preferredFirstName" placeholder="First Name">
            <input type="text" name="preferredMiddleName" placeholder="Middle Name">
        </div>

        <label>Gender:</label>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label class="important">Date of Birth:</label>
        <input type="text" name="birthDate" placeholder="YYYY-MM-DD" required>

        <label>If the student has other siblings in this school, please list them:</label>
        <input type="text" name="siblings">

        <label>Proof of Birth:</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="proofOfBirth[]" value="Copy in OSR"> Copy in OSR</label>
            <label><input type="checkbox" name="proofOfBirth[]" value="Regional Record"> Regional Record</label>
            <label><input type="checkbox" name="proofOfBirth[]" value="Birth Registration"> Birth Registration</label>
            <label><input type="checkbox" name="proofOfBirth[]" value="Birth Certificate"> Birth Certificate</label>
            <label><input type="checkbox" name="proofOfBirth[]" value="Immigration Papers/Card"> Immigration
                Papers/Card</label>
            <label><input type="checkbox" name="proofOfBirth[]" value="Passport"> Passport</label>
            <label><input type="checkbox" name="proofOfBirth[]" value="Other"> Other</label>
        </div>

        <div class="section"><strong>Previous School Information</strong></div>

        <label>Name of Previous School Board / Municipality:</label>
        <input type="text" name="prevSchoolBoard">

        <label>Name of Previous School:</label>
        <input type="text" name="prevSchoolName">

        <label>Last date attended:</label>
        <input type="text" name="lastAttendedDate" placeholder="YYYY-MM-DD">

        <label>Grade at previous school:</label>
        <input type="text" name="prevGrade">

        <label>Language of Instruction:</label>
        <select name="language">
            <option value="English">English</option>
            <option value="Filipino">Filipino</option>
            <option value="Other">Other</option>
        </select>

        <label>Reason for Transfer:</label>
        <input type="text" name="reasonOfTransfer">

        <div class="checkbox-group">
            <label><input type="checkbox" name="attendedPublicScBefore"> Has the student previously attended a public
                school under the Department of Education (DepEd)?</label>
        </div>

        <label>If yes, name school(s):</label>
        <input type="text" name="wrsbSchools">

        <div class="section"><strong>Health Information</strong></div>

        <label>Medical Conditions (include info on special equipment or medication):</label>
        <input type="text" name="medicalConditions">

        <div class="checkbox-group">
            <label><input type="checkbox" name="hasImmunizationRecord"> Immunization Record provided</label>
            <label><input type="checkbox" name="requiresEpiPen"> Does the student require an epi-pen?</label>
        </div>

        <div class="section"><strong>Citizenship Information</strong></div>

        <label>Birth Country:</label>
        <input type="text" name="birthCountry">

        <label>If in the Philippines, Province of Birth:</label>
        <input type="text" name="province">

        <label>Country of Citizenship:</label>
        <input type="text" name="citizenship">

        <label>If student not born in the Philippines, provide date student entered the Philippines to live for the
            first time:</label>
        <input type="text" name="firstEntryDate" placeholder="YYYY-MM-DD">

        <label>Status in Philippines:</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="statusInPH[]" value="Filipino Citizen"> Filipino Citizen</label>
            <label><input type="checkbox" name="statusInPH[]" value="Permanent Resident/Landed Immigrant"> Permanent
                Resident/Landed Immigrant</label>
            <label><input type="checkbox" name="statusInPH[]" value="Study Permit"> Study Permit</label>
            <label><input type="checkbox" name="statusInPH[]" value="Refugee Claimant"> Refugee Claimant</label>
            <label><input type="checkbox" name="statusInPH[]" value="Other"> Other (specify)</label>
        </div>

        <input type="text" name="otherStatus" placeholder="If Other, specify">

        <label>Verification in OSR:</label>
        <input type="text" name="verification">

        <br><br>
        <input type="submit" value="Submit Registration">
    </form>

</body>

</html>