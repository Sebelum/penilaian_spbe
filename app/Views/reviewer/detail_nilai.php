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
                                   
                                    <tr><td></td></tr>
                                </tbody>                                
                            </table>
                        </div>

                        <div class="table-responsive" >
                            <table class="table table-bordered" width="100%" 
                            cellspacing="0">
                                <thead>
                                <tr style="background-color:  #D0F0C0; font-size:bold;">
                                        <th>Nama Indeks</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SPBE</td>
                                        <td>3.47</td>                                     
                                    </tr>
                                </tbody>
                                <tbody>
                                <tr style="background-color:  #D0F0C0;">
                                    <td>Domain Kebijakan Internal SPBE</td>
                                    <td>2.90</td>                                     
                                </tr>

                                </tbody> 
                                <tbody>
                                    <tr style="font-style: italic;">
                                        <td>Aspek Kebijakan Internal Tata Kelola SPBE</td>
                                        <td>2.90</td>                                     
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
