ymaps.ready(init);

function init(){ 
    var myMap, 
    myPlacemark;
    myMap = new ymaps.Map("map", {
        center: coordsMap,
        zoom: 14,
        controls: []
    }); 
    
    myPlacemark = new ymaps.Placemark(coordsMap, {
        hintContent: baloonMap,
        balloonContent: baloonMap
    });
    
    myMap.geoObjects.add(myPlacemark);
    myMap.behaviors.disable('scrollZoom');

    // var myMap2, 
    // myPlacemark2;

    // myMap2 = new ymaps.Map("map2", {
    //     center: [55.70034119, 37.67430917],
    //     zoom: 14,
    //     controls: []
    // }); 
    
    // myPlacemark2 = new ymaps.Placemark([55.70032907, 37.67718450], {
    //     hintContent: 'Рі. РњРѕСЃРєРІР° 2-Р№ Р®Р¶РЅРѕРїРѕСЂС‚РѕРІС‹Р№ РїСЂ., РІР», 6',
    //     balloonContent: 'Рі. РњРѕСЃРєРІР°'
    // });
    
    // myMap2.geoObjects.add(myPlacemark2);
    // myMap2.behaviors.disable('scrollZoom');
}