<html>
<body>
<!-- MADE BY CHETAN KHANNA -->
<!-- ROLL NUMBER : 2018CSC10143 -->
<!-- SEM IV -->
<h3>Check if a given string is an anagram of another given string</h3> 

<?php
function anagram()
{
    
    $s1 = $_POST['text1'];
    $s2 = $_POST['text2'];
    if (count_chars($s1, 1) == count_chars($s2, 1)) {
        echo "YES , " . $s1 . " is an anagram of " . $s2;
    } else {
        echo "NO , " . $s1 . " is not an anagram of " . $s2;
    }
}


if (isset($_POST['submit'])) {
    anagram();
} else {
?>
<form action="" method="post">
        String 1 : <input type="text" name="text1" required><br><br>
        String 2 : <input type="text" name="text2" required><br><br>
        <span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
        <input type="submit" value="Submit" name="submit">
    </form>
      <?php
}
?>
</body>
</html>
