<div class="content-wrapper">
    <div class="content">
        <h3><strong>DETAIL DATA PEGAWAI</strong></h3>
        <table class="table">
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $detail->nama?></td>
            </tr>
            <tr>
                <th>NIP</th>
                <td><?php echo $detail->nip?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $detail->tgl_lahir?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo $detail->alamat?></td>
            </tr>
            <tr>
                <th>No. Telepon</th>
                <td><?php echo $detail->no_telp?></td>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo base_url() ?>assets/foto/<?php echo $detail->foto; ?>" width="200"
                        height="210">
                </td>
            </tr>

        </table>
        <a href="<?php echo base_url('pegawai/index'); ?>" class="btn btn-primary">Kembali</a>
    </div>
</div>