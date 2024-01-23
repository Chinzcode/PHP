<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<?php
// PHP - Class Constants
//Outside of class use class name followed by :: followed by constant name
//Inside of class use self keyword followed by :: followed by constant name
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;

/*
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye();
  $goodbye->byebye();
*/

?>
</body>
</html>