<?php include 'views/layouts/header.php'; ?>

<div class="container">

    <div style="
        background:white;
        padding:30px;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,0.08);
    ">

        <h1>
            <?= $post['title']; ?>
        </h1>

        <br>

        <p style="line-height:1.8;">
            <?= nl2br($post['content']); ?>
        </p>

        <br>

        <a href="?page=post" class="btn">
            Kembali
        </a>

    </div>

</div>

<?php include 'views/layouts/footer.php'; ?>