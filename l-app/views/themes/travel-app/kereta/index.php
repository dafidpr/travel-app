   <!-- Search Trains -->
    <main class="content">
        <div class="container" style="margin-top: -120px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header pt-4"
                            style="background-color: rgb(246, 249, 255); color: rgb(53, 64, 90)">
                            <div class="container pl-3">
                                <div class="row">
                                    <span class="badge  badge-custom">
                                        <i class="fas fa-subway fa-2x text-white" style="padding-top:6px;"></i>
                                    </span>
                                    <h3 class="title-kereta">Cari, Reservasi & Pesan Tiket Kereta Api KAI
                                        Online</h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <form action="<?php echo base_url('kereta-api/cari')?>" class="mb-5" method="get">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="">Stasiun Asal</label>
                                        <select name="rute_from" class="form-control select2 form-control-lg">
                                        <option value="" selected disabled>Stasiun Asal</option>
                                        <?php
                                            foreach ($stasiun as $val) {
                                                echo '<option value="'. $val['kode'] .'">'.$val['nama_stasiun'].' ('.$val['kode'].')'.'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Stasiun Tujuan</label>
                                        <select name="rute_to" class="form-control select2 form-control-lg">
                                        <option value="" selected disabled>Stasiun Tujuan</option>
                                        <?php
                                            foreach ($stasiun as $val) {
                                                echo '<option value="'. $val['kode'] .'">'.$val['nama_stasiun'].' ('.$val['kode'].')'.'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Tanggal Berangkat</label>
                                        <input type="text" class="form-control form-control-lg" name="depart_at" id="date_berangkat">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Penumpang Dewasa</label>
                                        <select name="adult" class="form-control seat-qty form-control-lg">
                                            <?php for($i = 1; $i <= 4; $i++){?>
                                                <option value="<?php echo $i?>"><?php echo $i?> Dewasa</option>
                                            <?php }?>
                                        </select>
                                        <small> Diatas 3 tahun</small>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Penumpang Infant</label>
                                        <select name="infant" class="form-control seat-qty form-control-lg">
                                            <?php for($i = 0; $i <= 2; $i++){?>
                                            <option value="<?php echo $i?>"><?php echo $i?> Infant</option>
                                            <?php }?>
                                        </select>
                                        <small> Dibawah 3 tahun</small>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-lg btn-warning btn-cari-custom">CARI
                                    KERETA</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Search Trains -->

           