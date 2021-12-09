<?php

use yii\helpers\Json;

$this->registerJsFile('https://maps.api.2gis.ru/2.0/loader.js?pkg=full');

$script = <<< JS

    //MAP 2GIS
    var map;
    DG.then(function () {
        map = DG.map('map', {
            center: [$coord_x, $coord_y],
            zoom: $zoom,
            scrollWheelZoom: false
        });
        DG.marker([$coord_x, $coord_y]).addTo(map);
    });

JS;

$this->registerJs($script);

?>

<div id="<?=$id?>" style="width: 100%; height: <?=$height?>px" class="map_2gis"></div>