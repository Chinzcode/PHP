<?php
//General hashing 

$sensitiveData = "Solberg";
$salt = bin2hex(random_bytes(16)); // Generate random salt(string)
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

//Store salt and hash inside database or filestoring system that is secure
/*---- other file ----*/
//Take the stored salt and hash and compare to new data user sumbits

$sensitiveData = "Solberg";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
    echo "The data are the same!";
    echo "<br>";
    echo $storedHash;
    echo "<br>";
    echo $verificationHash;
} else {
    echo "The data are not the same!";
}