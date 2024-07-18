<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="reset-password-container">
        <div class="logo">
            <img src="<?= base_url('assets/') ?>images/tut-wuri.png" alt="Logo">
        </div>
        <h2>Ubah Password</h2>
        <p>Kata sandi Anda sebelumnya telah diatur ulang. Silakan atur kata sandi baru untuk akun Anda.</p>
        <form id="change-password-form">
            <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Masukkan password baru" autocomplete="off">
            <div class="invalid-feedback" id="passwordError">Password tidak boleh kosong.</div>
            </div>
            <div class="form-group">
            <input type="password" class="form-control" id="password2" placeholder="Masukkan ulang password baru" autocomplete="off">
            <div class="invalid-feedback" id="password2Error">Password tidak cocok. Silakan coba lagi.</div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ubah Password</button>
        </form>
        <footer class="mt-4">
            <p>© 2024</p>
        </footer>
        </div>
    </div>
</div>