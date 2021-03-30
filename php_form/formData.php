<?php
    if(isset($_POST['Submit'])){
        $Tmp_id         = $_POST['Tmp_id'];
        $Tmp_name       = $_POST['Name'];
        $Tmp_email      = $_POST['Email'];
        $Tmp_password   = password_hash($_POST['Password'], PASSWORD_DEFAULT);; 
        
        if(!empty(trim($Tmp_name)) && !empty(trim($Tmp_email)) && !empty(trim($Tmp_password))){
            
            $html = '<tr>';
            $html .= '<td>'.$Tmp_id.'</td>';
            $html .= '<td>'.$Tmp_name.'</td>';
            $html .= '<td>'.$Tmp_email.'</td>';
            $html .= '<td>'.$Tmp_password.'</td>';
        
            echo $html;
    
        }
    }
?>
