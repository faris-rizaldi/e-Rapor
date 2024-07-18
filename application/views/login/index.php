<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="login-card">
                <h3 class="text-center mb-2 mt-2">Masuk ke Akun</h3>
                <p class="text-center text-muted mb-4">Silakan masukkan username, kata sandi, dan semester Anda untuk melanjutkan</p>
                <form id="loginForm" onsubmit="return validateForm(event)">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" autocomplete="off">
                        <div id="usernameError" class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                        <div id="passwordError" class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <select class="form-control" id="semester" style="padding-right: 2.5rem;">
                            <option value="">Select semester</option>
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                        </select>
                        <div id="semesterError" class="text-danger"></div>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Ingat Password</label>
                        <a href="<?= base_url('login/lupapassword') ?>" class="float-right">Lupa Password?</a>
                    </div>                      
                    <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>