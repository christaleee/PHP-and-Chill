<?php 
class RandomFunctions {

    function DeleteUserData($arraykey) {
        if (isset($_SESSION['array_stuff'])) {
            foreach ($_SESSION['array_stuff'] as $key => $arrayValue) {
                if ($arrayValue['id'] == $arraykey) {
                    unset($_SESSION['array_stuff'][$key]); // Remove the item from session
                    $_SESSION['array_stuff'] = array_values($_SESSION['array_stuff']); // Reindex array
                    break;
                }
            }
        }
    }


function UpdateUserData($arraykey) {

    $formArray = $_SESSION['form_data'];

    foreach($formArray as $key => $arrayValue) {
        if($arrayValue['id'] == $arraykey) {
            $_SESSION['form_data'][$key]['FirstName'] = "New Value";
        }
    }
}
}
?>
