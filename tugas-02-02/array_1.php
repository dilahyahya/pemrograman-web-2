<!DOCTYPE html>
<html>
<head>
<title>Mengakses Variabel Array</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php
    $mahasiswa = array
    (
                array("nim"=>"TI-001", "nama_mahasiswa"=>"Andi",

                "program_studi"=>"Teknik Informatika"),

                array("nim"=>"TI-002", "nama_mahasiswa"=>"Budi",

                "program_studi"=>"Teknik Informatika"),

                array("nim"=>"TI-003", "nama_mahasiswa"=>"Wati",

                "program_studi"=>"Teknik Informatika"),

                array("nim"=>"SI-001", "nama_mahasiswa"=>"Fatma",

                "program_studi"=>"Sistem Informasi"),

                array("nim"=>"SI-002", "nama_mahasiswa"=>"Wawan",

                "program_studi"=>"Sistem Informasi")

    );
    ?>
<table class="table table-striped">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
        </tr>

        <?php
        foreach ($mahasiswa as $key => $value) 
        {
            echo '<tr>
                    <td>'.$key.'</td>
                    <td>'.$value['nim'].'</td>
                    <td>'.$value['nama_mahasiswa'].'</td>
                    <td>'.$value['program_studi'].'</td>  
                  </tr>';
        }
        echo ''

        ?>
</table>
</body>
</html>
