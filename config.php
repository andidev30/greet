<?php 

    date_default_timezone_set('asia/jakarta');
    $time = date('h:i:s:a');
    $tes = explode(':',$time);
    
    $selamat = "";

    if ($tes['3'] == 'pm') {
        if ($tes['0'] > 0 && $tes['0'] <= 3) {
            $selamat = 'selamat siang';
        } else if ($tes['0'] > 3 && $tes['0'] <= 6) {
            $selamat = 'selamat sore';
        } else if ($tes['0'] > 6 && $tes['0'] <= 12) {
            $selamat = 'selamat malam';
        } else {
            echo "ada kesalahan";die;
        }
    } else if ($tes['3'] == 'am') {
        if ($tes['0'] >= 1 && $tes['0'] <= 4) {
            $selamat = 'selamat Malam';
        } else if ($tes['0'] > 4 && $tes['0'] <= 11) {
            $selamat = 'selamat pagi';
        } else if ($tes['0'] > 11 && $tes['0'] <= 12) {
            $selamat = 'selamat siang';
        } else {
            echo "ada kesalahan";die;
        }
    } else {
        echo "ada kesalahan";die;
    }

    

?>