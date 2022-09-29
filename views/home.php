<div class="container">
    <div>
        <h2><?= $title[$linkValue[0]] ?></h2>
        <hr>
        <div class="category">
            <?php
                for($i = 0 ; $i < $_COOKIE['nbPages'] ; $i++) {
                    $item = $category1->channel->item[$i];
                    $image = $item->children('media', True)->content->attributes();
            ?>
                    <div class="card">
                        <div class="img"><?= "<img src=\"$image\">" ?></div>
                        <h3 class="title"><a href=""><?= $item->title ?></a></h3>
                        <div class="description"><?= $item->description ?></div>
                        <div class="date"><?=date('d/m/Y', strtotime(substr($item->pubDate, 5, 11)))?></div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
    <div>
        <h2><?= $title[$linkValue[1]] ?></h2>
        <hr>
        <div class="category">
            <?php
                for($i = 0 ; $i < $_COOKIE['nbPages'] ; $i++) {
                    $item = $category2->channel->item[$i];
                    $image = $item->children('media', True)->content->attributes();
            ?>
                    <div class="card">
                        <div class="img"><?= "<img src=\"$image\">" ?></div>
                        <h3 class="title"><a href=""><?= $item->title ?></a></h3>
                        <div class="description"><?= $item->description ?></div>
                        <div class="date"><?=date('d/m/Y', strtotime(substr($item->pubDate, 5, 11)))?></div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
    <div>
        <h2><?= $title[$linkValue[2]] ?></h2>
        <hr>
        <div class="category">
            <?php
                for($i = 0 ; $i < $_COOKIE['nbPages'] ; $i++) {
                    $item = $category3->channel->item[$i];
                    $image = $item->children('media', True)->content->attributes();
            ?>
                    <div class="card">
                        <div class="img"><?= "<img src=\"$image\">" ?></div>
                        <h3 class="title"><a href=""><?= $item->title ?></a></h3>
                        <div class="description"><?= $item->description ?></div>
                        <div class="date"><?=date('d/m/Y', strtotime(substr($item->pubDate, 5, 11)))?></div>
                    </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>