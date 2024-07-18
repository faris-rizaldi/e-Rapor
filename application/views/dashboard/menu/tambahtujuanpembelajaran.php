
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Tambah Tujuan Pembelajaran</h2>
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
                                                <td><input type="text" class="form-control" name="TP1" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>TP 2</td>
                                                <td><input type="text" class="form-control" name="TP2" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>TP 3</td>
                                                <td><input type="text" class="form-control" name="TP3" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>TP 4</td>
                                                <td><input type="text" class="form-control" name="TP4" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>TP 5</td>
                                                <td><input type="text" class="form-control" name="TP5" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                                <td>TP 6</td>
                                                <td><input type="text" class="form-control" name="TP6" autocomplete="off"></td>
                                            </tr>
                                            <tr>
                                            <td>TP 7</td>
                                            <td><input type="text" class="form-control" name="TP7" autocomplete="off"></td>
                                        </tr>
                                        <tr>
                                            <td>TP 8</td>
                                            <td><input type="text" class="form-control" name="TP8" autocomplete="off"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div id="errorSection" class="text-danger" style="display: none;">
                                        <p>Semua tujuan pembelajaran harus diisi.</p>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center mt-3">
                                        <button id="kirimButton" type="button" class="btn btn-primary" style="display: none;">
                                            <span></span>Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
