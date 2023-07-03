<?php
    $menuEmblem = $result["data"]['emblemMenu'];
    $menuEmplacement = $result["data"]['emplacementMenu'];
    $menuRarity = $result["data"]['rarityMenu'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/50e50e8630.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/zg3mwraazn1b2ezih16je1tc6z7gwp5yd4pod06ae5uai8pa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= PUBLIC_DIR ?>/css/style.css">
    <title>FORUM</title>
</head>

<body>
    <div id="wrapper">
        <header>
        <nav>
            <menu>
                <menuitem>
                    <a href="index.php?ctrl=show&action=allRing">All</a>
                </menuitem>
                <menuitem class="demo">
                    <a>by Emblem</a>
                    <menu>
                    <?php
                        foreach($menuEmblem[0] as $emblem) { ?>
                            <menuitem><a href="index.php?ctrl=show&action=ringByEmblem&id=<?= $emblem->getId() ?>"><?= $emblem->getPerso() ?></a></menuitem>
                        <?php }
                    ?>
                </menu>
                </menuitem>
            <menuitem>
                <a>by Emplacement</a>
                <menu>
                    <?php
                        foreach($menuEmplacement[0] as $emplacement) { ?>
                            <menuitem><a href="index.php?ctrl=show&action=ringByEmplacement&id=<?= $emplacement->getEmplacement() ?>"><?= $emplacement->getEmplacement() ?></a></menuitem>
                        <?php }
                    ?>
                </menu>
            </menuitem>
            <menuitem>
                <a>by Rarity</a>
                <menu>
                    <?php
                        foreach($menuRarity[0] as $rarity) { ?>
                            <menuitem><a href="index.php?ctrl=show&action=ringByRarity&id=<?= $rarity->getId() ?>"><?= $rarity->getLettre() ?></a></menuitem>
                        <?php }
                    ?>
                </menu>
            </menuitem>
		</menu>
	</nav>
        </header>
        <div id="mainpage">
            <!-- c'est ici que les messages (erreur ou succès) s'affichent-->
            <h3 class="message" style="color: red"><?= App\Session::getFlash("error") ?></h3>
            <h3 class="message" style="color: green"><?= App\Session::getFlash("success") ?></h3>

            <main id="forum">
                <?= $page ?>
            </main>
        </div>
        <footer>
            <!--<button id="ajaxbtn">Surprise en Ajax !</button> -> cliqué <span id="nbajax">0</span> fois-->
        </footer>
        <script src="<?= PUBLIC_DIR ?>/js/script.js"></script>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $(".message").each(function() {
                if ($(this).text().length > 0) {
                    $(this).slideDown(500, function() {
                        $(this).delay(3000).slideUp(500)
                    })
                }
            })
            $(".delete-btn").on("click", function() {
                return confirm("Etes-vous sûr de vouloir supprimer?")
            })
            tinymce.init({
                selector: '.post',
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat | help',
                content_css: '//www.tiny.cloud/css/codepen.min.css'
            });
        })



        /*
        $("#ajaxbtn").on("click", function(){
            $.get(
                "index.php?action=ajax",
                {
                    nb : $("#nbajax").text()
                },
                function(result){
                    $("#nbajax").html(result)
                }
            )
        })*/
    </script>
</body>

</html>
