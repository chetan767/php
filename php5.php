<html>
<body>
<!-- MADE BY CHETAN KHANNA -->
<!-- ROLL NUMBER : 2018CSC10143 -->
<!-- SEM IV -->
<h3>Check whether a number is a hamming number</h3> 

<?php
function check_hamming($x, $y)
{
    if ($x == 1) {
        echo $y . " is a Hamming Number";
        exit();
    }
    if ($x % 2 == 0) {
        check_hamming($x / 2, $y);
    }
    
    if ($x % 3 == 0) {
        check_hamming($x / 3, $y);
    }
    if ($x % 5 == 0) {
        check_hamming($x / 5, $y);
    }
    echo $y . " is not a Hamming Number";
    exit();
}

if (isset($_POST['submit'])) {
    
    check_hamming($_POST['n'], $_POST['n']);
} else {
?>
<form action="" method="post">
        Number : <input type="number" name="n" required><br><br>
        <span>&emsp;&emsp;&emsp;&emsp;</span>
        <input type="submit" value="Submit" name="submit">
    </form>
      <?php
}
?>
