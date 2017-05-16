<?php

$header = <<<EOF
DropWind asset files: images, configs and more

@link      https://github.com/dropwind/yii2-asset-dropwind
@package   yii2-asset-dropwind
@license   proprietary
@copyright Copyright (c) 2017, DropWind (http://dropwind.com/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
        'phpdoc_no_alias_tag'                        =>  ['replacements' => ['type' => 'var']],
        'phpdoc_separation'                          =>  false,
        'concat_space'                               =>  ['spacing' => 'one'],
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
