<div class="container mt-4">
    <h3>Daftar Form Rujukan KIA</h3>
    <p class="text-muted">Silakan pilih form rujukan sesuai kebutuhan.</p>

    <div class="row mt-3">
        <div class="col-md-4">
            <!-- Ibu Hamil -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Ibu Hamil</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('kia.rujukan.ibu-hamil', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-female me-2"></i> Form Rujukan Ibu Hamil
                    </a>
                    <a href="{{ route('kia.rujukan.skrining-preeklampsia', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-stethoscope me-2"></i> Skrining Preeklampsia
                    </a>
                    <a href="{{ route('kia.rujukan.anc-trimester1', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-pills me-2"></i> Pemantauan ANC Trimester 1
                    </a>
                    {{-- <a href="{{ route('kia.rujukan.anc-trimester2', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-pills me-2"></i> Pemantauan ANC Trimester 2
                    </a> --}}
                    <a href="{{ route('kia.rujukan.anc-trimester3', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-pills me-2"></i> Pemantauan ANC Trimester 3
                    </a>
                    <a href="{{ route('kia.rujukan.rujukan-kia', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-ambulance me-2"></i> Rujukan
                    </a>
                </div>
            </div>

            <!-- Persalinan -->
            <div class="card mb-4">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Persalinan</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('kia.rujukan.persalinan', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-baby me-2"></i> Form Persalinan
                    </a>
                </div>
            </div>

            <!-- Nifas -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Nifas</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('kia.rujukan.nifas-6jam', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-clock me-2"></i> Form Nifas 6 Jam Pertama
                    </a>
                    <a href="{{ route('kia.rujukan.nifas-1-7', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-calendar-week me-2"></i> Form Nifas Hari 1-7
                    </a>
                    <a href="{{ route('kia.rujukan.nifas-2-6', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-calendar me-2"></i> Form Nifas Minggu 2-6
                    </a>
                    <a href="{{ route('kia.rujukan.kb-pasca-persalinan', ['id_ibu' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-venus-mars me-2"></i> Pelayanan KB Pasca Persalinan
                    </a>
                </div>
            </div>

            <!-- Bayi & Anak -->
            <div class="card mb-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Bayi & Anak</h5>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ route('kia.rujukan.bayi-baru-lahir', ['id_bayi' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-baby-carriage me-2"></i> Form Bayi Baru Lahir
                    </a>
                    <a href="{{ route('kia.rujukan.neonatal-07', ['id_bayi' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-calendar-day me-2"></i> Kunjungan Neonatal 0-7 Hari
                    </a>
                    <a href="{{ route('kia.rujukan.neonatal-828', ['id_bayi' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-calendar-alt me-2"></i> Kunjungan Neonatal 8-28 Hari
                    </a>
                    <a href="{{ route('kia.rujukan.imunisasi-anak', ['id_bayi' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-syringe me-2"></i> Pencatatan Imunisasi Anak
                    </a>
                    <a href="{{ route('kia.rujukan.rujukan-bayi', ['id_bayi' => 1, 'iframe' => true]) }}"
                        class="list-group-item list-group-item-action form-link" target="form-iframe">
                        <i class="fas fa-ambulance me-2"></i> Rujukan Bayi
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!-- Iframe Container -->
            <div class="card">
                <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Preview Form</h5>
                </div>
                <div class="card-body p-0">
                    <div id="form-container" style="height: 700px; overflow: auto;">
                        <iframe name="form-iframe" id="form-iframe" src=""
                            style="width: 100%; height: 100%; border: none;" frameborder="0"></iframe>
                        <div id="empty-message" class="text-center p-5 text-muted">
                            <i class="fas fa-file-alt fa-3x mb-3"></i>
                            <p>Silakan pilih form dari menu sebelah untuk melihat preview</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
