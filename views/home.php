<div class="container">
    <div class="category">
        <h2>Catégorie 1</h2>
        <?php
            for($i = 0 ; $i < $nbPages ; $i++) {
                // $image = $item->children('media', True)->content->attributes();
                $item = $category1->channel->item[$i];
                echo "<p>$i $item->title</p>";
            }
        ?>
    </div>
    <div class="category">
        <h2>Catégorie 2</h2>
        <?php
            for($i = 0 ; $i < $nbPages ; $i++) {
                // $image = $item->children('media', True)->content->attributes();
                $item = $category2->channel->item[$i];
                echo "<p>$i $item->title</p>";
            }
        ?>
    </div>
    <div class="category">
        <h2>Catégorie 3</h2>
        <?php
            for($i = 0 ; $i < $nbPages ; $i++) {
                // $image = $item->children('media', True)->content->attributes();
                $item = $category3->channel->item[$i];
                echo "<p>$i $item->title</p>";
            }
        ?>
    </div>
</div>