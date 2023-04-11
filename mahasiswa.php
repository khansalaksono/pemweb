<a href="form-mahasiswa.php">Tambah Mahasiswa</a>
<br />
<br />

<table style="border-collapse: collapse; width:fit-content">
    <thead>
        <tr>
            <th style="padding:10px; border:1px solid black;">id</th>
            <th style="padding:10px; border:1px solid black;">NIM</th>
            <th style="padding:10px; border:1px solid black;">Nama</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once 'config.php';

        $sql = "select * from mahasiswa";

        // Pakai db::fetchAll
        $query = $db->query($sql);
        $rows = $query->fetchAll();
        foreach ($rows as $row) {
            echo "<tr>";
            echo "<td style='padding:10px; border:1px solid black'>{$row["id"]}";
            echo "<td style='padding:10px; border:1px solid black'>{$row["nim"]}";
            echo "<td style='padding:10px; border:1px solid black'>{$row["nama"]}";
            echo "</tr>";
            //echo $row["nim"] . " " . $row["nama"] . "<br/>";
        }

        /*
        //Pakai db::query
        $query = $db->query($sql);
        foreach($query as $row){
            echo $row["nim"]." ".$row["nama"]."<br/>";
        }*/

        ?>
    </tbody>
</table>