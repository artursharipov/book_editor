<?php
namespace frontend\widgets\map_2gis;
use yii\base\Widget;

class Map2gisWidget extends Widget{
	
    public $id = 'map';
    public $height = 400;
    public $zoom = 16;
    public $coord_x = 55;
    public $coord_y = 61;
    
    public function init()
    {
        parent::init();
        

    }

	public function run(){

		return $this->render('map_2gis',[
            'id' => $this->id,
            'height' => $this->height,
            'zoom' => $this->zoom,
            'coord_x' => $this->toFloat($this->coord_x),
            'coord_y' => $this->toFloat($this->coord_y),
        ]);

    }
    
    public function toFloat($value)
    {
        $value = str_replace(',', '.', $value);
        return floatval($value);
    }
}
?>