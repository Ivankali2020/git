<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div class="container">
    <ul>
        <li>get(url)</li>
        <li>post</li>
    </ul>
    <a href="joker.php?name=aungko&age=32&job=teacher" >Request Server</a>

<!--    //name is important in action request-->
    <form action="joker.php?gf=Ohmic" method="post"  enctype="multipart/form-data">
        <input type="text" name="name" value="henzanhtet">
        <input type="number" name="age" value="32">
        <input type="text" name="status"  value="Single">
        <input type="file" name="photo" >
        <input type="submit" value="Click Submit">
    </form>

    <div>
        <ul id="ulist">

        </ul>
    </div>
    <?php
    $first_name = "xyz  Ohmic xyz    ";
    $age = 21;
    $arr = ['x','y','z'];
    $obj = [
        'name' => 'Ivan'
    ];
    $ul = "<ul >

        
                <li> strlen() =&gt;  strlen() </li>
            
                <li> str-word-count() =&gt;  str-word-count() </li>
            
                <li> str-shuffle() =&gt;  str-shuffle() </li>
            
                <li> strtoupper() =&gt;  strtoupper() </li>
            
                <li> strsubstr() =&gt;  strsubstr() </li>
            </ul>";
    echo '<br>';

    echo strrev($first_name).'   this is Strrev';
    echo '<br>';

    echo str_shuffle($first_name).' this is str-shuffle';
    echo '<br>';

    echo str_word_count($first_name).' this is strwordcount';
    echo '<br>';

    echo strpos($first_name,"m");
    echo  '<br>';

    echo substr($first_name,1,3);
    echo '<br>';

    echo strtoupper($first_name);
    echo '<br>';

    echo strip_tags($ul);
    echo '<br>';

    echo trim($first_name,'xyz');
    echo '<br>';

    echo '<pre>';
    print_r(str_split(trim($first_name),1));

    echo '<pre>';
    print_r(explode(' ',trim($first_name)))

    ?>
    <script>

        let ulList = ['strlen()','str-word-count()','str-shuffle()','strtoupper()','strsubstr()'];
        let uList = document.getElementById('ulist');

        ulList.map(el => {
            uList.innerHTML += `
                <li> ${el} =>  ${el} </li>
            `;
        })
    </script>
</div>

</body>
</html>












