</div> <!-- .wrapper -->
    <script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/simplebar.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/daterangepicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.stickOnScroll.js"></script>
    <script src="<?= base_url('assets/') ?>js/tinycolor-min.js"></script>
    <script src="<?= base_url('assets/') ?>js/config.js"></script>
    <script src="<?= base_url('assets/') ?>js/apps.js"></script>

    <script src="<?= base_url('assets/') ?>js/jquery.mask.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/select2.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.steps.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.timepicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/uppy.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/quill.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
    <script>
        feather.replace();
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');
            const tableSection = document.getElementById('tableSection');
            const kirimButton = document.getElementById('kirimButton');
            const inputFields = document.querySelectorAll('input[type="text"]');
            const errorSection = document.getElementById('errorSection');
    
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('change', checkDropdowns);
            });
    
            kirimButton.addEventListener('click', validateInputs);
    
            function checkDropdowns() {
                let allFilled = true;
                dropdowns.forEach(dropdown => {
                    if (dropdown.value === '' || dropdown.value === 'Pilih Fase' || dropdown.value === 'Pilih Tingkat' || dropdown.value === 'Pilih Mapel' || dropdown.value === 'Pilih Semester') {
                        allFilled = false;
                    }
                });
                if (allFilled) {
                    tableSection.style.display = 'block';
                    kirimButton.style.display = 'block';
                } else {
                    tableSection.style.display = 'none';
                    kirimButton.style.display = 'none';
                }
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil data dari localStorage
            let tujuanPembelajaran = JSON.parse(localStorage.getItem('tujuanPembelajaran')) || [];
            // Render data ke tabel jika ada
            renderTujuanPembelajaran(tujuanPembelajaran);
        });
    </script>

    <script>
        function saveToLocalStorage(data) {
            let tujuanPembelajaran = JSON.parse(localStorage.getItem('tujuanPembelajaran')) || [];
            tujuanPembelajaran.push(data);
            localStorage.setItem('tujuanPembelajaran', JSON.stringify(tujuanPembelajaran));
        }

        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');
            const tableSection = document.getElementById('tableSection');
            const kirimButton = document.getElementById('kirimButton');
            const inputFields = document.querySelectorAll('input[type="text"]');
            const errorSection = document.getElementById('errorSection');
            
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('change', checkDropdowns);
            });
            
            kirimButton.addEventListener('click', validateInputs);
            
            function checkDropdowns() {
                let allFilled = true;
                dropdowns.forEach(dropdown => {
                    if (dropdown.value === '' || dropdown.value === 'Pilih Fase' || dropdown.value === 'Pilih Tingkat' || dropdown.value === 'Pilih Mapel' || dropdown.value === 'Pilih Semester') {
                        allFilled = false;
                    }
                });
                if (allFilled) {
                    tableSection.style.display = 'block';
                    kirimButton.style.display = 'block';
                } else {
                    tableSection.style.display = 'none';
                    kirimButton.style.display = 'none';
                }
            }
            
            function validateInputs() {
                let allValid = true;
                let data = {};
                inputFields.forEach(input => {
                    if (input.value.trim() === '') {
                        allValid = false;
                        input.classList.add('is-invalid');
                    } else {
                        input.classList.remove('is-invalid');
                        data[input.name] = input.value;
                    }
                });
                
                if (allValid) {
                    errorSection.style.display = 'none';
                    saveToLocalStorage(data);
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Tujuan Pembelajaran berhasil ditambahkan!',
                        icon: 'success',
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'btn btn-primary' 
                        }
                    }).then(() => {
                        window.location.href = '<?= base_url('dashboard/tujuanpembelajaran') ?>';
                    });
                } else {
                    errorSection.style.display = 'block';
                }
            }
            
            function saveToLocalStorage(data) {
                let tujuanPembelajaran = JSON.parse(localStorage.getItem('tujuanPembelajaran')) || [];
                tujuanPembelajaran.push(data);
                localStorage.setItem('tujuanPembelajaran', JSON.stringify(tujuanPembelajaran));
            }
        });
    </script>

    <!-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag()
        {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script> -->

    <script>
        $(document).ready(function() {
            // Function to check if all dropdowns are selected
            function checkDropdowns() {
            var allSelected = true;
            $('select').each(function() {
                if ($(this).val() == null) {
                allSelected = false;
                return false; // Break the loop
                }
            });
            return allSelected;
            }

            // Function to toggle visibility of table and button
            function toggleVisibility() {
            if (checkDropdowns()) {
                $('.table-responsive, .btn-primary').show();
            } else {
                $('.table-responsive, .btn-primary').hide();
            }
            }

            // Call toggleVisibility initially
            toggleVisibility();
            // Call toggleVisibility whenever a dropdown value changes
            $('select').change(function() {
            toggleVisibility();
            });
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('input[type="text"]').forEach(function (input) {
                input.addEventListener('input', function () {
                    this.value = this.value.replace(/[^0-9]/g, '');
                    if (parseInt(this.value) > 100) {
                        this.value = 0;
                    }
                });
            });
        });
    </script>
        
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
                let inputs = document.querySelectorAll('.form-control');
                let isValid = true;
                
                inputs.forEach(function(input) {
                    if (input.value.trim() === '') {
                        isValid = false;
                        input.classList.add('is-invalid');
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                if (!isValid) {
                    event.preventDefault();
                }
            });
    </script>

    <script>
        function checkDropdowns() {
            const kelas = document.getElementById('kelas').value;
            const mapel = document.getElementById('mapel').value;
            const semester = document.getElementById('semester').value;
            
            if (kelas !== 'Pilih Kelas' && mapel !== 'Pilih Mata Pelajaran' && semester !== 'Pilih Semester') {
                document.getElementById('import-section').style.display = 'block';
            } else {
                document.getElementById('import-section').style.display = 'none';
            }
        }

        document.getElementById('kelas').addEventListener('change', checkDropdowns);
        document.getElementById('mapel').addEventListener('change', checkDropdowns);
        document.getElementById('semester').addEventListener('change', checkDropdowns);

        // Initially hide the import section
        document.getElementById('import-section').style.display = 'none';
    </script>

    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg)
        {
            var uppy = Uppy.Core().use(Uppy.Dashboard,
            {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus,
            {
            endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) =>
            {
            console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');
            const table = document.querySelector('table');
    
            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('change', checkDropdowns);
            });
    
            function checkDropdowns() {
                let allFilled = true;
                dropdowns.forEach(dropdown => {
                    if (dropdown.value === '' || dropdown.value === 'Pilih Fase' || dropdown.value === 'Pilih Mapel' || dropdown.value === 'Jenis Data') {
                        allFilled = false;
                    }
                });
                if (allFilled) {
                    table.style.display = 'table';
                } else {
                    table.style.display = 'none';
                }
            }
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.dropdown');
            const tables = document.querySelectorAll('table');

            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('change', checkDropdowns);
            });

            function checkDropdowns() {
                let allFilled = true;
                dropdowns.forEach(dropdown => {
                    if (dropdown.value === '' || dropdown.value === 'Pilih Fase' || dropdown.value === 'Pilih Mapel' || dropdown.value === 'Jenis Data') {
                        allFilled = false;
                    }
                });
                if (allFilled) {
                    tables.forEach(table => {
                        table.style.display = 'table';
                    });
                } else {
                    tables.forEach(table => {
                        table.style.display = 'none';
                    });
                }
            }

            document.getElementById('jenisdata').addEventListener('change', function () {
                var selectedValue = this.value;
                tables.forEach(table => {
                    table.style.display = 'none';
                });
                if (selectedValue === 'perkembangannilairapor') {
                    document.getElementById('perkembangannilairapor').style.display = 'table';
                } else if (selectedValue === 'perkembangandeskripsirapor') {
                    document.getElementById('perkembangandeskripsirapor').style.display = 'table';
                }
            });
        });
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
        </script>
        <script>
        $(document).ready(function() {
            // Function to check if all dropdowns are selected
            function checkDropdowns() {
            var allSelected = true;
            $('select').each(function() {
                if ($(this).val() == null) {
                allSelected = false;
                return false; // Break the loop
                }
            });
            return allSelected;
            }
    
            // Function to toggle visibility of table and button
            function toggleVisibility() {
            if (checkDropdowns()) {
                $('.table-responsive, .btn-primary').show();
            } else {
                $('.table-responsive, .btn-primary').hide();
            }
            }
    
            // Call toggleVisibility initially
            toggleVisibility();
    
            // Call toggleVisibility whenever a dropdown value changes
            $('select').change(function() {
            toggleVisibility();
            });
        });
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('input[type="text"]').forEach(function (input) {
                input.addEventListener('input', function () {
                    this.value = this.value.replace(/[^0-9]/g, '');
                    if (parseInt(this.value) > 100) {
                        this.value = 0;
                    }
                });
            });
        });
    </script>
    <script>
        // Fungsi yang dipanggil saat tombol "Kirim" diklik
        function submitForm() {
            let isValid = true;
            const inputs = document.querySelectorAll('input[type="text"]');
        
            inputs.forEach(input => {
                const warning = input.nextElementSibling;
                if (input.value.trim() === "") {
                    input.classList.add('is-invalid');
                    warning.style.display = 'block';
                    isValid = false;
                } else {
                    input.classList.remove('is-invalid');
                    warning.style.display = 'none';
                }
            });
        
            if (isValid) {
                // Form valid, tampilkan pesan sukses menggunakan SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Nilai berhasil terkirim',
                    confirmButtonText: 'OK',
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    }
                });
            }
        }
    </script>
</body>
</html>