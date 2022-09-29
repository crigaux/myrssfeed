<div class="pageContainer">
    <h1><?=$pageTitle?></h1>
    <hr>
    <?php
        foreach($category->channel->item as $item) {
            $image = $item->children('media', True)->content->attributes();
    ?>
            <div class="cardPage">
                <div class="img"><img src="<?=$image?>"></div>
                <div class="cardBody">
                    <div class="title"><?=$item->title?></div>
                    <div class="content"><?=$item->description?></div>
                    <div class="button"><a href="<?= $item->link ?>" target="_blank">Voir l'article</a></div>
                </div>
            </div>
    <?php
        }
    ?>
</div>