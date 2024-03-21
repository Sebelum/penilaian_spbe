<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h2 class="mt-1"><?php echo $templateAtas?></h2>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?php echo site_url('staff/tambah_pendukung')?>" class="btn btn-success ms-auto me-3 me-lg-4 p-2">
                        tambah
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><?php echo $templateJudul?></li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?php echo $templateJudul?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Aspek</th>
                                    <th>Indikator</th>
                                    <th>
                                        Nama <br>
                                        Indikator <br>
                                        Domain <br>
                                        Kebijakan <br>
                                        SPBE
                                    </th>
                                    <th>Penanggung <br> Jawab</th>
                                    <th>Penjelasan</th>
                                    <th>Data <br> Pendukung</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Aspek</th>
                                    <th>Indikator</th>
                                    <th>
                                        Nama <br>
                                        Indikator <br>
                                        Domain <br>
                                        Kebijakan <br>
                                        SPBE
                                    </th>
                                    <th>Penanggung <br> Jawab</th>
                                    <th>Penjelasan</th>
                                    <th>Data <br> Pendukung</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        Contoh Nama <br>
                                        Contoh Indikator <br>
                                        Contoh Domain <br>
                                        Contoh Kebijakan <br>
                                        Contoh SPBE
                                    </td>
                                    <td>John Doe</td>
                                    <td>Penjelasan mengenai indikator A</td>
                                    <td>
                                       <a href="<?php echo site_url('staff/upload_pendukung')?>" class="btn btn-primary" >upload</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- tambah dokter -->
        </div>
    </main>
</div>
