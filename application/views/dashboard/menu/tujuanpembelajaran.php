    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Daftar Tujuan Pembelajaran</h2>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="<?= base_url('dashboard/tambahtujuanpembelajaran') ?>" class="btn btn-sm btn-primary">
                            <i class="bi bi-plus-circle pr-2"></i> Tambah Tujuan Pembelajaran
                        </a>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container">
                                <form>
                                    <div class="form-group">
                                        <label for="fase">Pilih Fase</label>
                                        <select class="form-control dropdown" id="fase" name="fase">
                                            <option disabled selected>Pilih Fase</option>
                                            <option value="faseA">Fase A</option>
                                            <option value="faseB">Fase B</option>
                                            <option value="faseC">Fase C</option>
                                            <option value="faseD">Fase D</option>
                                            <option value="faseE">Fase E</option>
                                            <option value="faseF">Fase F</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tingkat">Pilih Tingkat</label>
                                        <select class="form-control dropdown" id="tingkat" name="tingkat">
                                            <option disabled selected>Pilih Tingkat</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="semester">Pilih Semester</label>
                                        <select class="form-control dropdown" id="semester" name="semester">
                                            <option disabled selected>Pilih Semester</option>
                                            <option value="2023/2024ganjil">2023/2024 ganjil</option>
                                            <option value="2023/2024genap">2023/2024 genap</option>
                                            <option value="2024/2025ganjil">2024/2025 ganjil</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="mapel">Pilih Mapel</label>
                                        <select class="form-control dropdown" id="mapel" name="mapel">
                                            <option disabled selected>Pilih Mapel</option>
                                            <option value="Indonesia">Bahasa Indonesia</option>
                                            <option value="Inggris">Bahasa Inggris</option>
                                            <option value="Matematika">Matematika</option>
                                        </select>
                                    </div>
                                </form>
                                
                                <div id="tableSection" class="table-responsive mt-4" style="display: none;">
                                    <table class="table table-bordered custom-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2" class="text-black-50 text-center">Tujuan Pembelajaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TP 1</td>
                                                <td>Menjelaskan konsep dasar manajemen proyek</td>
                                            </tr>
                                            <tr>
                                                <td>TP 2</td>
                                                <td>Mendeskripsikan tahapan dalam perencanaan proyek</td>
                                            </tr>
                                            <tr>
                                                <td>TP 3</td>
                                                <td>Mengidentifikasi risiko dalam manajemen proyek</td>
                                            </tr>
                                            <tr>
                                                <td>TP 4</td>
                                                <td>Menggunakan alat dan teknik dalam manajemen proyek</td>
                                            </tr>
                                            <tr>
                                                <td>TP 5</td>
                                                <td>Menganalisis studi kasus manajemen proyek</td>
                                            </tr>
                                            <tr>
                                                <td>TP 6</td>
                                                <td>Mengevaluasi kinerja proyek berdasarkan kriteria yang ditetapkan</td>
                                            </tr>
                                        </tbody>                                  
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->