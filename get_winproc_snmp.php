<?php

$a=snmp2_real_walk("192.168.11.120","wisdomgt","HOST-RESOURCES-MIB::hrSWRunName");


while ($objval = current($a)) {

$b=explode(": ",$objval);

$str_obj=str_replace("\"","",$b[1]);

        if ($str_obj == "WsusService.exe")  {

                echo key($a);
                echo " ";
                echo "$str_obj\n";
        }
next($a);

}
?>
