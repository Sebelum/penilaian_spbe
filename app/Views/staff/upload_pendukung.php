<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                        <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><?php echo $templateJudul?></div>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="info" style=" font-size: 15px;">
                            <p>Nama From  : <?= $templateJudul ?></p>
                            <hr>
                            
                            <p>Tahun  : testing</p>
                            <hr>
                        <a href="<?php echo site_url('staff/indikator_spbe')?>" type="button" class="btn btn-info float-end">Kembali</a>

                        <div class="table-responsive" style="margin-top: 45px;">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Indikator</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Indikator</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>tingkat kematangan kebijakan internal arsitektur SPBE Instansi Pusat/Pemerintah Daerah</td>
                                        <td>
                                            <a href="<?php echo site_url('staff/upload_perIndikator')?>" class="btn btn-primary" ><i class="bi bi-file-earmark-arrow-up"></i>&nbsp;&nbsp;upload</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>tingkat kematangan kebijakan internal peta rencana
                                            SPBE Instansi Pusat/Pemerintah Daerah</td>
                                        <td>
                                            <a href="<?php echo site_url('staff/upload_perIndikator')?>" class="btn btn-primary" ><i class="bi bi-file-earmark-arrow-up"></i>&nbsp;&nbsp;upload</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                        <td>
                                            <a href="<?php echo site_url('staff/upload_perIndikator')?>" class="btn btn-primary" ><i class="bi bi-file-earmark-arrow-up"></i>&nbsp;&nbsp;upload</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Layanan SPBE</td>
                                        <td>
                                            <a href="<?php echo site_url('staff/upload_perIndikator')?>" class="btn btn-primary" ><i class="bi bi-file-earmark-arrow-up"></i>&nbsp;&nbsp;upload</a>
                                        </td>
                                    </tr>

                                </tbody>                                
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
