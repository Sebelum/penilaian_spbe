<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('staff/lihat_nilai')?>"><?= $templateHal?></a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>

            
            <div class="row">
                <!-- Card yang sudah ada -->
                
                <!-- Card baru sejajar secara vertikal -->
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><?php echo $templateJudul?></div>
                                <a href="" class="btn btn-secondary"><i class="bi bi-printer-fill"></i>&nbsp;&nbsp;Cetak</a>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="info" style=" font-size: 15px;">
                        <div class="table-responsive">
                            <table class="table" width="100%" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="border: none;">Kode Instansi : </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Instansi : </td>
                                    </tr>
                                    <tr>
                                        <td>Asal Kota :</td>
                                    </tr>
                                    <tr>
                                        <td>Indeks :</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Dinilai :</td>
                                    </tr>
                                    <tr><td>

                                    </td></tr>
                                    
                                </tbody>   
                                                             
                            </table>
                            
                        </div>
                        </div>
                                <ol class="breadcrumb mb-4" style="background-color: #D0F0C0;">
                                    <li class="breadcrumb-item active" style="font-weight:bold; text-align: center;">Rincian nilai per -indikator</li>
                                </ol>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Domain</th>
                                            <th>Aspek</th>
                                            <th>Indikator</th>
                                            <th>Penjelasan</th>
                                            <th>Data Pendukung</th>
                                            <th>Tingkat Kematangan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>No.</th>
                                            <th>Domain</th>
                                            <th>Aspek</th>
                                            <th>Indikator</th>
                                            <th>Penjelasan</th>
                                            <th>Data Pendukung</th>
                                            <th>Tingkat Kematangan</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>Tingkat Kematangan Kebijakan Internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah</td>
                                            <td>( Level 2 ) Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah telah ditetapkan.
                                                 Kondisi: Kebijakan internal Arsitektur SPBE Instansi Pusat/Pemerintah Daerah tersebut belum 
                                                 memuat secara lengkap pengaturan mengenai referensi Arsitektur dan domain Arsitektur SPBE 
                                                 (Proses Bisnis, Data dan Informasi, Infrastruktur SPBE, Aplikasi SPBE, Keamanan SPBE, 
                                                 dan Layanan SPBE).</td>
                                                 <td class="text-center">
                                                    <a href=" " type="button" class="btn btn-danger"><i class="bi bi-filetype-pdf"></i>&nbsp;&nbsp;Lihat</a>
                                                </td>
                                          
                                            <td>2</td>
                                            

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
</div>
