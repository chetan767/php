<html>
<body>
<!-- MADE BY CHETAN KHANNA -->
<!-- ROLL NUMBER : 2018CSC10143 -->
<!-- SEM IV -->
<h3>Check a sequence of numbers is an arithmetic progression or not</h3> 

<?php
function AP()
{
    $s = explode(",",$_POST['st']);
    $d = (int) $s[1] - (int) $s[0];

    for ($i = 1; $i < count($s); $i++) {
        if ((int) $s[$i] - (int) $s[$i - 1] != $d) {
            echo $_POST['st'] . " is not an Arithmetic Progression";
            exit();
        }
        
        
    }
    echo $_POST['st'] . " is an Arithmetic Progression";
}

if (isset($_POST['submit'])) {
    
    AP();
} else {
?>
<form action="" method="post">
        Sequence : <input type="text" name="st" placeholder="1,2,3,4,5" required><br><br>
        <span>&emsp;&emsp;&emsp;&emsp;</span>
        <input type="submit" value="Submit" name="submit">
    </form>
      <?php
}
?>
</body>
</html>
