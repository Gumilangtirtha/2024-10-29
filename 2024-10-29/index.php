<?php
$sekolah = ["TK Darussalam", "SDN Sidokerto", "SMP Negeri 2 Buduran", "SMK Negeri 2 Buduran"]; //array satu dimensi

$sekolahs = ["TK"=>"TK Darussalam", "SD"=>"SDN Sidokerto", "SMP"=>"SMP Negeri 2 Buduran", "SMK"=>"SMK Negeri 2 Buduran", "PT"=>"Universitas Negeri Malang"]; //array associative

echo $sekolah[0];
echo "<br>";
echo $sekolahs["TK"];
echo "<br>";
echo $sekolah[1];
echo "<br>";
echo $sekolahs ["SD"];

echo "<br>";


$skills = ["C++" => "Expert", "HTML" => "Newbie", "CSS" => "Newbie", "PHP" => "Intermediate", "Javascript" => "Intermediate"];

$identitas = ["Nama" => "Gumilang Tirtha Perdana", "Alamat" => "Sono Indah Utara", "Email" => "tirthaperdana@gmail.com", "FB" => "gumilangtirtha", "Tiktok" => "agumgumilang", "IG" => "gumilangtirtha"];

$hobi = ["Coding", "Main Musik", "Mancing", "Bersepeda", "Membaca"];

//Menampilkan semua value yang ada

for ($i=0; $i < 4; $i++) {
    echo $sekolah[$i];
    echo "<br>";
}

echo "<br>";

foreach ($sekolah as $key){
    echo $key;
    echo "<br>";
}

echo "<br>";

foreach ($sekolahs as $key => $value) {
    echo $key;
    echo "=";
    echo $value;
    echo "<br>";
}

echo "<br>";

foreach ($skills as $key => $value) {
    echo $key;
    echo "=";
    echo $value;
    echo "<br>";
} 

if (isset($_GET["menu"])) {
    $menu = $_GET["menu"];
echo $menu;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <ul>
        <li><a href="?menu=home">Home</a></li>
        <li><a href="?menu=cv">CV</a></li>
        <li><a href="?menu=project">Project</a></li>
        <li><a href="?menu=contact">Contact</a></li>

    </ul>
    <h2>Identitas</h2>
    <table border = "1">
        <thead>
            <tr>
                <th>Identitas</th>
                <th>Deskripsi</th>
            </tr>
            <tbody>
                <?php
                foreach ($identitas as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </thead>
    </table>
    <hr>
    <h2>Riwayat Sekolah</h2>
    <table border= "1px">
        <thead>
            <tr>
                <th>Jenjang</th>
                <th>Nama Sekolah</th>

            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($sekolahs as $key => $value) {
                echo "<tr>";
                echo "<td>";
                echo $key;
                echo "</td>";
                echo "<td>";
                echo $value;
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>skills</h2>
    <table border="1">
        <thead>
            <tr>
    <th>Skill</th>
    <th>Level</th>
</tr>
        </thead>
        <tbody>
<?php
foreach ($skills as $key => $value) {
    ?>
    <tr>
        <td><?= $key ?></td>
        <td><?= $value ?></td>
    </tr>
    <?php
}
?>
        </tbody>
    </table>
    <hr>
    <h2>Hobi</h2>
    <ul>
        <?php
        foreach ($hobi as $key) {
            ?>
            <li><?= $key ?></li>
            <?php
        }
        ?>
    </ul>
</body>
</html>