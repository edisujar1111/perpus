<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: 1px solid #000;
        }

        table tbody td {
            padding: 0px;
            box-sizing: border-box;
        }

        table tbody tr {
            padding-left: 10px;
        }

        table tr td table {
            border: none;
            width: 100%;
            height: 50px;
        }

        table td {
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body style="padding: 0; margin: 0;">
    <table cellspacing='0'>
        <thead>
            <tr style="background-color: #6495ED;">
                <td colspan="4">
                    <table border="0">
                        <tr>
                            <td>
                                <!-- assets/img/logo-sekolah.png -->
                                <img style="width: 40px; object-fit: cover;" src="assets/img/logo-sekolah.png" alt="">
                            </td>
                            <td style="font-size: 7.5px; text-align: center;">
                                PEMERINTAH KABUPATEN LOMBOK TIMUR <br>
                                DINAS PENDIDIKAN PEMUDA DAN OLAHRAGA<br>
                                SD NEGERI 1 SUKAREMA <br>
                                <i>JLn.Sordang Korleko Sukarema 83653 Telp.(5674)4645 Fax.(0376)56546</i><br>
                                <i>Website : http://www.sdn2kalijagaSelatan Email: dzainudinhamzar94@gmail.com</i>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr style="font-size: 8.5px;">
                <td style="height: 15px;">
                    <br>
                </td>
                <td style="height: 15px;">
                    <br>
                </td>
                <td style="height: 15px;">
                    <br>
                </td>
                <td></td>
            </tr>
            <tr style="font-size: 8.5px; padding-top: 10px;">
                <td style="width: 50px; text-align: center;" rowspan="8">
                    <img style="width: 61px; height: 79px; object-fit: cover; object-position: center;" src="assets/img/marie.jpg" alt="">
                </td>
                <td style="padding-left: 10px; width: 50px;">Nama</td>
                <td colspan="2">: <?= $anggota->nama_anggota; ?></td>
            </tr>
            <tr style="font-size: 8px; height: 15px;">
                <td style="padding-left: 10px;">Nis</td>
                <td colspan="2">: <?= $anggota->nis; ?></td>
            </tr>
            <tr style="font-size: 8px; height: 15px;">
                <td style="padding-left: 10px;">Alamat</td>
                <td colspan="2">: <?= $anggota->alamat; ?></td>
            </tr>
            <tr style="font-size: 8px; height: 15px;">
                <td style="padding-left: 10px;">TTL</td>
                <td colspan="2">: <?= $anggota->ttl; ?></td>
            </tr>
            <tr style="font-size: 8px; height: 15px;">
                <td style="padding-left: 10px;">Kelas</td>
                <td colspan="2">: <?= $anggota->kelas; ?></td>
            </tr>
            <tr style="font-size: 8px;height: 15px;">
                <td></td>
                <td colspan="2"></td>
            </tr>
            <tr style="font-size: 8px; height: 15px; padding-right: 10px;">
                <td></td>
                <td style="text-align: center; padding-right: 10px;" colspan="2"><?= $kota; ?> <?= $tanggal; ?></td>
            </tr>
            <tr style="font-size: 8px; width: 80px; height: 15px; padding-right: 10px;">
                <td></td>
                <td style="text-align: center; padding-right: 10px;" colspan="2">Kepala Sekolah</td>
            </tr>
            <tr style="font-size: 8px; height: 15px;">
                <td style="padding-left: 10px;" colspan="2" rowspan="2">
                    <p style="font-size: 7.5px;">
                        berlaku :<br>Selama Menjadi<br>Siswa SDN 1 SUKAREMA
                    </p>
                </td>
                <td colspan="2">
                </td>
            </tr>
            <tr style="font-size: 8px; padding-top: 10px; padding-right: 10px;">
                <td style="text-align: center; padding-right: 10px;" colspan="2">
                    <?= $kepala_sekolah; ?><br>
                    Nip : 0000
                </td>
            </tr>
            <tr style="font-size: 8.5px;">
                <td style="height: 15px;">
                    <br>
                </td>
                <td style="height: 15px;">
                    <br>
                </td>
                <td style="height: 15px;">
                    <br>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>