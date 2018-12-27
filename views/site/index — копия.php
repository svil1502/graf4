привет
<?php
use bburim\flot\Chart as Chart;
use bburim\flot\Plugin as Plugin;


echo Chart::widget([ 'data' => [ [ 'label' => 'line', 'data' => [ [1, 1], [2,7], [3,12], [4,32], [5,62], [6,89], ],
    'lines' => ['show' => true], 'points' => ['show' => true], ],
    [ 'label' => 'bars', 'data' => [ [1,12], [2,16], [3,89], [4,44], [5,38], ],
        'bars' => ['show' => true], ], ],
    'options' => [ 'legend' =>
    [ 'position' => 'nw', 'show' => true, 'margin' => 10, 'backgroundOpacity' => 0.5 ], ],
    'htmlOptions' => [ 'style' => 'width:400px;height:400px;' ],
    'plugins' => [
        // Use helper class with constants to specify plugin type
        Plugin::SELECTION,
        Plugin::TIME,
        Plugin::CANVAS
    ]

]);

?>
