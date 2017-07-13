<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Word Mapping</title>
</head>
<body>
<form method="get">
    <input type="text" name="categories"></br>
    <input type="text" name="tags"></br>
    <input type="text" name="months"></br>

    <input type="submit" name="submit" value="Generate">
</form>
</body>
</html>
<?php
 if(isset($_GET['categories']) &isset($_GET['tags']) && isset($_GET['months'])){
     $cat=htmlspecialchars(trim($_GET['categories']));
     $tags=htmlspecialchars(trim($_GET['tags']));
     $months=htmlspecialchars(trim($_GET['months']));

     $categories=explode(", ",$cat);
     $tags=explode(", ",$tags);
     $months=explode(", ",$months);

     echo "<h2>Categories</h2>";
     echo "<ul>";
     foreach ($categories as $category){
         echo "<li>$category</li>";
     }
     echo "</ul>";

     echo "<h2>Tags</h2>";
     echo "<ul>";
     foreach ($tags as $tag){
        echo "<li>$tag</li>";
     }
     echo "</ul>";

     echo "<h2>Months</h2>";
     echo "<ul>";
     foreach ($months as $month){
         echo "<li>$month</li>";
     }
     echo "</ul>";
 }