<?php



class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $teo = $this->model("Tuyendung");
        echo $teo->GetTD();

    }

    function Show($a, $b){        
        // Call Models
        $teo = $this->model("Tuyendung");
        $tong = $teo->Tong($a, $b); // 3

        // Call Views
        $this->view("tuyendung", [
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->TuyenDung()
        ]);
    }
}
?>