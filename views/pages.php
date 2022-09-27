<?php
    $content = file_get_contents("https://www.lemonde.fr/rss/une.xml");

    $xml = new SimpleXMLElement($content);

    echo "<ul>";
    foreach($xml->channel->item as $item) {
        $image = $item->children('media', True)->content->attributes();;
        echo "<img src=\"$image\">";
    }
    echo "</ul>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>