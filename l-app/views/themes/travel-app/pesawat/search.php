            <div class="bg-banner-result">
                <div class="container">
                    <h2 class="text-white pt-4 title-result">Blimbingsari (BWX) &rarr; Soekarno Hatta (CGK)
                    </h2>
                    <h4 class="text-white">Rab, 26 Juni 2020 &bull; 2 Penumpang &bull; Ekonomi</h4>
                </div>
            </div>

            <!-- List Trains -->
            <main class="content">
                <div class="row">
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <div class="container pl-3">
                                    <div class="row">
                                        <span class="badge badge-custom-warning">
                                            <i class="fas fa-plane fa-plane-custom fa-2x " style="padding-top:6px;"></i>
                                        </span>
                                        <h5 style="font-size: 18px;" class="title-kereta">Kami telah menampilkan semua tiket pesawat untuk rute ini</h5>
                                        <a href="#" onclick="ubahPencarian()" class="btn btn-ubah-pencarian text-primary font-weight-bold">UBAH PENCARIAN</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Pesawat</th>
                                                <th>Pergi</th>
                                                <th>Tiba</th>
                                                <th>Durasi</th>
                                                <th>Harga</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h4 class="text-muted">Citilink Indonesia</h4>
                                                    <img src="<?php echo site_url('l-content/uploads/')?>pesawat/citilink.png" width="80">
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">12.00</h2>
                                                    <p class="text-muted">Gambir (Jakarta)</p>
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">14.00</h2>
                                                    <p class="text-muted">Bandung (Bandung)</p>
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">2j 0m</h2>
                                                    <p class="text-muted">Perjalanan</p>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <h3 class="font-weight-bold text-primary">IDR 600.000</h3>
                                                        <span>/pax</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-lg text-primary font-weight-bold btn-pilih">PILIH</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="text-muted">Garuda</h4>
                                                    <img src="<?php echo site_url('l-content/uploads/')?>pesawat/garuda.png" width="80">
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">12.00</h2>
                                                    <p class="text-muted">Gambir (Jakarta)</p>
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">14.00</h2>
                                                    <p class="text-muted">Bandung (Bandung)</p>
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">2j 0m</h2>
                                                    <p class="text-muted">Perjalanan</p>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <h3 class="font-weight-bold text-primary">IDR 550.000</h3>
                                                        <span>/pax</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-lg text-primary font-weight-bold btn-pilih">PILIH</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4 class="text-muted">Batik Air</h4>
                                                    <img src="<?php echo site_url('l-content/uploads/')?>pesawat/batik.png" width="80">
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">12.00</h2>
                                                    <p class="text-muted">Gambir (Jakarta)</p>
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">14.00</h2>
                                                    <p class="text-muted">Bandung (Bandung)</p>
                                                </td>
                                                <td>
                                                    <h2 class="font-weight-bold">2j 0m</h2>
                                                    <p class="text-muted">Perjalanan</p>
                                                </td>
                                                <td>
                                                    <div class="row">
                                                        <h3 class="font-weight-bold text-primary">IDR 550.000</h3>
                                                        <span>/pax</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-warning btn-lg text-primary font-weight-bold btn-pilih">PILIH</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- End List Trains -->

            
    <!-- Modal Ubah Pencarian -->
    <div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Ubah Pencarian Pesawat</h5>
                </div>
                <div class="modal-body m-3">
                    <form action="" class="">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="">Bandara Asal</label>
                                    <input type="text" class="form-control form-control-lg" id="">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="">Bandara Tujuan</label>
                                    <input type="text" class="form-control form-control-lg" id="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Berangkat</label>
                                    <input type="text" class="form-control form-control-lg" id="date_berangkat">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Dewasa</label>
                                    <select name="" id="" class="form-control form-control-lg">
                                        <option value=""></option>
                                        <option value="">1 Dewasa</option>
                                        <option value="">2 Dewasa</option>
                                        <option value="">3 Dewasa</option>
                                        <option value="">4 Dewasa</option>
                                    </select>
                                    <small> Diatas 3 tahun</small>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="">Infant</label>
                                    <select name="" id="" class="form-control form-control-lg">
                                        <option value=""></option>
                                        <option value="">0 Infant</option>
                                        <option value="">1 Infant</option>
                                        <option value="">2 Infant</option>
                                        <option value="">3 Infant</option>
                                        <option value="">4 Infant</option>
                                    </select>
                                    <small> Dibawah 3 tahun</small>
                                </div>
                            </div>
                        </div>
                     <div class="modal-footer">
                        <button type="submit" class="btn btn-lg btn-warning btn-cari-custom">CARI PESAWAT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script>
         function ubahPencarian(){
                $('#centeredModalPrimary').modal('show');
            }
    </script>