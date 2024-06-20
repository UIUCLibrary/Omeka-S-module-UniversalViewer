<?php declare(strict_types=1);

namespace UniversalViewer\Form;

use Laminas\Form\Element;

class SiteSettingsFieldset extends SettingsFieldset
{
    public function init(): void
    {
        parent::init();
        $this
            ->add([
                'name' => 'universalviewer_config_theme',
                'type' => Element\Checkbox::class,
                'options' => [
                    'element_group' => 'player',
                    'label' => 'Version of Universal viewer', // @translate
                    'value_options' => [
                        '1' => 'None',
                        '2' => 'Version 2.0.2 (better speed for some scanned pdf; require iiif v2)', // @translate
                        '3' => 'Version 3.1.1 (more modern, but deprecated)', // @translate
                        '4' => 'Version 4 (up to date)', // @translate
                    ],
                ],
                'attributes' => [
                    'id' => 'universalviewer_config_theme',
                ],
            ])

        ;
    }
}
