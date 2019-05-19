<?php 
//die('x');
    require_once 'header.php'; 
    $title = 'Bình File đánh số trang';
//    displayHeader($title);
//    require_once 'mylib.php';
        
    /*
    if(!is_login()){
            $_SESSION['error'] = ERROR_MESSAGE;
            header('Location: ./');
            die();
    }
    $user = $_SESSION['user'];    
     * 
     */
?>

<body id="page-items">

   <div class="container">
        <div id="row-1" class="row">
            <div class="col-sm-4 col-xs-12">
                <h1><a href="./">SNH CRM</a></h1>
            </div>
            <div class="col-sm-8 col-xs-12">
                <?php include_once('main-menu.php');?>
            </div>
        </div>            
                                
        <h2><?php echo $title;?></h2> 
        
        <div class="row">
            <div class="col-sm-4 col-xs-12">
             <?php
                $n=8;
                if(isset($_REQUEST['txtNumber'])){
                    $n = $_REQUEST['txtNumber'];
                }
                $bkr=0;
                if(isset($_REQUEST['cbxBiaKhacRuot']) && $_REQUEST['cbxBiaKhacRuot']==1){
                    $bkr=1;
                }
                $tro = 'tayKe';
                if(isset($_REQUEST['rdTro'])){
                    $tro = $_REQUEST['rdTro'];
                }
            ?>
            
            
            <form>
                Số trang: <input type="text" name="txtNumber" value="<?php echo $n; ?>"/><br />
                Bìa khác ruột? <input type="checkbox" name="cbxBiaKhacRuot" value="1" <?php if($bkr){echo 'checked'; }?>/> <br />
                Kiểu trở: <input type="radio" name="rdTro" value="tayKe" <?php if($tro=='tayKe') echo 'checked'; ?> /> Tro tay ke 
                <input type="radio" name="rdTro" value="dauNhip" <?php if($tro=='dauNhip') echo 'checked'; ?>/> Tro dau nhip <br />
                <input type="submit" name="Submit" /><br />
            </form>
            
            </div>
            <div class="col-sm-8 col-xs-12">
            <?php 

                if(isset($_REQUEST['txtNumber'])){
                    $n = $_REQUEST['txtNumber'];
                    if($n%4!=0){
                        echo '<div class="error">N phải chia hết cho 4</div>';
                        return;
                        die;
                    }                
                    Binh($n, $bkr, $tro);
                }
            ?>
            </div>
        </div>
    </div>

</body>


<?php
function Ve6586($max, $min, $tro='tayKe'){
    if($tro=='tayKe'){
        echo '<div class="to6586">';
        echo '<div class="r">';
            echo '<div class="a4">'.$max.' </div><div class="a4">'.$min.' </div> <div class="a4">'.($min+1).' </div><div class="a4">'.($max-1).' </div>';
        echo '</div>';
        echo '<div class="r">';
            echo '<div class="a4">'.($max-2).' </div><div class="a4">'.($min+2).' </div> <div class="a4">'.($min+3).' </div><div class="a4">'.($max-3).' </div>';
        echo '</div>';
        echo '</div>';
    }else{
        echo '<div class="to6586 nhip">';
        echo '<div class="r">';
            echo '<div class="a4">'.$max.' </div><div class="a4">'.$min.' </div> <div class="a4">'.($max-2).' </div><div class="a4">'.($min+2).' </div>';
        echo '</div>';
        echo '<div class="r">';
            echo '<div class="a4">'.($max-1).' </div><div class="a4">'.($min+1).' </div> <div class="a4">'.($max-3).' </div><div class="a4">'.($min+3).' </div>';
        echo '</div>';
        echo '</div>';
    }
}      
function Ve6543($max, $min){
    echo '<div class="to6543">';
    echo '<div class="r">';
        echo '<div class="a4">'.$max.'</div><div class="a4">'.$min.'</div>';    
    echo '</div>';   
    echo '<div class="r">';
        echo '<div class="a4">'.($min+1).'</div><div class="a4">'.($max-1).'</div>';     
    echo '</div>';
    echo '</div>';
}  

function Binh($n=8, $bkr=0, $tro='tayKe'){
    $max = $n; $min=1;
    if($bkr){
        Ve6543($max, $min);
        $max-=2;
        $min+=2;
    }
    while($max-4>$min){        
        Ve6586($max, $min, $tro);
        $max-=4;
        $min+=4;
        if($max-$min==3){
            Ve6543($max, $min);
        }
    }
}
?>
