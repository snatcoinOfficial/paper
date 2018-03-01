<?php
  $result = exec( "python snatgen.py" );
  $pubAddress = ""; $privAddress = ""; $backColor=0xFFFF00; $foreColor=0xFF00FF;
  $pos = 2; while ($result[$pos] != "'"){(string)$pubAddress = (string)$pubAddress . (string)$result[$pos]; $pos++;}
  $pos = 39; while ($result[$pos] != "'"){(string)$privAddress = (string)$privAddress . (string)$result[$pos]; $pos++;}
  echo '<br><font size="5">Your Snatcoin Paper Wallet</font>';
  echo "<br><br><br>Public: ".$pubAddress."<br>"; echo "Private: ".$privAddress."<br><br>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Snatcoin Paper Wallet</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <script src="jquery.min.js"></script>
    <script src="qrcode.js"></script>
    <script src="jquery.qrcode.js"></script>
    <script type="text/javascript">
      var Mypub = "<?php echo $pubAddress; ?>";
      var Mypriv = "<?php echo $privAddress; ?>";
    </script>
  </head>
  <body>
    <div id="container" class="col-lg-3">
      <div class="positioning" id="pubkey"></div>
      <span id="priv">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<br><br><br><br></span>
      <span id="pub"><div style="height:183px;font-size:1px;">&nbsp;</div></td></span>
    </div>
    <script>
      jQuery('#priv').qrcode({width:100, height:100, text:Mypriv});	
      jQuery('#pub').qrcode({width:100, height:100, text:Mypub});
      document.getElementById("pubkey").innerHTML = Mypub;
    </script>
  </body>
  <style>
    .col-lg-3{width:1000px; height:470px; float:left; position:relative; min-height:1px; padding-left:15px; padding-right:15px; background-size:contain; background-size:cover; background-size: 100% 100%; background-image:url("https://snatcoin.com/resources/snatcoin_paper.png");}
    .positioning{position:absolute; left:130px; bottom:14px; background-color:#f9f9f9; color:black; padding:4px; font-size:17px; line-height:18px;}
  </style>
</html>
