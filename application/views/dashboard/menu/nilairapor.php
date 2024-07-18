    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Perkembangan Nilai Rapor Siswa</h2>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="container">
                                <form>
                                    <div class="form-group">
                                        <label for="kelas">Pilih Kelas</label>
                                        <select class="form-control dropdown" id="kelas" name="kelas">
                                            <option disabled selected>Pilih Kelas</option>
                                            <option value="IX-A">IX-A</option>
                                            <option value="IX-B">IX-B</option>
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
                                    <div class="form-group">
                                    <label for="jenisdata">Jenis Data</label>
                                    <select class="form-control dropdown" id="jenisdata" name="jenisdata">
                                        <option disabled selected>Jenis Data</option>
                                        <option value="perkembangannilairapor">Perkembangan Nilai Rapor</option>
                                        <option value="perkembangandeskripsirapor">Perkembangan Deskripsi Rapor</option>
                                    </select>
                                    </div>                       
                                </form>
                            
                                <table id="perkembangannilairapor" class="table table-bordered" style="display:none;">
                                    <thead class="table-header">
                                        <tr>
                                            <th rowspan="2" class="text-black-50">No</th>
                                            <th rowspan="2" class="text-black-50">Nama Siswa</th>
                                            <th rowspan="2" class="text-black-50">NISN</th>
                                            <th rowspan="2" class="text-black-50">NIS</th>
                                            <th colspan="7" class="text-black-50">Nilai Semester</th>
                                        </tr>
                                        <tr>
                                            <th class="text-black-50">Smt 1</th>
                                            <th class="text-black-50">Smt 2</th>
                                            <th class="text-black-50">Smt 3</th>
                                            <th class="text-black-50">Smt 4</th>
                                            <th class="text-black-50">Smt 5</th>
                                            <th class="text-black-50">Smt 6</th>
                                            <th class="text-black-50">Rata-Rata</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Example Name</td>
                                            <td>1234567890</td>
                                            <td>123456</td>
                                            <td>80</td>
                                            <td>85</td>
                                            <td>90</td>
                                            <td>87</td>
                                            <td>88</td>
                                            <td>89</td>
                                            <td>86.5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            
                                <table id="perkembangandeskripsirapor" class="table table-bordered" style="display:none;">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" scope="col" class="text-center text-black-50">No</th>
                                            <th rowspan="2" scope="col" class="text-center text-black-50" style="width: 200px;">Nama Siswa</th>
                                            <th rowspan="2" scope="col" class="text-center text-black-50">NISN</th>
                                            <th rowspan="2" scope="col" class="text-center text-black-50">NIS</th>
                                            <th colspan="2" scope="col" class="text-center text-black-50">Deskripsi Ketercapaian Kompetensi</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center text-black-50">Semester 1</th>
                                            <th class="text-center text-black-50">Semester 2</th>
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
                            </div>
                        </div> <!-- / .card -->
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->