<?php
include "../bot.php";
include "../koneksi.php";

session_start();

if ($_SESSION['level']= "") {
  header("location:../index.php");
}

if ($_SESSION ['level'] == "petugas") {
  header("location: ../petugas/index.php");
}

echo $_SESSION['level'];
?>

<a href="tambah.php"><button>Tambahan</button></a>
<table class="table">
    <tr>
        <td>NO</td>
        <td>TANGGAL</td>
        <td>PEMASUKAN</td>
        <td>PENGELUARAN</td>
        <td>KETERANGAN</td>
        <td>JUMLAH</td>
    </tr>
    <?php
    $sql = "SELECT * FROM tb_kas";
    $result = $conn->query($sql);
    $data = 1;
    while ($row=$result->fetch_assoc()){
        
        ?>
        <tr>
            <td><?php echo $data++;?></td>
            <td><?php echo $row['Tanggal']?></td>
            <td><?php echo $row['Pemasukan']?></td>
            <td><?php echo $row['Pengeluaran']?></td>
            <td><?php echo $row['Keterangan']?></td>
            <td><?php echo $row['Jumlah']?></td>
        </tr>
<?php
    }
    ?>
</table>

<br>              <a href="../logout.php">logout</a>
