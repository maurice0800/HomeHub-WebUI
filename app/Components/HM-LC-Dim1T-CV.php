<?php

// HM-LC-Dim1T-CV|Testdimmer:0||VISIBLE=|OPERATE=|UNREACH=13221|STICKY_UNREACH=13217|CONFIG_PENDING=13207|DUTYCYCLE=13211|RSSI_DEVICE=13215|RSSI_PEER=13216|
// HM-LC-Dim1T-CV|Testdimmer:1||VISIBLE=true|OPERATE=true|LEVEL=13241|OLD_LEVEL=13242|RAMP_TIME=13245|RAMP_STOP=13244|ERROR_REDUCED=13235|ERROR_OVERLOAD=13231|ERROR_OVERHEAT=13227|

function HM_LC_Dim1T_CV($component) {
    if ($component['parent_device_interface'] == 'BidCos-RF' && $component['visible'] == 'true' && isset($component['LEVEL'])) {
        $modalId = uniqid();
        
        return '<div class="hh">'
            . '<div data-toggle="collapse" data-target="#' . $modalId . '">'
                . '<div class="pull-left"><img src="../assets/icons/' . $component["icon"] . '" class="icon">' . $component['name'] . '</div>'
                . '<div class="pull-right">'
                    . '<span class="info" id="' . $component['LEVEL'] . '" data-component="' . $component['component'] . '" data-datapoint="LEVEL"></span>'
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