    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Nilai Deskripsi Siswa</h2>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container">
                                <form>
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
                                </form>
                            </div>                 

                            <form id="myForm" action="">
                                <div class="table-responsive mb-4">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" scope="col" class="text-center text-black-50">No</th>
                                                <th rowspan="2" scope="col" class="text-center text-black-50" style="width: 200px;">Nama Siswa</th>
                                                <th rowspan="2" scope="col" class="text-center text-black-50">NISN/NIS</th>
                                                <th colspan="3" scope="col" class="text-center text-black-50">Nilai Rapor dan Deskripsi Capaian Kompetensi Siswa</th>
                                            </tr>
                                            <tr>
                                                <th class="text-center text-black-50 column-width">Nilai</th>
                                                <th class="text-center text-black-50">Deskripsi Capaian Tertinggi</th>
                                                <th class="text-center text-black-50">Deskripsi Capaian Terendah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Ahmad Fauzan</td>
                                                <td><input type="text" class="form-control" name="nisn1" value="1234567891">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai1" value="81">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi1" value="Sangat Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah1" value="Cukup">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Siti Aminah</td>
                                                <td><input type="text" class="form-control" name="nisn2" value="1234567892">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai2" value="88">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi2" value="Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah2" value="Kurang">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Andi Pratama</td>
                                                <td><input type="text" class="form-control" name="nisn3" value="1234567893">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai3" value="85">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi3" value="Sangat Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah3" value="Cukup">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Dewi Sartika</td>
                                                <td><input type="text" class="form-control" name="nisn4" value="1234567894">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai4" value="90">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi4" value="Sangat Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah4" value="Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Budi Santoso</td>
                                                <td><input type="text" class="form-control" name="nisn5" value="1234567895">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai5" value="70">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi5" value="Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah5" value="Kurang">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Fitriani Rahma</td>
                                                <td><input type="text" class="form-control" name="nisn6" value="1234567896">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai6" value="78">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi6" value="Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah6" value="Cukup">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">7</th>
                                                <td>Ridwan Kamil</td>
                                                <td><input type="text" class="form-control" name="nisn7" value="1234567897">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai7" value="82">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi7" value="Sangat Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah7" value="Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">8</th>
                                                <td>Yuni Kartika</td>
                                                <td><input type="text" class="form-control" name="nisn8" value="1234567898">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control column-width" name="nilai8" value="88">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_tertinggi8" value="Sangat Baik">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="capaian_terendah8" value="Baik">
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