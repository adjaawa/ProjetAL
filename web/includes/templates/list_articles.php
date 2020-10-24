<?php foreach($data as $article): ?>

    <form action="index.php" method="post">
        <div class="well lewell">
            <h1 style="font-weight:bolder; color:white;">
                <?php echo $article->titre;?>
            </h1>
            <br>
            <p><input type="submit" class="btn btn-primary btn-sm btn-esp" value="EN SAVOIR PLUS" role="button"></p>
            <input type="hidden" name="article" value="<?php echo $article->id  ?>">
        </div>
    </form>

<?php endforeach; ?>