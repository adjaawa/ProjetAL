<?php foreach($data as $article): ?>
    <form action="index.php" method="post">
        <div class="well lewell">
            <h1 style="font-weight:bolder; color:white;">
                <?php echo $article->titre; ?>
            </h1>

            <p style="color:white;"> <?php echo $article->contenu ?> </p>

            <br>
        </div>
    </form>
<?php endforeach; ?>