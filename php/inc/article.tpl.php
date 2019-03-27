<main class="right">

  <h2 class="right__title"><?= $articleData['title'] ?></h2>
  <div class="posts">
    <article class="post post--solo">
      <a href="" class="post__category post__category--color-team"><?= $articleData['category'] ?></a>
      <div class="post__meta">
        <img class="post__author-icon" src="../images/<?= $articleData['author_image'] ?>" alt="">
        <strong class="post__author"><?= $articleData['author'] ?></strong>
        <time datetime="2018-03-27"><?= $articleData['date'] ?></time>
      </div>
      <p>
        <?= $articleData['text'] ?>
      </p>
      <a href="index.php" class="post__link">Back to home</a>
    </article>
  </div>
</main>