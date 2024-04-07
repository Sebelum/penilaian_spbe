<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
          

            
            <div class="row">
                <!-- Card yang sudah ada -->
                
                <!-- Card baru sejajar secara vertikal -->
                <div class="col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><?php echo $templateJudul?></div>
                                <a href="<?php echo site_url('staff/upload_pendukung')?>" class="btn btn-primary"><i class="bi bi-file-earmark-arrow-up"></i>&nbsp;&nbsp;Upload</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Domain</th>
                                            <th>Aspek</th>
                                            <th>Indikator</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Domain</th>
                                            <th>Aspek</th>
                                            <th>Indikator</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kebijakan Internal SPBE</td>
                                            <td>1</td>
                                            <td>1-10</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Tata Kelola SPBE</td>
                                            <td>2-4</td>
                                            <td>11-20</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Manajemen SPBE</td>
                                            <td>21-31</td>
                                            <td>5-6</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Layanan SPBE</td>
                                            <td>32-47</td>
                                            <td>7-8</td>
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
