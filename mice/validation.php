<?php
    
    $formfield = $_GET['field'];
    $value = $_GET['query'];

        if ($formfield == "pass_aj") {
        if (strlen($value) < 6) {
        echo "Password too short";
        } else {
        echo "Strong";
            
        }
        }

        if ($formfield == "pass_aj2") {
        if (strlen($value) < 6) {
        echo "Password too short";
        }
            else 
        {
            echo "Strong";
            
        }
        }

        
    
?>