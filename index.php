<?php
    // echo strtoupper(dechex(crc32("This is a text file.")));
?>

<form action="libs/calculate.php" method="post" enctype= "multipart/form-data">
<input type="file" name="Upload" id="Upload" require>
<input type="submit" value="Calculate" name="Calculate">
</form>
