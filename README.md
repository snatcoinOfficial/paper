# Snatcoin paper wallet generator

This is an in-progress repository

    phpqrcode.php           <- QR Code Maker
    snatcoin_paper.png      <- Paper note PNG
    snatgen.py              <- Python scrypt to create a random Snatcoin Public / Private pair


PHP QR Code Example
    
    <?php
      require('phpqrcode.php');
      $backColor=0xFFFF00; $foreColor=0xFF00FF;
      QRcode::png($depositAddress, "png/".$_user_id.".png", "L", 4, 4, false, $backColor, $foreColor);
    ?>
