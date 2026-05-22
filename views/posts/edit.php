<?php include 'views/layouts/header.php'; ?>

<style>

    .form-card{
        background:white;
        padding:40px;
        border-radius:20px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
        max-width:700px;
        margin:auto;
    }

    .form-title{
        font-size:32px;
        font-weight:700;
        margin-bottom:30px;
        color:#111827;
    }

    .form-group{
        margin-bottom:25px;
    }

    .form-label{
        display:block;
        margin-bottom:10px;
        font-weight:600;
        color:#374151;
    }

    .form-control{
        width:100%;
        padding:14px 16px;
        border:1px solid #d1d5db;
        border-radius:12px;
        font-size:15px;
        transition:0.3s;
        outline:none;
    }

    .form-control:focus{
        border-color:#4f46e5;
        box-shadow:0 0 0 4px rgba(79,70,229,0.15);
    }

    textarea.form-control{
        resize:none;
    }

    .btn-submit{
        background:#f59e0b;
        color:white;
        border:none;
        padding:14px 24px;
        border-radius:12px;
        font-size:15px;
        font-weight:600;
        cursor:pointer;
        transition:0.3s;
    }

    .btn-submit:hover{
        background:#d97706;
        transform:translateY(-2px);
    }

</style>

<div class="container">

    <div class="form-card">
<a
    href="?page=post"
    style="
        display:inline-block;
        margin-bottom:25px;
        text-decoration:none;
        color:#4f46e5;
        font-weight:600;
    "
>
    ← Kembali ke Daftar Post
</a>
        <h1 class="form-title">
            ✏️ Edit Artikel
        </h1>

        <form
            action="?page=update-post&id=<?= $post['id']; ?>"
            method="POST"
        >

            <div class="form-group">

                <label class="form-label">
                    Judul Artikel
                </label>

                <input
                    type="text"
                    name="title"
                    class="form-control"
                    value="<?= $post['title']; ?>"
                    required
                >

            </div>

            <div class="form-group">

                <label class="form-label">
                    Kategori
                </label>

                <select
                    name="category_id"
                    class="form-control"
                    required
                >

                    <option value="">
                        -- Pilih Kategori --
                    </option>

                    <?php while($category = mysqli_fetch_assoc($categories)) : ?>

                        <option
                            value="<?= $category['id']; ?>"

                            <?= $post['category_id'] == $category['id']
                                ? 'selected'
                                : '';
                            ?>
                        >

                            <?= $category['name']; ?>

                        </option>

                    <?php endwhile; ?>

                </select>

            </div>

            <div class="form-group">

                <label class="form-label">
                    Isi Artikel
                </label>

                <textarea
                    name="content"
                    class="form-control"
                    rows="8"
                    required
                ><?= $post['content']; ?></textarea>

            </div>

            <button type="submit" class="btn-submit">

                💾 Update Artikel

            </button>

        </form>

    </div>

</div>

<?php include 'views/layouts/footer.php'; ?>