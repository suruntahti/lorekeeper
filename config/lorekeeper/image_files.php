<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Files
    |--------------------------------------------------------------------------
    |
    | This is a list of files that will appear in the image uploader
    | section of the admin panel, to be used in the site layout.
    |
    */

    'header' => [
        'name' => 'Header Image',
        'description' => 'The header banner displayed at the top of the page. PNG format, default height of 200px. Tiles in both directions.',
        'filename' => 'header.png'
    ],
    'characters' => [
        'name' => 'Characters Icon',
        'description' => 'The characters graphic on the front page. PNG format, default size of 200px x 200px (no restriction).',
        'filename' => 'characters.png'
    ],
    'account' => [
        'name' => 'Account Icon',
        'description' => 'The account graphic on the front page. PNG format, default size of 200px x 200px (no restriction).',
        'filename' => 'account.png'
    ],
    'inventory' => [
        'name' => 'Inventory Icon',
        'description' => 'The inventory graphic on the front page. PNG format, default size of 200px x 200px (no restriction).',
        'filename' => 'inventory.png'
    ],
    'currency' => [
        'name' => 'Currency Icon',
        'description' => 'The bank graphic on the front page. PNG format, default size of 200px x 200px (no restriction).',
        'filename' => 'currency.png'
    ],
    'myo' => [
        'name' => 'MYO Default Image',
        'description' => 'The default image used for MYO slots when no image is uploaded. PNG format, no size restriction.',
        'filename' => 'myo.png'
    ],
    'myo-th' => [
        'name' => 'MYO Default Image (Thumbnail)',
        'description' => 'The default masterlist thumbnail used for MYO slots when no image is uploaded. PNG format, size of masterlist thumbnails.',
        'filename' => 'myo-th.png'
    ]
];
