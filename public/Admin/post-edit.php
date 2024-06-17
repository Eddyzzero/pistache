<?php include '../../config/dataBase.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <script src="https://cdn.tiny.cloud/1/mkfxg8pw6ff5aqh7crs5t8uqzq5mjjy7de64jwdn49atxjg9/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Pistache-restaurant</title>
</head>
<html>
    <body>
        <!-- ajoute du header -->
        <?php include_once 'header.php' ?>

        <section>
            <h1>Edition</h1>
            <div>
                <article>
                    <h2>Détails de l'article</h2>
                    <div>
                        <form action="">
                            <label for="nom">Nom</label>
                            <input type="text" placeholder="nom de l'article" >
                            <script>
                                tinymce.init({
                                    selector: 'textarea',
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    mergetags_list: [
                                    { value: 'First.Name', title: 'First Name' },
                                    { value: 'Email', title: 'Email' },
                                    ],
                                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                                });
                            </script>
                            <textarea>
                                Welcome to TinyMCE!
                            </textarea>
                        </form>
                    </div>
                    <div>
                        <div>
                            <p>ajouter une image</p>
                        </div>
                        <div>
                            <div>Brouillon</div>
                            <div>Publier</div>
                            <div>Supprimer</div>
                        </div>
                    </div>
                </article>

                <!-- categories -->
                 <article>
                    <h3>categories</h3>
                    <ul>
                        <li>
                            <label>
                                <input type="checkbox" name="categories" value="entrees"> Entrées
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox" name="categories" value="plats"> Plats
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox" name="categories" value="desserts"> Désserts
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox" name="categories" value="boissons"> Boissons
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox" name="categories" value="cocktails"> Cocktails
                            </label>
                        </li>
                    </ul>
                 </article>
            </div>
        </section>
    </body>
</html>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
