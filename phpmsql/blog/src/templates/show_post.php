<!-- Page d'article de blog détaillé avec les commentaires -->
</br><h2> Article</h2></br>

<!-- Article du blog -->
<!-- Title -->
<h3><?= htmlspecialchars($post['Title']) ?></h3>

<!-- Author -->
<p class="lead">
  by
  <?= htmlspecialchars($post['FirstName']) ?> <?= htmlspecialchars($post['LastName']) ?>
</p>

<!-- Date/Time -->
Posted on <?= htmlspecialchars($post['CreationTimestamp']) ?>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="./images/articles/<?=$post["img_link"]?>" alt="image articles">

<hr>

<!-- Post Content -->
<p class="lead"><article><?= nl2br(htmlspecialchars($post['Contents'])) ?></article></p>

<hr>

<!-- Liste des commentaires de l'article du blog -->
<ul class="comment-list">
    <?php foreach($comments as $comment): ?>
        <li class="comment">
            <h4><i class="fa fa-comment"></i> Commentaire par <?= htmlspecialchars($comment['NickName']) ?></h4>
            <article><?= htmlspecialchars($comment['Contents']) ?></article>
        </li>
    <?php endforeach; ?>
</ul>

<hr>

<!-- Formulaire de saisie d'un nouveau commentaire pour cet article -->
<form class="generic-form" action="add_comment.php" method="POST">

    <!-- Utilisation d'un champ caché pour spécifier à quel article rattacher le commentaire -->
    <input type="hidden" name="postId" value="<?= intval($_GET['id']) ?>">

    <fieldset>
        <legend><i class="fa fa-comment-o"></i> Nouveau commentaire</legend>
        <ul>
            <li>
                <label for="nickName">Pseudo :</label>
                <input type="text" id="nickName" name="nickName">
            </li>
            <li>
                <label class="textarea" for="contents">Commentaire :</label>
                <textarea id="contents" name="contents" rows="5"></textarea>
            </li>
            <li>
                <button class="button button-primary" type="submit">Ajouter</button>
                <a class="button button-cancel" href="index.php">Annuler</a>
            </li>
        </ul>
    </fieldset>
</form>