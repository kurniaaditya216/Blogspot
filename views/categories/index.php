<?php include 'views/layouts/header.php'; ?>

<div class="container">

    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:30px;
    ">

        <h1>Daftar Kategori</h1>

        <a href="?page=create-category" class="btn">
            + Tambah Kategori
        </a>

    </div>

    <?php while($row = mysqli_fetch_assoc($categories)) : ?>

        <div style="
            background:white;
            padding:20px;
            border-radius:12px;
            margin-bottom:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
        ">

            <?= $row['name']; ?>

        </div>

    <?php endwhile; ?>

</div>

<?php include 'views/layouts/footer.php'; ?>