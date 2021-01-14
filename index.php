<?php
$data = [
        'Products'=>[
                'IT' => [
                        'komp1' =>'Macbook',
                    'ac' => 'Usb hub',
                    'kb-1' => 'Keyboard'
        ],
    'Other' => [
            'ph-1'=>'Samsung',
        'w-1' => 'Apple watch'
        ]
    ],
    'Service'=> [

            'IT'=>[
                    'dev'=>'Web development',
                'design' => 'web design'
            ],
        'Business' => [
                'cr' =>'Company registration',
                 'seo' =>'SEO optimization'
        ]
    ]];

?>

<ul>
    <?php foreach($data as $key => $category):?>
        <li><strong><?=ucfirst($key);?></strong>
<ul>
    <?php foreach($category as $type => $subcategory):?>
    <li><?=ucfirst($type);?>:
    <ul>
        <?php foreach($subcategory as $value):?>
        <li><?=$value;?></li>
        <?php endforeach;?>
</ul>
    </li>
    <?php endforeach;?>
</ul>
        </li>
    <?php endforeach;?>
</ul>






