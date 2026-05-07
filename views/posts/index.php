<?php include 'views/layouts/header.php'; ?>

<div class="container">

    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:30px;
    ">

        <h1>Daftar Artikel</h1>

        <a href="?page=create-post" class="btn">
            + Tambah Post
        </a>

    </div>

    <?php while($row = mysqli_fetch_assoc($posts)) : ?>

        <div style="
            background:white;
            padding:25px;
            border-radius:15px;
            margin-bottom:20px;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
        ">

            <h2>
                <?= $row['title']; ?>
            </h2>

            <br>

            <p>
                <?= substr($row['content'], 0, 120); ?>...
            </p>

            <br>

            <a href="?page=show-post&id=<?= $row['id']; ?>" class="btn">
                Baca
            </a>

            <a href="?page=edit-post&id=<?= $row['id']; ?>" class="btn">
                Edit
            </a>

        </div>

    <?php endwhile; ?>

</div>

<?php include 'views/layouts/footer.php'; ?>