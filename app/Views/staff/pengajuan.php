<!DOCTYPE html>
<html>
<head>
    <title>View Leave Applications</title>
</head>
<body>
    <h2>View Leave Applications</h2>
    <table border="1">
        <tr>
            <th>ID Pengajuan</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Semester</th>
            <th>Tanggal Pengajuan</th>
            <th>Semester Cuti</th>
            <th>Tanggal Mulai Cuti</th>
            <th>Tanggal Selesai Cuti</th>
            <th>Alasan</th>
            <th>Dokumen</th>
            <th>Status Pengajuan</th>
            <th>Action</th>
        </tr>
        <?php foreach ($pengajuan as $p): ?>
            <tr>
                <td><?= $p['id_pengajuan'] ?></td>
                <td><?= $p['NIM'] ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['kelas'] ?></td>
                <td><?= $p['semester'] ?></td>
                <td><?= $p['tgl_pengajuan'] ?></td>
                <td><?= $p['semester_cuti'] ?></td>
                <td><?= $p['tgl_mulai_cuti'] ?></td>
                <td><?= $p['tgl_selesai_cuti'] ?></td>
                <td><?= $p['alasan'] ?></td>
                <td><?= $p['dokumen'] ?></td>
                <td><?= $p['status_pengajuan'] ?></td>
                <td>
                    <a href="<?= base_url('/staff/approvePengajuan/' . $p['id_pengajuan']) ?>">Approve</a>
                    <a href="<?= base_url('/staff/declinePengajuan/' . $p['id_pengajuan']) ?>">Decline</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h3><a href="<?= base_url('/staff') ?>">Back to Dashboard</a></h3>
</body>
</html>