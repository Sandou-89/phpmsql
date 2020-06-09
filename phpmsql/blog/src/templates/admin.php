<h2> Panneau d'administration</h2>

<nav>
    <a href="add_post.php">Rédiger un nouvel article</a>
</nav>

<table class="table">
 <caption>Liste des articles</caption>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Article</th>
      <th scope="col">Auteur</th>
      <th scope="col">Catégorie</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($posts as $post): ?>
    <tr>
      <td><a href="show_post.php?id=<?= intval($post['Id']) ?>" target="_blank"><?= htmlspecialchars($post['Title']) ?></a></td>
      <td><?= substr(htmlspecialchars($post['Contents']), 0, 200) ?></td>
      <td><?= htmlspecialchars($post['FirstName']) ?> <?= htmlspecialchars($post['LastName']) ?></td>
      <td><?= htmlspecialchars($post['Category_Name']) ?></td>
      <td>
      <a class="edit" href="edit_post.php?id=<?= intval($post['Id']) ?>"><i class="fa fa-pencil"></i></a>
      <a class="remove" href="delete_post.php?id=<?= intval($post['Id']) ?>"><i class="fa fa-remove"></i></a>
     </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>