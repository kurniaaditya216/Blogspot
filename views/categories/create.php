<?php include 'views/layouts/header.php'; ?>

<div class="container">

    <div style="
        background:white;
        padding:30px;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,0.08);
    ">

        <h1>Tambah Kategori</h1>

        <br>

        <form action="?page=store-category" method="POST">

            <input
                type="text"
                name="name"
                placeholder="Nama kategori"
                required
                style="
                    width:100%;
                    padding:12px;
                    border:1px solid #ccc;
                    border-radius:10px;
                    margin-bottom:20px;
                "
            >

            <button class="btn">
                Simpan
            </button>

        </form>

    </div>

</div>

<?php include 'views/layouts/footer.php'; ?>