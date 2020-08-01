<?php
function hitungVoucher($voucherName, $uang){
    $hargaBayar = "";
    $hargaDiskon = "";
    $kembalian = "";

// $uang = $hargaBayar + ($uang * $hargaDiskon) + $kembalian;
    
    if ($voucherName == "DumbwaysJos"){
        if($uang >= 50000){
            $hargaDiskon = $uang * 0.211;
            $hargaBayar = $uang - $hargaDiskon;
            $kembalian = $uang - $hargaBayar;
            
            if ($hargaDiskon >= 20000){
                $hargaDiskon = 20000;
                $hargaBayar = $uang - 20000;
                $kembalian = $uang - $hargaBayar;
                echo "Output = $hargaBayar <br>";
                echo "Diskon = $hargaDiskon <br>";
                echo "Kembalian = $kembalian <br>";
            }
            else {        
                
                echo "Output = $hargaBayar <br>";        
                echo "Diskon = $hargaDiskon <br>";
                echo "Kembalian = $kembalian <br>";
            }
            
        }
    else {
            return $uang;
    }
    }
    if ($voucherName == "DumbwaysMantap"){
        if($uang >= 80000){
            $hargaDiskon = $uang * 0.3;
            $hargaBayar = $uang - $hargaDiskon;
            $kembalian = $uang - $hargaBayar;
            
            if ($hargaDiskon >= 40000){
                $hargaDiskon = 40000;
                $hargaBayar = $uang - 40000;
                echo "Output = $hargaBayar <br>";
                echo "Diskon = $hargaDiskon <br>";
                echo "Kembalian = $kembalian <br>";
            }
            else {        
                
                echo "Output = $hargaBayar <br>";        
                echo "Diskon = $hargaDiskon <br>";
                echo "Kembalian = $kembalian <br>";
            }
            
        }
        else {
            return $uang;
    }
    }
}
hitungVoucher("DumbwaysJos", 100000);




?>