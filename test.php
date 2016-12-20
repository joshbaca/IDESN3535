<?php

/**
 * Created by PhpStorm.
 * User: joshbaca
 * Date: 12/6/16
 * Time: 1:45 PM
 */


//phpinfo() ;

//$name = 'josh';


//echo '<h2>this is a line of php.' . $name . '</h2>'  ;

//$teams = array (

   // 'red sox', //0
    //'bruins', //1
    //'celtics', //2
    //'patriots', //3
    //'revolution', //4
   // 'ruggers', //5
    //'cannons'
//) ;

//echo 'soccer: ' .$teams [4] ;
//print_r ($_server) ;
//echo '$_GET:' ;
//print_r ($_GET) ;

//header ( "Content-Type: image/png" ) ;


//$png_image = imagecreate ( 600, 600 ) ;


//$background_color = imagecolorallocate ( $png_image, 250, 0, 500 );
//$text_color = imagecolorallocate($png_image, 255, 255, 255);
//imagestring ( $png_image, 5, 50, 50,  "$_GET", $text_color);

//imagepng ( $png_image ) ;


if ($_FILES )  {

    echo 'A file was submitted.' ;

    print_r ($_FILES ['file_to_upload']) ;

    if ($_FILES ['file_to_upload']['size'] !=0 )  {
        $upload_file = 'uploads/' . $_FILES['file_to_upload']['name'] ;

        move_uploaded_file( $_FILES['file_to_upload'] ['tmp_name'], $upload_file) ;
    }
}



?>

<html>
<head>
    <title>file upload demo</title>
</head>
<body>

<form action="test.php" method="post" enctype="multipart/form-data">
    Filename: <input type="text" name="filename" id="filename"><br><br>
    <input type="file" name="file_to_upload" id="file_to_upload"><br><br>
    <input type="submit">
</form>

</body>
</html>
