<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Loji</title>
</head>
<body>
    <?php
    if(!isset($_POST['calculate'])){
    ?>
        <form action="" method="post">
            <label for="first_name">First Name : </label>
            <input type="text" id="first_name" name="first_name">
            <br>
            <label for="last_name">Last Name : </label>
            <input type="text" id="last_name" name="last_name">
            <br>
            <label for="annual_sallary">Annual Salary : </label>
            <input type="text" required id="annual_sallary" name="annual_sallary">
            <br>
            <label for="super_rate">Super Rate : </label>
            <input type="text" required id="super_rate" name="super_rate">
            <br>
            <label for="payment_start_date">Payment Start Date : </label>
            <input type="text" id="payment_start_date" name="payment_start_date">
            <br>
            <input type="submit" value="Calculate" name="calculate">
        </form>
    <?php  
    }else{
        function checkSalaryBracket ($salary){
            if($salary >= 0 && $salary <= 18200){
                return 1;
            }else if($salary >= 18201 && $salary <= 37000){
                return 2;
            }else if($salary >= 37001 && $salary <= 87000){
                return 3;
            }else if($salary >= 87001 && $salary <= 180000){
                return 4;
            }else{
                return 5;
            }
        }

        $salary = round((float)$_POST['annual_sallary']);
        switch (checkSalaryBracket($salary)) {
            case 1:
                $grossIncome = round($salary/12);
                $incomeTax = 0;
                $netIncome = $grossIncome - $incomeTax;
                $superAmount = round($grossIncome*$_POST['super_rate']/100);
                break;
            
            case 2:
                $grossIncome = round($salary/12);
                $incomeTax = round((0 + 0.19 * ($salary - 18200))/12);
                $netIncome = $grossIncome - $incomeTax;
                $superAmount = round($grossIncome*$_POST['super_rate']/100);
                break;

            case 3:
                $grossIncome = round($salary/12);
                $incomeTax = round((3572 + 0.325 * ($salary - 37000))/12);
                $netIncome = $grossIncome - $incomeTax;
                $superAmount = round($grossIncome*$_POST['super_rate']/100);
                break;

            case 4:
                $grossIncome = round($salary/12);
                $incomeTax = round((19822 + 0.37 * ($salary - 87000))/12);
                $netIncome = $grossIncome - $incomeTax;
                $superAmount = round($grossIncome*$_POST['super_rate']/100);
                break;

            case 5:
                $grossIncome = round($salary/12);
                $incomeTax = round((54232 + 0.45 * ($salary - 180000))/12);
                $netIncome = $grossIncome - $incomeTax;
                $superAmount = round($grossIncome*$_POST['super_rate']/100);
                break;
            
            default:
                # code...
                break;
        }

        ?>
        <style>
            td{
                padding:5px;
                text-align:center;
            }
        </style>
        <table border="2">
            <tr>
                <th>Name</th>
                <th>Pay Period</th>
                <th>Gross Income</th>
                <th>Income Tax</th>
                <th>Net Income</th>
                <th>Super Amount</th>
            </tr>
            <tr>
                <td><?php echo $_POST['first_name'].' '.$_POST['last_name']; ?></td>
                <td><?php echo $_POST['payment_start_date']; ?></td>
                <td><?php echo $grossIncome; ?></td>
                <td><?php echo $incomeTax; ?></td>
                <td><?php echo $netIncome; ?></td>
                <td><?php echo $superAmount; ?></td>
            </tr>
        </table>
        <?php
    }
    ?>
</body>
</html>