<?php 
    function countdown($last_energy, $last_regen_timestamp, $energy_time)
    {
        $time_now = 1358750000; // waktu saat ini
        $new_energy = $last_energy;
        $time_delta = $time_now - $last_regen_timestamp; 

        $hours = floor($time_delta / 3600); // gunakan floor untuk pembulatan angka
        $minutes = floor(($time_delta / 60) % 60);
        $seconds = $time_delta % 60;

        while($time_delta > $energy_time) {
            $new_energy += 1;
            $time_delta -= $energy_time;
        }
       
        return "Untuk regen energy dari ${last_energy} ke ${new_energy},membutuhkan waktu ${hours} jam ${minutes} menit ${seconds} detik";
    }
    echo countdown(20, 1358742774, 180);
?>