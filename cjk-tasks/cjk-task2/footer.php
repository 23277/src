<footer>

   
    <p>
        company ltd<br>
        business street 33 <br>
        00100 helsinki
        
    </p>
    <?php
        $fileName = basename($_SERVER['PHP_SELF']);
        $lastModifiedTime = filemtime($fileName);
        $lastModifiedDateTime = date("F d Y H:i:s.", $lastModifiedTime);
        echo "<p>Last modified: $lastModifiedDateTime</p>";
    ?>
    

</footer>