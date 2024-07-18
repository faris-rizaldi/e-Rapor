
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Input Nilai Akhir Siswa</h2>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container">
                                <div class="form-group">
                                    <label for="kelas">Pilih Kelas</label>
                                    <select class="form-control" id="kelas" name="kelas"> 
                                    <option disabled selected>Pilih Kelas</option>                                                               
                                        <option value="kelas7">Kelas 7</option>
                                        <option value="kelas8">Kelas 8</option>
                                        <option value="kelas9">Kelas 9</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mapel">Pilih Mata Pelajaran</label>
                                    <select class="form-control" id="mapel" name="mapel"> 
                                    <option disabled selected>Pilih Mata Pelajaran</option>                                
                                        <option value="Indonesia">Bahasa Indonesia</option>
                                        <option value="Inggris">Bahasa Inggris</option>
                                        <option value="Matematika">Matematika</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="semester">Pilih Semester</label>
                                    <select class="form-control" id="semester" name="semester">
                                        <option disabled selected>Pilih Semester</option>
                                        <option value="2023/2024ganjil">2023/2024 ganjil</option>
                                        <option value="2023/2024genap">2023/2024 genap</option>
                                        <option value="2024/2025ganji">2024/2025 ganjil</option>
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end align-items-center mb-3 mt-4">
                                <a href="<?= base_url('dashboard/editnilairapor') ?>" class="btn btn-sm btn-primary">
                                    <span class="fe fe-arrow-right fe-16 mr-2"></span>Lihat dan Edit Deskripsi
                                </a>
                            </div>
                            <form id="myForm" action="">
                                <div class="table-responsive mb-4">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" scope="col" class="text-center text-black-50">No</th>
                                            <th rowspan="2" scope="col" class="text-center text-black-50" style="width: 200px;">Nama Siswa</th>
                                            <th colspan="6" scope="col" class="text-center text-black-50">Sumantif</th>
                                            <th colspan="1" scope="col" class="text-center text-black-50 column-width">Rata-Rata Sumantif</th>
                                            <th colspan="1" scope="col" class="text-center text-black-50">ATS</th>
                                            <th colspan="1" scope="col" class="text-center text-black-50">AAS</th>
                                            <th rowspan="2" scope="col" class="text-center text-black-50">Nilai Rapor</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center text-black-50" scope="col">1</th>
                                            <th class="text-center text-black-50" scope="col">2</th>
                                            <th class="text-center text-black-50" scope="col">3</th>
                                            <th class="text-center text-black-50" scope="col">4</th>
                                            <th class="text-center text-black-50" scope="col">5</th>
                                            <th class="text-center text-black-50" scope="col">6</th>
                                            <th class="text-center text-black-50 column-width">
                                                <input type="text" class="form-control" name="average_sumantif" autocomplete="off">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </th>
                                            <th class="text-center text-black-50 column-width">
                                                <input type="text" class="form-control" name="ats" autocomplete="off">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </th>
                                            <th class="text-center text-black-50 column-width">
                                                <input type="text" class="form-control" name="aas" autocomplete="off">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Faris Rizaldi</td>
                                            <td><input type="text" class="form-control column-width" name="sumantif1">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="sumantif2">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="sumantif3">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="sumantif4">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="sumantif5">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="sumantif6">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="average_sumantif">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="ats">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="aas">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                            <td><input type="text" class="form-control column-width" name="nilai_rapor">
                                                <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                    <div class="d-flex justify-content-end align-items-center mb-3 mt-4">
                                    <button id="submitButton" type="submit" class="btn btn-sm btn-primary" onclick="submitForm()">
                                        <span class="fe fe-arrow-right fe-16 mr-2"></span>Kirim
                                    </button>
                                </div>
                                </div>
                            </form>
                        </div> <!-- / .card -->
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->