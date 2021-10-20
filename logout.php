<?php
                if(isset($_SESSION['name']))
                {
                    unset($_SESSION['name']);
                }
                echo header("Location:admin.php");
?>

