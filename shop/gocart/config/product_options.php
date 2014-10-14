<?php

/*
 * Used by Cart::_get_product_options()
 * 
 * 'default' stores the default options.
 * Define $config['product_options']['product_id'] and assign array of options
 * that need to be added to the options of product_id. The products that 
 * doesn't have an entry here uses all the default options. There is also 'remove' for removing
 * options. Option list are the filenames found in themes/default/views/product_options/
 * We can pass data to option using '>' . eg: size > large_small 'large_small' will be available as 
 * $type in option view. if no argument is passed $type will be set as 'default'
 */

// default options for products. any id that not is in this file will have all these options.
$default = array(
    'size',
    'color',
    'wheels',
    'rigid_or_lightened',
    'divider',
    'lid_embroidery', 
    'front_embroidery',
    'end_embroidery',
);

$without_divider = array_diff($default, array('divider'));
$without_size = array_diff($default, array('size'));
$without_divider_size = array_diff($default, array('divider', 'size'));

// variable with _index suffix will be available for all option
// to get the array index so it can be modified
foreach ($default as $i => $option)
{
    $var = "{$option}_index";
    $$var = $i;
}

$config['product_options']['default'] = $default;

// large-neuromodulation-bang
$config['product_options']['6'] = $without_size;

// small-neuromodulation-bag
$config['product_options']['8'] = array('color', 'lid');

// salesman-combo-bag
$config['product_options']['4'] = $without_size;

// biotronik-implant-bag
$config['product_options']['5'] = $without_size;

// only need these options
$config['product_options']['8']['remove'] = array('color', 'lid_embroidery');

// boston-scientific-s-icd-bag
$config['product_options']['9'] = $without_divider_size;

// oversized-sales-bags1
//$config['product_options']['10']

// rapido-bags
$rapido = $default;
$rapido[$size_index] = "size > large_small"; // change size type
$config['product_options']['11'] = $rapido;

// attain-delivery-system-bag
$config['product_options']['12'] = $without_divider_size;

// cps-bag
$config['product_options']['13'] = $without_divider_size;

// biotronik-scout-pro-bag
$config['product_options']['14']['remove'] = array('size','divider', 'wheels');

// top-loading-catheter-bag
$config['product_options']['15']['remove'] = array('size','divider', 'wheels', 'lid_embroidery', 'end_embroidery');

// mini-trainer-bag
$config['product_options']['17'] = array('color > with_purple', 'lid_embroidery', 'front_embroidery');

// athletic-trainer-bag-1
$config['product_options']['18'] = array('color > with_purple', 'lid_embroidery', 'front_embroidery');

// athletic-trainer-bag-2
$config['product_options']['19'] = array('color > with_purple', 'wheels', 'lid_embroidery', 'front_embroidery');

// athletic-trainer-bag-3
$config['product_options']['20'] = array('color > with_purple', 'wheels', 'lid_embroidery', 'front_embroidery');

// athletic-trainer-bag-3
$config['product_options']['20'] = array('color > with_purple', 'wheels', 'lid_embroidery', 'front_embroidery');

// athletic-trainer-bag-4
$config['product_options']['21'] = array('color > with_purple', 'wheels', 'lid_embroidery', 'front_embroidery');

// athletic-trainer-bag-5
$config['product_options']['22'] = array('color > with_purple', 'lid_embroidery', 'front_embroidery');

// front-loading-boston-programmer-bag
$config['product_options']['25'] = array('color', 'wheels', 'front_embroidery');

// top-loading-boston-programmer-bag
$config['product_options']['26'] = array('color', 'wheels', 'front_embroidery');

// open-boston-programmer-bag
$config['product_options']['27'] = array('color', 'front_embroidery');

// open-medtronic-bag
$config['product_options']['28'] = array('color', 'front_embroidery');

// front-loading-st-jude-programmer-bag
$config['product_options']['29'] = array('color', 'wheels', 'front_embroidery');

// st-jude-top-loading-programmer-bag
$config['product_options']['30'] = array('wheels');

// open-st-jude-bag
$config['product_options']['31'] = array('color', 'front_embroidery');

// biotroniks-ics-3000-programmer-top-loading
$config['product_options']['32'] = array('color', 'front_embroidery');

// biotroniks-renamic-programmer-top-loading
$config['product_options']['33'] = array('wheels');

// biotroniks-renamic-programmer-open-cart
$config['product_options']['34'] = array();

// city-corp-computer-bag
$config['product_options']['35'] = array('color > black_grey_blue', 'front_embroidery');

// schwan-bag
$config['product_options']['36'] = array();

// front-loading-sorin-programmer-bag
$config['product_options']['23'] = array('color', 'front_embroidery');

$config['product_options']['28'] = $without_divider;

// open-st-jude-bag
$config['product_options']['31'] = array('color', 'front_embroidery');

// add-on-bag
$config['product_options']['37'] = $without_divider_size;

// demo-kit
$config['product_options']['38'] = array('color', 'lid_embroidery');

// biotronik-demo-kit-bag
$config['product_options']['39'] = array('color', 'lid_embroidery');

// accessory-bag
$config['product_options']['40'] = array('color', 'lid_embroidery');

// luggage-cart
$config['product_options']['41'] = array();

// lead-vest-duffel-bag
$config['product_options']['42'] = array('color', 'front_embroidery');

// salesman-computer-briefcase
$config['product_options']['43'] = array('color', 'front_embroidery');

// straight-zippered-duffel-bag
$config['product_options']['45'] = array('color', 'front_embroidery');

// athletic-trainer-bag-3
$config['product_options']['20'] = array('color > with_purple', 'lid_embroidery');


