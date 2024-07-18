<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="reset-password-container">
        <div class="logo">
            <img src="<?= base_url('assets/') ?>images/tut-wuri.png" alt="Logo">
        </div>
        <h2>Memeriksa Code Verifikasi</h2>
        <p>Kode otentikasi telah dikirim ke email Anda.</p>
        <form id="verification-form">
            <div class="form-group">
            <input type="text" class="form-control text-center" id="code" placeholder="Masukkan kode" autocomplete="off">
            <div class="invalid-feedback" id="codeError">Kode verifikasi salah. Silakan coba lagi.</div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Verifikasi</button>
        </form>
        <footer class="mt-4">
            <p>© 2024</p>
        </footer>
        </div>
    </div>
</div>