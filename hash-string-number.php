<?php
function crc16($data){
        $poly = 0x8005;
        $xor = 0x0000;

        $crc = 0xAC6F;
        $len = strlen($data);
        $i = 0;
        while($len--){
            $crc ^= ord($data[$i++]) << 8;
            $crc &= 0xffff;
            for($j = 0; $j < 8; $j++){
                $crc = ($crc & 0x8000)? ($crc << 1) ^ $poly : $crc << 1;
                $crc &= 0xffff;
            }
        }
        $crc ^= $xor;
        return $crc;
    }