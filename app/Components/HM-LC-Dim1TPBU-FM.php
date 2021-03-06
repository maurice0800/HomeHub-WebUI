<?php

// HM-LC-Dim1TPBU-FM|indirekte_beleuchtung_dimmer_wohnzimmer:0|BidCos-RF|VISIBLE=|OPERATE=|UNREACH=1409|STICKY_UNREACH=1405|CONFIG_PENDING=1391|DUTYCYCLE=1399|RSSI_DEVICE=1403|RSSI_PEER=1404|DEVICE_IN_BOOTLOADER=1395|UPDATE_PENDING=1413|
// HM-LC-Dim1TPBU-FM|indirekte_beleuchtung_dimmer_wohnzimmer:1|BidCos-RF|VISIBLE=true|OPERATE=true|LEVEL=1433|OLD_LEVEL=1435|LEVEL_REAL=1434|RAMP_TIME=1438|RAMP_STOP=1437|ERROR_REDUCED=1427|ERROR_OVERLOAD=1423|ERROR_OVERHEAT=1419|
// HM-LC-Dim1TPBU-FM|indirekte_beleuchtung_dimmer_wohnzimmer_virtuell:2|BidCos-RF|VISIBLE=true|OPERATE=true|LEVEL=1457|OLD_LEVEL=1459|LEVEL_REAL=1458|RAMP_TIME=1462|RAMP_STOP=1461|ERROR_REDUCED=1451|ERROR_OVERLOAD=1447|ERROR_OVERHEAT=1443|
// HM-LC-Dim1TPBU-FM|indirekte_beleuchtung_dimmer_wohnzimmer_virtuell:3|BidCos-RF|VISIBLE=true|OPERATE=true|LEVEL=1481|OLD_LEVEL=1483|LEVEL_REAL=1482|RAMP_TIME=1486|RAMP_STOP=1485|ERROR_REDUCED=1475|ERROR_OVERLOAD=1471|ERROR_OVERHEAT=1467|

// validated by KroKoFox

function HM_LC_Dim1TPBU_FM($component) {
    if ($component['parent_device_interface'] == 'BidCos-RF' && $component['visible'] == 'true' && isset($component['LEVEL'])) {
        $modalId = mt_rand();
        
        return '<div class="hh">'
            . '<div data-toggle="collapse" data-target="#' . $modalId . '">'
                . '<div class="pull-left"><img src="../assets/icons/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
                . '<div class="pull-right">'
                    . '<span class="info" data-id="' . $component['LEVEL'] . '" data-component="' . $component['component'] . '" data-datapoint="LEVEL"></span>'
                . '</div>'
                . '<div class="clearfix"></div>'
            . '</div>'
            . '<div class="hh2 collapse" id="' . $modalId . '">'
                . '<div class="row text-center">'
                    . '<div class="btn-group">'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="1.0">'
                            . '<img src="../assets/icons/light_light_dim_100.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.8">'
                            . '<img src="../assets/icons/light_light_dim_80.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.6">'
                            . '<img src="../assets/icons/light_light_dim_60.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.4">'
                            . '<img src="../assets/icons/light_light_dim_40.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.2">'
                            . '<img src="../assets/icons/light_light_dim_20.png" />'
                        . '</button>'
                        . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.0">'
                            . '<img src="../assets/icons/light_light_dim_00.png" />'
                        . '</button>'
                    . '</div>'
                . '</div>'
                . '<div class="row text-center top15">'
                    . '<div class="row text-center">'
                        . '<div class="form-inline">'
                            . '<div class="input-group">'
                                . '<input type="number" name="' . $component['LEVEL'] . '" min="0" max="100" class="form-control" placeholder="Zahl eingeben">'
                                . '<span class="input-group-btn">'
                                    . '<button class="btn btn-primary set" data-datapoint="4" data-set-id="' . $component['LEVEL'] . '" data-set-value="">OK</button>'
                                . '</span>'
                            . '</div>'
                            . '<div class="btn-group">'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="1.0">'
                                    . 'An'
                                . '</button>'
                                . '<button type="button" class="btn btn-primary set" data-set-id="' . $component['LEVEL'] . '" data-set-value="0.0">'
                                    . 'Aus'
                                . '</button>'
                            . '</div>'
                        . '</div>'
                    . '</div>'
                . '</div>'
            . '</div>'
        . '</div>';
    }
}
