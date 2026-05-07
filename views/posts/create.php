<?php include 'views/layouts/header.php'; ?>

<div class="container">

    <div style="
        background:white;
        padding:30px;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,0.08);
    ">

        <h1>Tambah Artikel</h1>

        <br>

        <form action="?page=store-post" method="POST">

            <div style="margin-bottom:20px;">

                <label>Judul</label>

                <br><br>

                <input
                    type="text"
                    name="title"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        border:1px solid #ccc;
                        border-radius:10px;
                    "
                >

            </div>

            <div style="margin-bottom:20px;">

                <label>Konten</label>

                <br><br>

                <textarea
                    name="content"
                    rows="10"
                    required
                    style="
                        width:100%;
                        padding:12px;
                        border:1px solid #ccc;
                        border-radius:10px;
                    "
                ></textarea>

            </div>

            <button class="btn">
                Simpan
            </button>

        </form>

    </div>

</div>

<?php include 'views/layouts/footer.php'; ?>