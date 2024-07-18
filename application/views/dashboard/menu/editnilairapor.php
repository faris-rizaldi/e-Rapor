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
                                                <th class="text-center text-black-50 column-width">
                                                    Nilai
                                                </th>
                                                <th class="text-center text-black-50">
                                                    Deskripsi Capaian Tertinggi 
                                                </th>
                                                <th class="text-center text-black-50">
                                                    Deskripsi Capaian Terendah 
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Faris Rizaldi</td>
                                                <td><input type="text" class="form-control" name="sumantif1">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>                                 
                                                <td><input type="text" class="form-control column-width" name="average_sumantif">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="ats">
                                                    <div class="invalid-feedback text-danger">Harap isi kolom ini</div>
                                                </td>
                                                <td><input type="text" class="form-control" name="aas">
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