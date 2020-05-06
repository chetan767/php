<html>
<body>
<!-- MADE BY CHETAN KHANNA -->
<!-- ROLL NUMBER : 2018CSC10143 -->
<!-- SEM IV -->
<h3>Find the length of the last word in a string.</h3> 

<?php
function last_word()
{
    
    
    $pos = strrpos($_POST['text1'], ' ');
    
    
    if (!$pos) {
        $pos = 0;
    } else {
        $pos = $pos + 1;
    }
    
    $last = substr($_POST['text1'], $pos);
    
    
    echo "Length of ".$last." is ".strlen($last);
}


if (isset($_POST['submit'])) {
    last_word();
} else {
?>
<form action="" method="post">
        String : <input type="text" name="text1" required><br><br>
        <span>&emsp;&emsp;&emsp;&emsp;</span>
        <input type="submit" value="Submit" name="submit">
    </form>
      <?php
}
?>
</body>
</html>
