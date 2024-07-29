    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11">
                <div class="my-4">
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="profile.html" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                    </li>
                    </ul>
                    <form>
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                        <div class="avatar avatar-xl">
                            <img src="<?= base_url('assets/') ?>avatars/face-7.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        </div>
                        <div class="col">
                        <div class="row align-items-center">
                        <div class="row mb-2">
                            <div class="col12-md-7">
                                <h4 class="mb-1">Nusroh Latifah</h4>
                                <p class="small mb-3"><span class="badge badge-dark">Bantul, Yogyakarta</span></p>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <hr class="my-2">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" class="form-control" value="Nusroh Latifah">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="gelardepan">Gelar Depan</label>
                        <input type="text" id="gelardepan" class="form-control" value="">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="gelarbelakang">Gelar Belakang</label>
                        <input type="text" id="gelarbelakang" class="form-control" value="S. Pd, M. Pd">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="l/p">L/P</label>
                        <input type="text" id="l/p" class="form-control" value="Perempuan">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="nip">NIP</label>
                        <input type="text" id="nip" class="form-control" value="1968378723767342">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="nuptk">NUPTK</label>
                        <input type="text" id="nuptk" class="form-control" value="4467823632914">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="nusrohlatifah@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" value="Kalipakel. Donotirto, Kretek, Bantul, Yogyakarta">
                    </div>
                    
                    <hr class="my-4">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputOldPassword">Kata Sandi Lama</label>
                                <input type="password" class="form-control" id="inputOldPassword">
                            </div>
                            <div class="form-group">
                                <label for="inputNewPassword">Kata Sandi Baru</label>
                                <input type="password" class="form-control" id="inputNewPassword">
                            </div>
                            <div class="form-group">
                                <label for="inputConfirmPassword">Ulangi Kata Sandi Baru</label>
                                <input type="password" class="form-control" id="inputConfirmPassword">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="validatePassword()">Simpan</button>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2">Persyaratan kata sandi</p>
                            <p class="small text-muted mb-2"> Untuk membuat kata sandi baru, Anda harus memenuhi semua persyaratan berikut: </p>
                            <ul class="small text-muted pl-4 mb-0">
                                <li> Minimal 8 karakter </li>
                                <li> Setidaknya satu karakter khusus </li>
                                <li> Setidaknya satu nomor </li>
                                <li> Tidak boleh sama dengan password sebelumnya </li>
                            </ul>
                        </div>
                    </div>
                    </form>
                </div> <!-- /.card-body -->
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->