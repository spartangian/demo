<html class="h-full bg-gray-100">
<?php require('./views/partials/head.php'); ?>
<body class="h-full">
<!--
This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <?php require('./views/partials/nav.php'); ?>

        <?php require('./views/partials/banner.php'); ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <p>My Notes</p>
                <?php foreach($notes as $note): ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= $note['body'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </div>
        </main>
    </div>

</body>
</html>