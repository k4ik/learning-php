<?php 
    $newSalary = 0;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $employeeName = (string) $_POST["employeeName"];
        $employeeSalary = (float) $_POST["employeeSalary"];
        $employeeYears = (int) $_POST["employeeYears"];

        $newSalary = getSalaryBonus($employeeYears, $employeeSalary);
    }

    function getSalaryBonus( int $employeeYears, float $employeeSalary) {
        $newSalary = 0;
        $bonus = 0;

        if ($employeeYears <= 3) {
            $bonus = ($employeeSalary * 3) / 100;
            $newSalary = $employeeSalary + $bonus;
        } elseif ($employeeYears > 3 && $employeeYears <= 10) {
            $bonus = ($employeeSalary * 12.5) / 100;
            $newSalary = $employeeSalary + $bonus;
        } elseif ($employeeYears > 10) {   
            $bonus = ($employeeSalary * 20) / 100;
            $newSalary = $employeeSalary + $bonus;
        }

        return $newSalary;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Information</h1>
    <p>Complete the form below to calculate the salary adjustment:</p>
    <form method="post">
        <label for="employeeName">Employee Name:</label>
        <input type="text" placeholder="João" name="employeeName">

        <label for="employeeSalary">Employee Salary:</label>
        <input type="text" placeholder="1300" name="employeeSalary">

        <label for="employeeYears">How many years have you worked at the company?</label>
        <input type="text" placeholder="5" name="employeeYears">

        <button type="submit">Calculate</button>
    </form>
    <p><?php echo "New salary: \$$newSalary";?></p>
</body>
</html>