<?php
    function regen_energy($last_energy, $last_regen_timestamp, $energy_time)
    {
        $time_now = 1358750000;
        $time_delta = $time_now - $last_regen_timestamp;
        
        while($time_delta > $energy_time) {
            $last_energy += 1;
            $time_delta -= $energy_time;
        }
        return $last_energy;
    }
    echo regen_energy(20, 1358742774, 180);

?>