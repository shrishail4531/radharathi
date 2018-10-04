<?php 
$image_url = $_SERVER['SERVER_NAME'].'/radha/images/';
$images = array(
            array(
                'title' => 'Love so bright tonight... ',
                'image' => $image_url.'home_v1_02.jpg'
            ),

            array(
                'title' => 'Love so bright tonight1... ',
                'image' => $image_url.'home_v1_04.jpg'
            ),

            array(
                'title' => 'Love so bright tonight2... ',
                'image' => $image_url.'home_v1_08.jpg'
            ),

            array(
                'title' => 'Love so bright tonight...3 ',
                'image' => $image_url.'home_v1_10.jpg'
            ),

           array(
                'title' => 'Love so bright tonight...4 ',
                'image' => $image_url.'home_v1_15.jpg'
            ),
           array(
                'title' => 'Love so bright tonight...4 ',
                'image' => $image_url.'home_v1_17.jpg'
            ),
           array(
                'title' => 'Love so bright tonight...4 ',
                'image' => $image_url.'home_v1_19.jpg'
            ),
           array(
                'title' => 'Love so bright tonight...4 ',
                'image' => $image_url.'home_v1_24.jpg'
            )
        );

        $response = array('list'=>$images);
        $res = json_encode($response, JSON_UNESCAPED_SLASHES);
		echo '<pre>'; print_r($res);

?>