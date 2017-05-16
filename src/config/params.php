<?php
/**
 * DropWind asset files: images, configs and more.
 *
 * @link      https://github.com/dropwind/yii2-asset-dropwind
 * @package   yii2-asset-dropwind
 * @license   proprietary
 * @copyright Copyright (c) 2017, DropWind (http://dropwind.com/)
 */

$supportEmail = 'support@dropwind.com';

return [
    'favicon.ico' => '@dropwind/assets/dropwind/assets/images/favicon.ico',

    'organization.name' => 'DropWind',
    'organization.url' => 'https://dropwind.com/',

    'supportEmail' => $supportEmail,
    'adminEmail' => $supportEmail,

    'copyright.year' => 2011,

    'socialLinks.links' => [
        'email' => 'mailto:' . $supportEmail,
    ],
];
