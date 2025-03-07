<!DOCTYPE html>
<html>
<head>
    <title>Manage Mahasiswa</title>
</head>
<body>
    <h2>Manage Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Semester</th>
            <th>Status</th>
            <th>Prodi</th>
        </tr>
        <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m['NIM'] ?></td>
                <td><?= $m['nama'] ?></td>
                <td><?= $m['kelas'] ?></td>
                <td><?= $m['semester'] ?></td>
                <td><?= $m['status'] ?></td>
                <td><?= $m['id_prodi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h3><a href="<?= base_url('/staff') ?>">Back to Dashboard</a></h3>
</body>
</html>