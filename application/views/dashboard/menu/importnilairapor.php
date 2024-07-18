    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Import Nilai</h2>
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
                            <div class="row mb-4" id="import-section">                
                                <div class="col-12">
                                <div class="mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <strong>Import Nilai Rapor</strong>
                                        <a href="link-ke-file-download" class="btn-sm btn-primary">Download Format Nilai</a>
                                    </div>
                                    <div class="card-body">
                                        <div id="drag-drop-area"></div>
                                    </div> <!-- .card-body -->
                                </div> <!-- .card -->
                                </div> <!-- .col -->                  
                            </div> <!-- .row -->
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->