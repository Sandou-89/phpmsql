<!-- Liste des articles du blog -->
<ul class="post-list container">
<!-- Page d'accueil -->
<h2 class="my-4">Bienvenue !</h2>
    <?php foreach($posts as $post): ?>
        <div class="card mb-4">
          <img class="card-img-top" src="./images/articles/<?=$post["img_link"]?>" alt="Card image cap">
          <div class="card-body">
          <!-- Lien vers article de blog détaillé avec les commentaires -->
            <h2 class="card-title"><a href="show_post.php?id=<?= intval($post['Id']) ?>" title="Consulter l'article">
                    <?= htmlspecialchars($post['Title']) ?>
                </a></h2>
                <!-- Seul un extrait de l'article du blog est affiché -->
            <p class="card-text"><?= substr(htmlspecialchars($post['Contents']), 0, 200) ?>&nbsp;[...]</p>
            <a href="show_post.php?id=<?= intval($post['Id']) ?>" class="btn btn-success">Lire plus &rarr;</a>
            
          </div>
          <div class="card-footer text-muted">
                Rédigé par <?= htmlspecialchars($post['FirstName']) ?> <?= htmlspecialchars($post['LastName']) ?>
                le <?= htmlspecialchars($post['CreationTimestamp']) ?>
          </div>
        </div>
    <?php endforeach; ?>
</ul>