    <script>
        function validateForm(event) {
            event.preventDefault(); 

            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var semester = document.getElementById('semester').value;
            var isValid = true;

            document.getElementById('usernameError').innerHTML = '';
            document.getElementById('passwordError').innerHTML = '';
            document.getElementById('semesterError').innerHTML = '';

            if (username === '') {
                document.getElementById('usernameError').innerHTML = 'Username harus diisi';
                isValid = false;
            }

            if (password === '') {
                document.getElementById('passwordError').innerHTML = 'Password harus diisi';
                isValid = false;
            }

            if (!semester) {
                document.getElementById('semesterError').innerHTML = 'Semester harus dipilih';
                isValid = false;
            }

            if (isValid) {
                window.location.href = '<?= base_url('dashboard') ?>'; 
            }

            return false;
        }
    </script>

    <script>
        document.getElementById('reset-password-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var emailInput = document.getElementById('email');
            var emailError = document.getElementById('emailError');
            var emailValue = emailInput.value.trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailValue) {
            emailInput.classList.add('is-invalid');
            emailError.textContent = 'Email tidak boleh kosong.';
            emailError.style.display = 'block';
            } else if (!emailPattern.test(emailValue)) {
            emailInput.classList.add('is-invalid');
            emailError.textContent = 'Email tidak valid. Silakan coba lagi.';
            emailError.style.display = 'block';
            } else {
            emailInput.classList.remove('is-invalid');
            emailError.style.display = 'none';
            window.location.href = '<?= base_url('login/verifikasi') ?>?email=' + encodeURIComponent(emailValue); 
            }
        });
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>

    <script>
        // Mendapatkan nilai email dari parameter query string
        var userEmail = new URLSearchParams(window.location.search).get('email');
        // Menampilkan email di dalam pesan konfirmasi
        document.getElementById('userEmail').textContent = userEmail;
    </script>

    <script>
        document.getElementById('verification-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var codeInput = document.getElementById('code');
            var codeError = document.getElementById('codeError');
            var codeValue = codeInput.value.trim();
            var correctCode = "2024"; // The correct verification code

            if (!codeValue) {
            codeInput.classList.add('is-invalid');
            codeError.textContent = 'Kode verifikasi tidak boleh kosong.';
            codeError.style.display = 'block';
            } else if (codeValue !== correctCode) {
            codeInput.classList.add('is-invalid');
            codeError.textContent = 'Kode verifikasi salah. Silakan coba lagi.';
            codeError.style.display = 'block';
            } else {
            codeInput.classList.remove('is-invalid');
            codeError.style.display = 'none';
            // Directly redirect to change-password.html upon successful verification
            window.location.href = '<?= base_url('login/gantipassword') ?>';
            }
        });
    </script>

    <script>
        document.getElementById('change-password-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var passwordInput = document.getElementById('password');
            var password2Input = document.getElementById('password2');
            var passwordError = document.getElementById('passwordError');
            var password2Error = document.getElementById('password2Error');
            var passwordValue = passwordInput.value.trim();
            var password2Value = password2Input.value.trim();

            if (!passwordValue) {
            passwordInput.classList.add('is-invalid');
            passwordError.textContent = 'Password tidak boleh kosong.';
            passwordError.style.display = 'block';
            } else {
            passwordInput.classList.remove('is-invalid');
            passwordError.style.display = 'none';
            } 

            if (passwordValue && passwordValue !== password2Value) {
            password2Input.classList.add('is-invalid');
            password2Error.textContent = 'Password tidak cocok. Silakan coba lagi.';
            password2Error.style.display = 'block';
            } else {
            password2Input.classList.remove('is-invalid');
            password2Error.style.display = 'none';
            }
            
            if (passwordValue && passwordValue === password2Value) {
            // Redirect to password-success.html if both passwords are valid
            window.location.href = '<?= base_url('login/gantipasswordberhasil') ?>';
            }
        });
    </script>

    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/simplebar.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/daterangepicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.stickOnScroll.js"></script>
    <script src="<?= base_url('assets/') ?>js/tinycolor-min.js"></script>
    <script src="<?= base_url('assets/') ?>js/config.js"></script>
    <script src="<?= base_url('assets/') ?>js/apps.js"></script>
</body>
</html>