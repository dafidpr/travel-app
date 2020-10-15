    <main class="content">
        <div class="container" style="margin-top: -120px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header pt-4"
                            style="background-color: rgb(246, 249, 255); color: rgb(53, 64, 90)">
                            <div class="container pl-3">
                                <div class="row">
                                    <span class="badge badge-custom-primary">
                                        <i class="fas fa-plane fa-plane-custom fa-2x text-white"
                                            style="padding-top:6px;"></i>
                                    </span>
                                    <h3 class="title-pesawat">Cari harga tiket pesawat murah disini</h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body mt-3">
                            <form action="<?php echo base_url('pesawat/cari')?>" method="get" class="mb-5">
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                    <label for="">Bandara Asal</label>
                                        <select name="rute_from" class="form-control select2 form-control-lg">
                                        <option value="" selected disabled>Bandara Asal</option>
                                        <?php
                                            foreach ($bandara as $val) {
                                                echo '<option value="'. $val['iata'] .'">'.$val['nama_bandara'].' ('.$val['iata'].')'.'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Bandara Tujuan</label>
                                        <select name="rute_to" class="form-control select2 form-control-lg">
                                        <option value="" selected disabled>Bandara Tujuan</option>
                                        <?php
                                            foreach ($bandara as $val) {
                                                echo '<option value="'. $val['iata'] .'">'.$val['nama_bandara'].' ('.$val['iata'].')'.'</option>';
                                            }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Berangkat</label>
                                        <input type="text" class="form-control form-control-lg" name="depart_at" id="date_berangkat">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Penumpang Dewasa</label>
                                        <select name="adult" class="form-control seat-qty form-control-lg">
                                            <?php for($i = 1; $i <= 4; $i++){?>
                                                <option value="<?php echo $i?>"><?php echo $i?> Dewasa</option>
                                            <?php }?>
                                        </select>
                                        <small> 3 tahun Keatas</small>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Penumpang Infant</label>
                                        <select name="infant" class="form-control seat-qty form-control-lg">
                                            <?php for($i = 0; $i <= 2; $i++){?>
                                                <option value="<?php echo $i?>"><?php echo $i?> Infant</option>
                                            <?php }?>
                                        </select>
                                        <small> Dibawah 3 Tahun</small>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-lg btn-warning btn-cari-custom">CARI
                                    PESAWAT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

           