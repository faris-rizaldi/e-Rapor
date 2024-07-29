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
                                        <tr class="text-center">
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
                                            <td>Ahmad Fauzan</td>
                                            <td>1234567891</td>
                                            <td>654321</td>
                                            <td>78</td>
                                            <td>82</td>
                                            <td>84</td>
                                            <td>79</td>
                                            <td>85</td>
                                            <td>81</td>
                                            <td>81</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Siti Aminah</td>
                                            <td>1234567892</td>
                                            <td>654322</td>
                                            <td>88</td>
                                            <td>90</td>
                                            <td>87</td>
                                            <td>89</td>
                                            <td>86</td>
                                            <td>91</td>
                                            <td>88</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Andi Pratama</td>
                                            <td>1234567893</td>
                                            <td>654323</td>
                                            <td>85</td>
                                            <td>87</td>
                                            <td>88</td>
                                            <td>84</td>
                                            <td>89</td>
                                            <td>90</td>
                                            <td>87.2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Dewi Sartika</td>
                                            <td>1234567894</td>
                                            <td>654324</td>
                                            <td>80</td>
                                            <td>82</td>
                                            <td>85</td>
                                            <td>81</td>
                                            <td>83</td>
                                            <td>88</td>
                                            <td>83.2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Budi Santoso</td>
                                            <td>1234567895</td>
                                            <td>654325</td>
                                            <td>76</td>
                                            <td>78</td>
                                            <td>80</td>
                                            <td>79</td>
                                            <td>81</td>
                                            <td>83</td>
                                            <td>79.5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Fitriani Rahma</td>
                                            <td>1234567896</td>
                                            <td>654326</td>
                                            <td>84</td>
                                            <td>86</td>
                                            <td>87</td>
                                            <td>85</td>
                                            <td>88</td>
                                            <td>90</td>
                                            <td>86.7</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Ridwan Kamil</td>
                                            <td>1234567897</td>
                                            <td>654327</td>
                                            <td>79</td>
                                            <td>81</td>
                                            <td>83</td>
                                            <td>80</td>
                                            <td>82</td>
                                            <td>84</td>
                                            <td>81.5</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Yuni Kartika</td>
                                            <td>1234567898</td>
                                            <td>654328</td>
                                            <td>90</td>
                                            <td>92</td>
                                            <td>89</td>
                                            <td>91</td>
                                            <td>93</td>
                                            <td>94</td>
                                            <td>91.5</td>
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
                                            <td>Ahmad Fauzan</td>
                                            <td>1234567891</td>
                                            <td>654321</td>
                                            <td>Memahami dasar-dasar matematika dengan baik</td>
                                            <td>Mampu menerapkan konsep matematika dalam soal cerita</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Siti Aminah</td>
                                            <td>1234567892</td>
                                            <td>654322</td>
                                            <td>Menunjukkan kemampuan bahasa Indonesia yang baik</td>
                                            <td>Mampu menulis esai dengan struktur yang jelas</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Andi Pratama</td>
                                            <td>1234567893</td>
                                            <td>654323</td>
                                            <td>Memahami konsep dasar IPA dengan baik</td>
                                            <td>Mampu melakukan eksperimen sederhana</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Dewi Sartika</td>
                                            <td>1234567894</td>
                                            <td>654324</td>
                                            <td>Mampu menggambar dengan detail yang baik</td>
                                            <td>Menunjukkan kreativitas dalam seni rupa</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Budi Santoso</td>
                                            <td>1234567895</td>
                                            <td>654325</td>
                                            <td>Memahami sejarah Indonesia dengan baik</td>
                                            <td>Mampu menganalisis peristiwa sejarah secara kritis</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Fitriani Rahma</td>
                                            <td>1234567896</td>
                                            <td>654326</td>
                                            <td>Menunjukkan kemampuan berbahasa Inggris yang baik</td>
                                            <td>Mampu berkomunikasi dalam bahasa Inggris dengan lancar</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Ridwan Kamil</td>
                                            <td>1234567897</td>
                                            <td>654327</td>
                                            <td>Memahami dasar-dasar ekonomi dengan baik</td>
                                            <td>Mampu menganalisis masalah ekonomi sederhana</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Yuni Kartika</td>
                                            <td>1234567898</td>
                                            <td>654328</td>
                                            <td>Menunjukkan kemampuan olahraga yang baik</td>
                                            <td>Mampu bermain bola basket dengan teknik yang benar</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> 
    </main> 