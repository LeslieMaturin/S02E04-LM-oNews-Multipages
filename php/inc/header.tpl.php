<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper">

      <header class="left <?php
        if (isset($photoHeader)) {
          echo $photoHeader;
        }
      ?>">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <!-- affichage dynamique des liens à partir du tableau $navData -->
            <?php foreach ($navData as $anchor => $url) : ?>
              <li class="left__nav-item">
                <a href="<?php echo $url ?>" class="left__nav-link"><?= $anchor ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </header>