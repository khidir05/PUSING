<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Dashboard</title>
</head>
<body>
    <h2>Welcome, <?= $mahasiswa['nama'] ?></h2>
    <p>NIM: <?= $mahasiswa['NIM'] ?></p>
    <p>Status: <?= $mahasiswa['status'] ?></p>

    <h3>Submit Leave Application</h3>
    <form action="<?= base_url('/mahasiswa/submitPengajuan') ?>" method="post">
        <input type="hidden" name="NIM" value="<?= $mahasiswa['NIM'] ?>">
        <input type="hidden" name="nama" value="<?= $mahasiswa['nama'] ?>">
        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>
        <br>
        <label for="semester">Semester:</label>
        <input type="text" id="semester" name="semester" required>
        <br>
        <label for="semester_cuti">Semester Cuti:</label>
        <input type="text" id="semester_cuti" name="semester_cuti" required>
        <br>
        <label for="tgl_mulai_cuti">Tanggal Mulai Cuti:</label>
        <input type="date" id="tgl_mulai_cuti" name="tgl_mulai_cuti" required>
        <br>
        <label for="tgl_selesai_cuti">Tanggal Selesai Cuti:</label>
        <input type="date" id="tgl_selesai_cuti" name="tgl_selesai_cuti" required>
        <br>
        <label for="alasan">Alasan:</label>
        <textarea id="alasan" name="alasan" required></textarea>
        <br>
        <label for="dokumen">Dokumen:</label>
        <textarea id="dokumen" name="dokumen" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>

    <h3><a href="<?= base_url('/mahasiswa/history') ?>">View Application History</a></h3>
    <h3><a href="<?= base_url('/auth/logout') ?>">Logout</a></h3>
</body>
</html>