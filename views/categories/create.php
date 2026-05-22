<?php include 'views/layouts/header.php'; ?>

<style>

    .form-card{
        background:white;
        padding:40px;
        border-radius:20px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
        max-width:600px;
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
        outline:none;
        transition:0.3s;
    }

    .form-control:focus{
        border-color:#4f46e5;
        box-shadow:0 0 0 4px rgba(79,70,229,0.15);
    }

    .btn-submit{
        background:#4f46e5;
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
        background:#4338ca;
        transform:translateY(-2px);
    }

    .back-btn{
        display:inline-block;
        margin-bottom:25px;
        text-decoration:none;
        color:#4f46e5;
        font-weight:600;
    }

    .back-btn:hover{
        color:#4338ca;
    }

</style>

<div class="container">

    <div class="form-card">

        <a href="?page=category" class="back-btn">

            ← Kembali ke Daftar Kategori

        </a>

        <h1 class="form-title">

            📁 Tambah Kategori

        </h1>

        <form action="?page=store-category" method="POST">

            <div class="form-group">

                <label class="form-label">

                    Nama Kategori

                </label>

                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Masukkan nama kategori..."
                    required
                >

            </div>

            <button type="submit" class="btn-submit">

                🚀 Simpan Kategori

            </button>

        </form>

    </div>

</div>

<?php include 'views/layouts/footer.php'; ?>