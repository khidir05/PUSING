<!DOCTYPE html>
<html>
<head>
    <title>Staff Dashboard</title>
</head>
<body>
    <h2>Hai <?= $staff['nama'] ?>, how are you?</h2>

    <h3><a href="<?= base_url('/staff/manageMahasiswa') ?>">Manage Mahasiswa</a></h3>
    <h3><a href="<?= base_url('/staff/manageStaff') ?>">Manage Staff</a></h3>
    <h3><a href="<?= base_url('/staff/pengajuan') ?>">View Leave Applications</a></h3>
    <h3><a href="<?= base_url('/staff/allPengajuan') ?>">View All Leave Applications</a></h3>
    <h3><a href="<?= base_url('/auth/logout') ?>">Logout</a></h3>
</body>
</html>