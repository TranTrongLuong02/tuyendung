<h2>
<?php
echo $data["hoso"][1];
echo $data["sohosoungtuyen"];
?>
</h2>

<?php
while($row = mysqli_fetch_array($data["TD"])){
    echo $row["hoten"];
}
?>