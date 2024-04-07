<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?php echo site_url('reviewer/belum_dinilai')?>"><?= $templateHal?></a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>
                <div class="card mb-4">
                        <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><?php echo $templateJudul?></div>
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
                                   
                                    <tr><td></td></tr>
                                </tbody>                                
                            </table>
                        </div>
                        <a href="<?php echo site_url('reviewer/belum_dinilai')?>" type="button" class="btn btn-info float-end">Kembali</a>

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
                                            <a href="<?php echo site_url('reviewer/menilai')?>" class="btn btn-warning" >
                                            <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;nilai</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>tingkat kematangan kebijakan internal peta rencana
                                            SPBE Instansi Pusat/Pemerintah Daerah</td>
                                        <td>
                                            <a href="<?php echo site_url('reviewer/menilai')?>" class="btn btn-warning" >
                                            <i class="bi bi-pencil-square"></i>&nbsp;&nbsp;nilai</a>
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
