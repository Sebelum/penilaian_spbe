<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4">
                <div class="card-body">
                  
                        <?= csrf_field() ?>
                        Detail Form
                        <hr>
                        Domain  : Kebijakan Internal SPBE
                        <hr>
                        Aspek  : Kebijakan Internal Tata Kelola SPBE
                        <hr>
                        Indikator  : 1
                        <hr>
                    
                        <a href="<?= site_url('staff/upload_pendukung')?>" type="button" class="btn btn-info float-end">Kembali</a>

                        <div class="service-wrap" style="margin-top: 45px;">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-md-12" style="margin-top: 12px;">
                                        <h3 class="white">Upload Data Pendukung</h3>
                                        <p class="orange">*pengiriman hanya diperbolehkan jika pengguna mengunggah file gambar atau PDF yang valid.</p>
                                    </div>
                                </div>
                                
                                <form name="upload" method="post" action="<?= site_url('staff/upload_pendukung')?>" enctype="multipart/form-data" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="btn-container">
                                                <!--the three icons: default, ok file (img), error file (not an img)-->
                                                <h1 class="imgupload"><i class="fa fa-file-image-o"></i></h1>
                                                <h1 class="imgupload ok"><i class="fa fa-check"></i></h1>
                                                <h1 class="imgupload stop"><i class="fa fa-times"></i></h1>

                                                <!--this field changes dinamically displaying the filename we are trying to upload-->
                                                <p id="namefile">Only pics or PDF allowed! (jpg,jpeg,png,pdf)</p>
                                                <!--our custom btn which stays under the actual one-->
                                                <button type="button" id="btnup" class="btn btn-primary btn-lg">Browse for your file!</button>
                                                <!--this is the actual file input, is set with opacity=0 beacause we wanna see our custom one-->
                                                <input type="file" value="" name="fileup" id="fileup" accept="image/*,.pdf">
                                            </div>
                                        </div>
                                    </div>
                                    <!--additional fields-->
                                    <div class="row">     
                                        <div class="col-md-12">
                                            <!--the default disabled btn and the actual one shown only if the three fields are valid-->
                                            <input type="submit" value="Submit!" class="btn btn-success" id="submitbtn">
                                            <button type="button" class="btn btn-default" disabled="disabled" id="fakebtn">Kirim! <i class="fa fa-minus-circle"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>
</div>
