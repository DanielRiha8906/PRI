<?php // vypsat drinky:
require '../prolog.php';
require INC . '/html-begin.php';
require INC . '/nav.php';
require INC . '/xmlTools.php';
require INC . '/db.php';
?>

<h1 class="py-6 text-center text-5xl">Drinky</h1>

<form class="text-center text-black" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select name="difficulty">
            <option value="začátečník">začátečník</option>
            <option value="pokročilý">Pokročilý</option>
            <option value="mistr">mistr</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <div class="bg-zinc-50 flex justify-center">
    <ol class="fa-ul">
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve selected difficulty
        $selectedDifficulty = $_POST["difficulty"];
         foreach (xmlGetDiff(DRINKS, $selectedDifficulty) as $basename) { ?>
            <li>
                <i class="fa fa-li fa-glass"></i>
                <a class="hover:underline" href="?drink=<?= $basename ?>">
                    <?= $basename ?> (<?= precteno($basename) ?>)
                </a>
            </li> <?php
        }
    }
    ?>
    </ol>
</div>

<section class="flex justify-center">
    <?php // zvolený drink:
    if ($drink = @$_GET['drink']) {
        if (TRANSFORM_SERVER_SIDE) { ?>
            <?= xmlTransform(DRINKS . "/$drink.xml", XML . '/recept.xsl') ?>
        <?php } else { ?>
            <h2 id="nazev" class="text-center text-2xl m-4" />
            <script>
                loadXML(
                    "/serve/getDrink.php?drink=<?= $drink ?>",
                    (xmlDom) => {
                        // zde je možné pracovat s DOM ...
                        document.getElementById("nazev").innerHTML =
                            xmlDom.getElementsByTagName("název")[0].textContent;
                        // ... atd.
                    })
            </script>
        <?php }
    } ?>
</section>

<?php require INC . '/html-end.php';