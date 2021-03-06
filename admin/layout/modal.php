<!-- Tambah Barang -->
<div class="modal" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="post" id="addForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row" id="supplier">
                        <label class="col-sm-3 col-form-label">Supplier</label>
                        <div class="col-sm-9">
                            <select name="supplier" id="supplier" class="form-control">
                                <option>Pilih Supplier..</option>
                                <?php require_once('../barang/function.php'); echo load_supplier();?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="kat">
                        <label class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select name="kategori" id="kategori" class="form-control">
                                <option>Pilih Kategori..</option>
                                <?php require_once('../barang/function.php'); echo load_kategori();?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="sub">
                        <label class="col-sm-3 col-form-label">Sub Kategori</label>
                        <div class="col-sm-9">
                            <select name="sub_kategori" id="sub_kategori" class="form-control">
                                <option>Pilih Sub Kategori</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input id="nama_barang" name="nama_barang" type="text" class="form-control" maxlength="50">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input id="harga" name="harga" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Merk Barang</label>
                        <div class="col-sm-9">
                            <input id="merk_barang" name="merk_barang" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input id="foto" name="foto" type="file" class="form-control">
                            <span id="uploadImage"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <textarea id="keterangan" name="keterangan" rows="4" cols="4" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>" required>
                    <input type="hidden" name="id_barang" id="id_barang">
                    <input type="hidden" name="operation" id="operation">
                    <input type="submit" name="actionButton" id="actionButton" class="btn hor-grd btn-grd-success"
                        value="">
                </div>
            </form>

        </div>
    </div>
</div>

<!--Modal View-->
<div class="modal" id="detailModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="detailData"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn hor-grd btn-grd-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Info -->
<div class="modal" id="infoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Info</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <h6>Status Barang</h6>
                        <hr>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Proses</label>
                            </div>
                            <div class="col-md-8">
                                <p>Barang sedang dipersiapkan selagi menunggu status pembayaran telah lunas</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Selesai</label>
                            </div>
                            <div class="col-md-8">
                                <p>Barang telah dipersiapkan</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Dibatalkan</label>
                            </div>
                            <div class="col-md-8">
                                <p>Pembelian dibatalkan</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Dikembalikan</label>
                            </div>
                            <div class="col-md-8">
                                <p>Barang dikembalikan ke toko</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>Status Pengiriman</h6>
                        <hr>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Ambil Sendiri</label>
                            </div>
                            <div class="col-md-8">
                                <p>Pembeli akan mengambil barang</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Pengiriman</label>
                            </div>
                            <div class="col-md-8">
                                <p>Barang akan dikirim ke pembeli</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>Status Pembayaran</h6>
                        <hr>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Menunggu</label>
                            </div>
                            <div class="col-md-8">
                                <p>Menunggu pembayaran oleh pembeli</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="label label-primary">Terbayar</label>
                            </div>
                            <div class="col-md-8">
                                <p>Barang telah dibayar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn hor-grd btn-grd-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Pembelian -->
<div class="modal" id="beliModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form id="beliForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row" id="kat">
                        <label class="col-sm-3 col-form-label">Status Barang</label>
                        <div class="col-sm-9">
                            <select name="status_barang" id="status_barang" class="form-control">
                                <option value="Proses">Proses</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Dibatalkan">Dibatalkan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" id="sub">
                        <label class="col-sm-3 col-form-label">Status Bayar</label>
                        <div class="col-sm-9">
                            <select name="status_beli" id="status_beli" class="form-control">
                                <option value="Menunggu">Menunggu</option>
                                <option value="Terbayar">Terbayar</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>" required>
                    <input type="hidden" name="id_transaksi_pembelian" id="id_transaksi_pembelian">
                    <input type="submit" name="updateButton" id="updateButton" class="btn hor-grd btn-grd-success"
                        value="">
                </div>
            </form>

        </div>
    </div>
</div>

<!--Modal Transaksi-->
<div class="modal" id="det_transaksiModal" width="1000px">
    <div class="modal-dialog detail-trans">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="detailTransaksi"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn hor-grd btn-grd-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<!--Modal Review -->
<div class="modal" id="det_reviewModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <div id="detReview"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn hor-grd btn-grd-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<!--Modal Bukti-->
<div class="modal" id="buktiPembayaran" width="1000px">
    <div class="modal-dialog detail-trans">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div id="bukti"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn hor-grd btn-grd-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>