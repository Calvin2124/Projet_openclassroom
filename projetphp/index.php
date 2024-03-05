<?php
// Accès à la base de données
    require_once "connect_bdd.php";
    $message = null;
    // Si le bouton du formulaire ajout est cliqué alors:
    if (isset($_POST["submit_add_book"])){
        // Création de la requête 
        $request = "INSERT INTO book(title, author, years, genre) VALUES(:title, :author, :years, :genre)";
        // Préparation de la requête 
        $data = $db->prepare($request);
        try{
            //Éxécution de la requête 
            $data->execute(array(
                "title" => $_POST["form_title"],
                "author" => $_POST["form_author"],
                "years" => $_POST["form_years"],
                "genre" => $_POST["form_genre"]
            ));
        }catch(Exception $e) {
            die("Erreur : ".$e->getMessage());
        }
        header('location: index.php');
    }
    // Si le bouton du formulaire modifier est cliqué alors:
    if (isset($_POST["modify"])) {
        $request = "UPDATE book SET title = :title, author = :author, years = :years, genre = :genre WHERE id = :id";
        $data = $db->prepare($request);
        try {
            $data->execute(array(
                "id" => $_POST["id"],
                "title" => $_POST["title"],
                "author" => $_POST["author"],
                "years" => $_POST["years"],
                "genre" => $_POST["genre"]
            ));
        } catch(Exception $e) {
            die("Erreur : ".$e->getMessage());
        }
        header('location: index.php');
    }
    if (isset($_POST["delete"])){
        $request = "DELETE FROM book WHERE id = :id";
        $data = $db->prepare($request);
        try{
            $data->execute(array(
                "id" => $_POST["id"]
            ));
        }catch(Exception $e) {
            die("Erreur : ".$e->getMessage());
        }
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de bibliothèque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Gestion de bibliothèque</h1>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addBookModal">
            Ajouter un livre
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Année</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <?php
                        $request = $db->prepare("SELECT id, title, author, years, genre FROM book");
                        $request->execute();
                        $datas = $request->fetchAll();
                        foreach ($datas as $data){
                    ?>
            <tbody>
                <tr>
                    <th scope="row"><?=$data["id"]?></th>
                    <td><?=$data["title"]?></td>
                    <td><?=$data["author"]?></td>
                    <td><?=$data["years"]?></td>
                    <td><?=$data["genre"]?></td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?=$data["id"]?>">Modifier</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?=$data["id"]?>">Supprimer</button>
                    </td>
                </tr>
                <!-- Ajoutez plus de lignes si nécessaire -->
                
            </tbody>
                            <!-- Edit Modal -->
    <div class="modal fade" id="editModal<?=$data["id"]?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Modifier le livre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <input type="hidden" name="id"  value="<?=$data["id"]?>">
                    <div class="mb-3">
                        <label for="book-title" class="form-label">Titre du livre</label>
                        <input type="text" class="form-control"  name="title" id="book-title" value="<?=$data["title"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="book-author" class="form-label">Auteur du livre</label>
                        <input type="text" class="form-control" name="author" id="book-author" value="<?=$data["author"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="book-year" class="form-label">Année de publication</label>
                        <input type="number" class="form-control" name="years" id="book-year" value="<?=$data["years"]?>">
                    </div>
                    <div class="mb-3">
                        <label for="book-genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" name="genre" id="book-genre" value="<?=$data["genre"]?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="sumbit" class="btn btn-primary" name="modify">Sauvegarder les modifications</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
                                <!-- Delete Modal -->
            <div class="modal fade" id="deleteModal<?=$data["id"]?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Supprimer le livre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer ce livre ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button> 
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="<?=$data["id"]?>">
                        <button type="submit" name="delete" class="btn btn-danger">Oui, supprimer</button>  
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <?php
                        }
            ?>
        </table>
    </div>
    <!-- Add Book Modal -->
    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookModalLabel">Ajouter un livre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="title" name="form_title">
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Auteur</label>
                            <input type="text" class="form-control" id="author" name="form_author">
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Année</label>
                            <input type="number" class="form-control" id="year" name="form_years">
                        </div>
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="genre" name="form_genre">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="submit_add_book">Sauvegarder</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>