<?php
function get_price($name)
{
    $products = [
            "Redmi_note_5_pro"=>15,
            "Nokia_3"=>90,
            "Iphone_6"=>23,
            "Iphone_8"=>12,
            
    ];
    foreach($products as $product=>$price)
    {
            if($product==$name)
            {
                    return $price;
            }
    }
}
?>