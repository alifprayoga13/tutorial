    <?php
    $tema = $_GET["id_tema"];
    $undangan = $_GET["id_undangan"];
    if($tema==1){
        $link = "./theme/pernikahan/?nama=".$undangan;
    }else if($tema==2){
        $link = "./theme/wisuda/?nama=".$undangan;
    }else if($tema==3){
        $link = "./theme/ulangtahun/?nama=".$undangan;
    }
    header("Location:".$link);
    ?>