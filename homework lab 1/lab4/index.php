<?php
session_start();
require_once 'Student.php';
require_once 'StudentManager.php';

$studentManager = isset($_SESSION['studentManager']) ? unserialize($_SESSION['studentManager']) : new StudentManager();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $age = trim($_POST["age"]);
    $grade = trim($_POST["grade"]);

    if (empty($name) || empty($age) || empty($grade)) {
        $error = 'All fields are required.';
    } else {
        $student = new Student($name, $age, $grade);
        $studentManager->addStudent($student);
        $_SESSION['studentManager'] = serialize($studentManager);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h2>Input Student Information</h2>
    <?php if (!empty($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        <label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade"><br><br>
        <input type="submit" value="Add Student">
    </form>

    <h2>Student List</h2>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>
        <?php
        $students = $studentManager->getStudents();
        foreach ($students as $student) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($student->getName()) . '</td>';
            echo '<td>' . htmlspecialchars($student->getAge()) . '</td>';
            echo '<td>' . htmlspecialchars($student->getGrade()) . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
