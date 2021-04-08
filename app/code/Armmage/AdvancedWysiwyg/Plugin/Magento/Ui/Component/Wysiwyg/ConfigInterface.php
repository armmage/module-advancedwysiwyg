<?php
/**
 * Copyright © http://armmage.com All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Armmage\AdvancedWysiwyg\Plugin\Magento\Ui\Component\Wysiwyg;

class ConfigInterface
{

    public function afterGetConfig(
        \Magento\Ui\Component\Wysiwyg\ConfigInterface $subject,
        \Magento\Framework\DataObject $result
    ) {
    
        // Get current wysiwyg adapter's path
        $editor = $this->activeEditor->getWysiwygAdapterPath();

        // Is the current wysiwyg tinymce v4?
        if(strpos($editor,'tinymce4Adapter')){

        if (($result->getDataByPath('settings/menubar')) || ($result->getDataByPath('settings/toolbar')) || ($result->getDataByPath('settings/plugins'))){
            // do not override ui_element config (unsure if this is needed)
            return $result;
        }

        $settings = $result->getData('settings');

        if (!is_array($settings)) {
            $settings = [];
        }

        // configure tinymce settings 
        $settings['menubar'] = true;
        $settings['valid_elements'] = '*[*]';
        $settings['valid_children'] = '+body[style],+div[a],+p[strong|a|#text],+a[div]';
        $settings['toolbar'] = 'undo redo | styleselect | fontsizeselect | forecolor backcolor | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | image | code';
        $settings['plugins'] = 'textcolor image code';
        $result->setData('settings', $settings);
        return $result;
        }
        else{ // don't make any changes if the current wysiwyg editor is not tinymce 4
            return $result;
        }
    }
}

