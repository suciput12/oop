<?php
    if (isset($_POST['sbm'])) {
        $a = $_POST['bil1'];
        $b = $_POST['bil2'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BILANGAN ARITMATIKA</title>
</head>
<body>
    <fieldset>
        <legend>ARITMATIKA</legend>
        <form action="basicpro.php" method="POST">
            <table>
                <tr>
                    <td><label for="">bilangan1</label></td>
                    <td><input type="number" name="bil1"></td>
                </tr><br>
                <tr>
                    <td><label for="">bilangan2</label></td>
                    <td><input type="number" name="bil2"></td>
                </tr><br>
                <tr>
                    <td><input type="submit" name="sbm" value="simpan"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>