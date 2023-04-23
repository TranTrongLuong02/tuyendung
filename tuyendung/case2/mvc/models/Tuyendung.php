<?php
class SinhVienModel extends DB{
    public function GetTD(){
        return "Cap nhat thanh cong";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function TuyenDung(){
        $qr = "SELECT * FROM tuyendung";
        return mysqli_query($this->con, $qr);
    }

}
?>