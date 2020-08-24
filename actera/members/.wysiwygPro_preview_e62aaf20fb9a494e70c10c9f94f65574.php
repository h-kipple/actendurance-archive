<?php
if ($_GET['randomId'] != "Mu3cyCXWDgKjeXGcUllsNneNK4XsBBCnFWhikbzyVVCEsWORJ52L_E4mxqzkfWUM") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
