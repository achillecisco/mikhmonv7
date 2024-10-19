<?php
if (!isset($_SESSION["mikhmon"])) {
    header("Location:../admin.php?id=login");
  } else {
        $_SESSION["v"] = "7.11.2 modded by Ciscotek IT +228 99313800";
    
    }
