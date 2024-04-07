<div class="container-fluid">
    <!-- Page Heading -->
    <ol class="row g-2 mr-0 pl-3 justify-content-between">
        <div class="ml-0">
            <h1 class="mt-1"><?= $templateAtas ?></h1>
        </div>
    </ol>

    <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="<?php echo site_url('staff/v_dashboard') ?>"><?= $templateHal?></a></li>
        <li class="breadcrumb-item active"><?= $templateJudul ?></li>
    </ol>
 
    <!-- Content Row -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                       <div class="d-flex justify-content-between align-items-center">
                                <div><?php echo $templateJudul?></div>
                            </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTableDomain" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Dinilai</th>
                                    <th>Indeks SPBE</th>
                                    <th>Predikat</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                    <td>21-08-20</td>
                                    <td>3.47</td>
                                    <td>Baik</td>

                                    <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="<?php echo site_url('staff/detail_nilai') ?>" class="btn btn-success mx-1" data-bs-toggle="" data-bs-target="">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                
                                            </div>
                                        </td>                                
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<!-- DataTables Bootstrap 4 Integration -->
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#dataTableDomain').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });
    });
</script>
