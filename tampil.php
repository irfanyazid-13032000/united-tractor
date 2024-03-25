<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = "hapus.php?id=" + id; // Ganti hapus.php dengan file yang sesuai
            }
        }
    </script>
</head>
<body>
    <h1>Data Mahasiswa:</h1>
    <?php if (!empty($data_mahasiswa)): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Usia</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_mahasiswa as $mahasiswa): ?>
                    <tr>
                        <td><?php echo $mahasiswa["id"]; ?></td>
                        <td><?php echo $mahasiswa["nama"]; ?></td>
                        <td><?php echo $mahasiswa["alamat"]; ?></td>
                        <td><?php echo $mahasiswa["umur"]; ?></td>
                        <td><button class="delete-btn" onclick="confirmDelete(<?php echo $mahasiswa['id']; ?>)">Hapus</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Tidak ada data mahasiswa</p>
    <?php endif; ?>
    <a href="form.php">tambah</a>
</body>
</html>
