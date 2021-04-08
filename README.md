# Mage2 Module Armmage AdvancedWysiwyg

    ``armmage/module-advancedwysiwyg``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
TyniMce4 i tag to em replacing issue fixing and  including to default layout options like "Color Picker" or "Code"

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Armmage`
 - Enable the module by running `php bin/magento module:enable Armmage_AdvancedWysiwyg`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require armmage/module-advancedwysiwyg`
 - enable the module by running `php bin/magento module:enable Armmage_AdvancedWysiwyg`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications

 - Plugin
	- afterGetConfig - Magento\Ui\Component\Wysiwyg\ConfigInterface > Armmage\AdvancedWysiwyg\Plugin\Magento\Ui\Component\Wysiwyg\ConfigInterface


## Attributes



