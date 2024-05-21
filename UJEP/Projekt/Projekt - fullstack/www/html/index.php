<?php
// úvodní stránka:
require '../prolog.php';
require INC . '/html-begin.php';
require INC . '/nav.php';
?>

<style>
  p {
    margin-bottom: .6em;
  }
</style>

<main class="container mx-auto pb-10 m-6 text-white">
  <h1 class="pb-6 text-5xl text-center font-bold">
    <?= TITLE ?>
  </h1>

  <p class="text-lg mb-6">
    Barmanská profese se děli na dva tábory. Jedni vám v roztrhaných džínách a ušmudlaném tričku
    nalijí panáka vodky za 30 Kč, jiní vám v pečlivě vyžehleném obleku s pěstovaným knírkem
    udělají pečlivě nalitý koktejl za 500 Kč. Ten druhý typ barmanů nazýváme mixology, praktikanty
    oboru mixologie, což je odborný termín pro tvorbu opravdu dobrých koktejlů.
  </p>

  <div class="mt-6 space-y-4 text-lg">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
    <p>Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    <p>Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
    <p>Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet.</p>
    <p>Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    <p>Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti.</p>
    <p>Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus.</p>
    <p>Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui.</p>
    <p>Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>
    <p>Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Phasellus convallis, nulla non hendrerit lacinia, est justo convallis metus, sed pharetra odio ligula in dolor.</p>
    <p>Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Phasellus convallis, nulla non hendrerit lacinia, est justo convallis metus, sed pharetra odio ligula in dolor.</p>
  </div>
</main>

<?php require INC . '/html-end.php'; ?>
