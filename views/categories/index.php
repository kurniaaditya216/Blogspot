<?php include 'views/layouts/header.php'; ?>

<style>

    .page-header{
        display:flex;
        justify-content:space-between;
        align-items:center;
        margin-bottom:35px;
    }

    .page-title{
        font-size:34px;
        font-weight:700;
        color:#111827;
    }

    .category-card{
        background:white;
        padding:22px 25px;
        border-radius:18px;
        margin-bottom:18px;
        box-shadow:0 5px 20px rgba(0,0,0,0.06);
        display:flex;
        justify-content:space-between;
        align-items:center;
        transition:0.3s;
    }

    .category-card:hover{
        transform:translateY(-3px);
        box-shadow:0 10px 25px rgba(0,0,0,0.10);
    }

    .category-name{
        font-size:18px;
        font-weight:600;
        color:#374151;
    }

    .category-slug{
        font-size:14px;
        color:#9ca3af;
        margin-top:5px;
    }

    .action-buttons{
        display:flex;
        gap:10px;
    }

    .btn-delete{
        background:#ef4444;
        color:white;
        border:none;
        padding:10px 16px;
        border-radius:10px;
        text-decoration:none;
        font-size:14px;
        transition:0.3s;
    }

    .btn-delete:hover{
        background:#dc2626;
    }

    .empty-state{
        background:white;
        padding:40px;
        border-radius:20px;
        text-align:center;
        color:#6b7280;
        box-shadow:0 5px 20px rgba(0,0,0,0.06);
    }

</style>

<div class="container">

    <div class="page-header">

        <h1 class="page-title">
            📁 Daftar Kategori
        </h1>

        <a href="?page=create-category" class="btn">

            + Tambah Kategori

        </a>

    </div>

    <?php if(mysqli_num_rows($categories) > 0) : ?>

        <?php while($row = mysqli_fetch_assoc($categories)) : ?>

            <div class="category-card">

                <div>

                    <div class="category-name">

                        <?= $row['name']; ?>

                    </div>

                    <div class="category-slug">

                        slug:
                        <?= $row['slug']; ?>

                    </div>

                </div>

                <div class="action-buttons">

                    <a
                        href="?page=delete-category&id=<?= $row['id']; ?>"
                        class="btn-delete"
                        onclick="return confirm('Yakin ingin menghapus kategori ini?')"
                    >

                        Hapus

                    </a>

                </div>

            </div>

        <?php endwhile; ?>

    <?php else : ?>

        <div class="empty-state">

            <h2>Belum Ada Kategori</h2>

            <br>

            <p>
                Silakan tambahkan kategori pertama kamu.
            </p>

        </div>

    <?php endif; ?>

</div>

<?php include 'views/layouts/footer.php'; ?>