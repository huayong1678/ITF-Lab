<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>iTAX : Calculated</title>
    </head>
    <body background="background.png">
        <table>
            <tr>
                <th><img src="logo.png" height="100px"></th>
            </tr>
        </table><br>
    <?php
    $a = $_POST["name"];
    $b = $_POST["date"];
    $c = $_POST["status"];
    $d = $_POST["occupation"];
    echo "<table>
    <tr>
        <th>NAME</th>
        <th>BIRTH DATE</th>
        <th>STATUS</th>
        <th>OCCUPATION</th>
    </tr>
        <td>$a</td>
        <td>$b</td>
        <td>$c</td>
    </tr>
</table>";
    ?>
    </body>
</html>
