<?php // navbar – navigační lišta
require INC . '/pages.php';
?>

<!-- top navigation bar -->
<nav class="sticky top-0 bg-gray-800 border-b border-gray-700 shadow-md">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <!-- logo & title -->
        <a href='/' class="flex items-center text-white">
            <img src="./assets/drink.jpg" class="h-8 mr-3" />
            <span class="text-2xl font-semibold whitespace-nowrap">
                <?= TITLE . getJmeno(': ') ?>
            </span>
        </a>

        <!-- hamburger menu (md:hidden) -->
        <button id="menu-toggle"
            class="md:hidden inline-flex items-center p-2 w-10 h-10 justify-center text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
            <i class="fa fa-bars fa-lg"></i>
        </button>

        <!-- menu items -->
        <div class="hidden w-full md:block md:w-auto md:ml-auto" id="menu">
            <ul class="font-medium flex flex-col md:p-0 mt-4 md:flex-row md:mt-0">
                <?php foreach ($pages as $href => $title) { ?>
                    <li>
                        <a href="<?= $href ?>" class="block p-2 rounded text-white hover:bg-gray-700">
                            <?= $title ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let menu = document.getElementById('menu');
        let toggleMenu = () => menu.classList.toggle('hidden')

        let button = document.getElementById('menu-toggle');
        button.addEventListener('click', toggleMenu)
    });
</script>
