<!DOCTYPE html>
<html>

<head>
    <title>Simple DataTables</title>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</head>

<body>
    <br><br><br><br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #1E8BC3;">
                <h3 class="panel-title" style="color:  white;">Update Customer </h3>
            </div>
            <div class="panel-body">
                <?php echo form_open_multipart('CrudCtl/updateForm/'.$getData['kode']); ?>
                
                <legend>Silahkan Update Customer </legend>
                <div class="form-group">
                    <label for="nama">Kode Pelanggan</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $getData['kode'] ?>" readonly required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $getData['nama'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $getData['alamat'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="kota">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="<?php echo $getData['kota'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="telp">No. Telp (Contoh: 081123123123)</label>
                    <input type="tel" pattern="^\d{12}$" class="form-control" id="telp" name="telp" value="<?php echo $getData['telp'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis Pelanggan</label>
                    <br>
                    <label class="radio-inline">
                        <input type="radio" name="jenis" id="" value="TUNAI" checked="checked">
                        Laki-laki
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="jenis" id="" value="KREDIT">
                        Perempuan
                    </label>
                </div>
                <div class="form-group">
                    <label for="plafon">Plafon (RP.)</label>
                    <input type="text" class="form-control" id="rupiah" name="plafon" value="<?php echo $getData['plafon'] ?>" required>
                </div>

                <button type="submit" class="btn btn-large btn-block btn-primary">Update</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        var rupiah = document.getElementById('rupiah');
        rupiah.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
            rupiah.value = formatRupiah(this.value);
        });

        /* Fungsi formatRupiah */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
</body>

</html>