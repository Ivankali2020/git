<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h4>
                 <?php 



//                 echo "hello".htmlspecialchars($firstname = $_GET['name']);

                 echo '<pre>';
                 echo 'This is Request all Post and Get';
                 echo '<br>';
                 print_r($_REQUEST);
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo  "I'm {$_REQUEST['name']} and {$_REQUEST['age']}."; //post and get receive
                 echo  '<br>';
                 echo  '<br>';
                 echo  '<br>';
                 echo 'This is Request Get';
                 echo '<br>';
                 print_r($_GET);    // only get recrive url()?name=aungko
                 echo 'This is Request all Post';
                 echo '<br>';
                 print_r($_POST);
                 echo 'This is file type';
                 echo '<br>';
                 print_r($_FILES);
                 ?>
        </h4>
</body>
</html>