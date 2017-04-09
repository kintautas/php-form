<?php
 if ($_REQUEST["f"] === "name") {
     if (strlen($_REQUEST["q"]) < 5)
        {
            $result = "the lenght must be greater than 5";
        }
     else {
        $result = "";
    };
} else if ($_REQUEST["f"] === "lastname") {
     if (strlen($_REQUEST["q"]) < 5)
        {
            $result = "the lenght must be greater than 5";
        }
     else {
        $result = "";
    };
} else if ($_REQUEST["f"] === "email") {
    if (!filter_var($_REQUEST["q"], FILTER_VALIDATE_EMAIL)) {
      $result = "email format is invalid";
    }
    else {
        $result = "";
    };

} else if ($_REQUEST["f"] === "phone") {
    if(!preg_match('/^\(?\+?([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9]{7})$/', trim($_REQUEST["q"]))) {
     $result = "phone format is invalid";
    }
    else {
        $result = "";
    };

} else if ($_REQUEST['f'] === 'file') {
    $userfile_name = $_REQUEST["q"];
    $userfile_extn = substr($userfile_name, strrpos($userfile_name, '.')+1);
    if($userfile_extn != "jpg" && $userfile_extn != "pdf") {
        $result = "only jpg and pdf files accespted";
    } else $result = "";
}

echo $result === "" ? "valid" : $result;
?>