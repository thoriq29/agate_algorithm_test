<?php
    function get_last_regen_time($last_added_energy, $energy_time, $timestamp_now)
    {
        /*  Misal : Energi Terakhir yang didapat dari replenish terakhir  : 40
            timestamp sekarang : 1358750000.
            Waktu yang dibutuhkan untuk replenish 1 energy : 180 detik.
            output yang diharapkan adalah timestamp :  1358742800 
        */

        $last_regen_timestamp = 0;
        $time_delta = 0;
        for($i=0; $i < $last_added_energy; $i++) {
            $time_delta += $energy_time;
        }
        $last_regen_timestamp = $timestamp_now - $time_delta;
        return $last_regen_timestamp;
    }

    echo get_last_regen_time(40, 180, 1358750000);
?>