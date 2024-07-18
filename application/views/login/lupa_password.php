<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="reset-password-container">
            <div class="logo">
                <img src="<?= base_url('assets/') ?>images/tut-wuri.png" alt="Logo">
            </div>
            <h2>Lupa Password?</h2>
            <p>Masukkan alamat email Anda dan kami akan mengirimi Anda email berisi kode verifikasi untuk mengatur ulang kata sandi Anda</p>
            <form id="reset-password-form">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email address" autocomplete="off">
                    <div class="invalid-feedback" id="emailError">Email tidak valid. Silakan coba lagi.</div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Kirim</button>
            </form>
            <footer class="mt-4">
                <p>© 2024</p>
            </footer>
        </div>
    </div>
</div>