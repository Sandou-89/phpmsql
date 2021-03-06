<?php

    include 'application/bdd_connection.php';

    if(empty($_POST))
    {
        // Validation de la query string dans l'URL.
        if(!array_key_exists('id', $_GET) OR !ctype_digit($_GET['id']))
        {
            header('Location: index.php');
            exit();
        }

        // Récupération d'un article du blog.
        $query =
        '
            SELECT
                Id,
                Title,
                img_link
                Contents
            FROM
                Post
            WHERE
                Id = ?
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_GET['id']]);
        $post = $resultSet->fetch();

        // Sélection et affichage du template PHTML.
        $template = 'edit_post';
        include 'templates/layout.php';
    }
    else
    {
        // Edition d'un article du blog.
        $query =
        '
            UPDATE
                Post
            SET
                Title = ?,
                Contents = ?
                img_link = ?
            WHERE
                Id = ?
        ';
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$_POST['title'], $_POST['img'], $_POST['contents'], $_POST['postId']]);

        // Retour au panneau d'administration.
        header('Location: admin.php');
        exit();
    }