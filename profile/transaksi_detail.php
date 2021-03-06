<?php
session_start();
if(isset($_POST['csrf_token']) && $_POST['csrf_token']===$_SESSION['csrf_token']) {
require_once('../database/db.php');
    if(isset($_POST["id"])) {
        $result = '';
        $id     = $_POST["id"];
        
        $detail = $connection->prepare(
            "SELECT * FROM detail_transaksi_pembelian 
            JOIN transaksi_pembelian USING(id_transaksi_pembelian) 
            JOIN barang USING(id_barang) 
            WHERE id_transaksi_pembelian=:id");
            
            $detail->bindParam('id', $id);
            $detail->execute();

            $detailData   = $detail->fetchAll(PDO::FETCH_OBJ);
            $result .= '
            <div class="table-responsive">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total </th>
                </tr>
            </thead>';
            
        foreach ($detailData as $data) {
            $result .= '
            <tbody>
                <tr>
                    <td>'.$data->nama_barang.'</th>
                    <td>'.$data->harga.'</th>
                    <td>'.$data->jumlah_barang.'</th>
                    <td>Rp. '.number_format(($data->jumlah_barang)*($data->harga),0,'.','.').'</th>
                </tr>
            </tbody>
            ';
        }

        $result   .= '
        </table></div>';

        echo $result;   
    }
}
?>