<?php

class News
{
    private $news;

    public function __construct($name)
    {
         $file = file_get_contents($name);
         $decode = json_decode($file, true);
         $this->news = $decode;
    }

    public function getNews()
    {
        $newsItem = '';

        foreach ($this->news as $item) {
             $newsItem .= '<h3>' . $item["id"] . '</h3>' . '<small>' . $item['title'] . '</small>';
             $newsItem .= '<p>' . $item['text'] . '</p>';
        }

        echo $newsItem;
    }
}

$news = new News('news.json');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?=$news->getNews();?>

</body>
</html>

