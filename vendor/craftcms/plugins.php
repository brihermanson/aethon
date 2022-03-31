<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.8.7',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'carlcs/craft-redactorcustomstyles' => 
  array (
    'class' => 'carlcs\\redactorcustomstyles\\Plugin',
    'basePath' => $vendorDir . '/carlcs/craft-redactorcustomstyles/src',
    'handle' => 'redactor-custom-styles',
    'aliases' => 
    array (
      '@carlcs/redactorcustomstyles' => $vendorDir . '/carlcs/craft-redactorcustomstyles/src',
    ),
    'name' => 'Redactor Custom Styles',
    'version' => '3.0.4',
    'description' => 'Redactor Custom Styles plugin for Craft CMS',
    'developer' => 'carlcs',
    'developerUrl' => 'https://github.com/carlcs',
    'documentationUrl' => 'https://github.com/carlcs/craft-redactorcustomstyles',
    'changelogUrl' => 'https://github.com/carlcs/craft-redactorcustomstyles/raw/v3/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/carlcs/craft-redactorcustomstyles/archive/v3.zip',
  ),
  'carlcs/craft-uielementfields' => 
  array (
    'class' => 'carlcs\\uielementfields\\Plugin',
    'basePath' => $vendorDir . '/carlcs/craft-uielementfields/src',
    'handle' => 'ui-element-fields',
    'aliases' => 
    array (
      '@carlcs/uielementfields' => $vendorDir . '/carlcs/craft-uielementfields/src',
    ),
    'name' => 'UI Element fields',
    'version' => '1.0.0',
    'description' => 'UI Element fields for Craft CMS',
    'developer' => 'carlcs',
    'developerUrl' => 'https://github.com/carlcs',
    'documentationUrl' => 'https://github.com/carlcs/craft-uielementfields',
  ),
  'craftcms/aws-s3' => 
  array (
    'class' => 'craft\\awss3\\Plugin',
    'basePath' => $vendorDir . '/craftcms/aws-s3/src',
    'handle' => 'aws-s3',
    'aliases' => 
    array (
      '@craft/awss3' => $vendorDir . '/craftcms/aws-s3/src',
    ),
    'name' => 'Amazon S3',
    'version' => '1.2.11',
    'description' => 'Amazon S3 integration for Craft CMS',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/aws-s3/blob/master/README.md',
  ),
  'ether/tags' => 
  array (
    'class' => 'ether\\tagManager\\TagManager',
    'basePath' => $vendorDir . '/ether/tags/src',
    'handle' => 'tag-manager',
    'aliases' => 
    array (
      '@ether/tagManager' => $vendorDir . '/ether/tags/src',
    ),
    'name' => 'Tags',
    'version' => '1.0.7',
    'description' => 'A tag manager for Craft 3',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'documentationUrl' => 'https://github.com/ethercreative/tags/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/ethercreative/tags/master/CHANGELOG.md',
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '2.2.7',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/contact-form/blob/v2/README.md',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'fruitstudios/linkit' => 
  array (
    'class' => 'fruitstudios\\linkit\\Linkit',
    'basePath' => $vendorDir . '/fruitstudios/linkit/src',
    'handle' => 'linkit',
    'aliases' => 
    array (
      '@fruitstudios/linkit' => $vendorDir . '/fruitstudios/linkit/src',
    ),
    'name' => 'Linkit',
    'version' => '1.1.12.1',
    'description' => 'One link field to rule them all.',
    'developer' => 'Fruit Studios',
    'developerUrl' => 'https://fruitstudios.co.uk',
    'developerEmail' => 'hi@fruitstudios.co.uk',
    'documentationUrl' => 'https://github.com/fruitstudios/craft-linkit',
    'changelogUrl' => 'https://raw.githubusercontent.com/fruitstudios/craft-linkit/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'services' => 'fruitstudios\\linkit\\services\\LinkitService',
    ),
  ),
  'hybridinteractive/craft-contact-form-extensions' => 
  array (
    'class' => 'rias\\contactformextensions\\ContactFormExtensions',
    'basePath' => $vendorDir . '/hybridinteractive/craft-contact-form-extensions/src',
    'handle' => 'contact-form-extensions',
    'aliases' => 
    array (
      '@rias/contactformextensions' => $vendorDir . '/hybridinteractive/craft-contact-form-extensions/src',
    ),
    'name' => 'Contact Form Extensions',
    'version' => '1.2.4',
    'schemaVersion' => '1.0.1',
    'description' => 'Adds extensions to the Craft CMS contact form plugin.',
    'developer' => 'Hybrid Interactive',
    'developerUrl' => 'https://hybridinteractive.io',
    'documentationUrl' => 'https://github.com/hybridinteractive/craft-contact-form-extensions/blob/master/README.md',
    'changelogUrl' => 'https://github.com/hybridinteractive/craft-contact-form-extensions/blob/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'contactFormExtensionsService' => 'rias\\contactformextensions\\services\\ContactFormExtensionsService',
    ),
  ),
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '2.2.3',
    'description' => 'Manage your fields and field groups with ease with simple field or group cloning and quicker overall management.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/field-manager',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-3/CHANGELOG.md',
  ),
  'spicyweb/craft-neo' => 
  array (
    'class' => 'benf\\neo\\Plugin',
    'basePath' => $vendorDir . '/spicyweb/craft-neo/src',
    'handle' => 'neo',
    'aliases' => 
    array (
      '@benf/neo' => $vendorDir . '/spicyweb/craft-neo/src',
    ),
    'name' => 'Neo',
    'version' => '2.9.10',
    'schemaVersion' => '2.8.16',
    'description' => 'A Matrix-like field type that uses existing fields',
    'developer' => 'Spicy Web',
    'developerUrl' => 'https://github.com/spicywebau',
    'documentationUrl' => 'https://github.com/spicywebau/craft-neo/wiki',
    'changelogUrl' => 'https://github.com/spicywebau/craft-neo/blob/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/spicywebau/craft-neo/archive/master.zip',
  ),
  'nystudio107/craft-seomatic' => 
  array (
    'class' => 'nystudio107\\seomatic\\Seomatic',
    'basePath' => $vendorDir . '/nystudio107/craft-seomatic/src',
    'handle' => 'seomatic',
    'aliases' => 
    array (
      '@nystudio107/seomatic' => $vendorDir . '/nystudio107/craft-seomatic/src',
    ),
    'name' => 'SEOmatic',
    'version' => '3.3.42',
    'description' => 'SEOmatic facilitates modern SEO best practices & implementation for Craft CMS 3. It is a turnkey SEO system that is comprehensive, powerful, and flexible.',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/plugins/seomatic/documentation',
    'changelogUrl' => 'https://raw.githubusercontent.com/nystudio107/craft-seomatic/v3/CHANGELOG.md',
  ),
  'servd/craft-asset-storage' => 
  array (
    'class' => 'servd\\AssetStorage\\Plugin',
    'basePath' => $vendorDir . '/servd/craft-asset-storage/src',
    'handle' => 'servd-asset-storage',
    'aliases' => 
    array (
      '@servd/AssetStorage' => $vendorDir . '/servd/craft-asset-storage/src',
    ),
    'name' => 'Servd Assets and Helpers',
    'version' => '2.5.1',
    'description' => 'Servd Asset Storage and Helpers integration for Craft CMS',
    'developer' => 'Servd',
    'developerUrl' => 'https://servd.host/',
    'developerEmail' => 'hello@servd.host',
    'documentationUrl' => 'https://github.com/servdhost/craft-asset-storage',
  ),
  'stenvdb/craft-download-assets' => 
  array (
    'class' => 'stenvdb\\downloadassets\\DownloadAssets',
    'basePath' => $vendorDir . '/stenvdb/craft-download-assets/src',
    'handle' => 'download-assets',
    'aliases' => 
    array (
      '@stenvdb/downloadassets' => $vendorDir . '/stenvdb/craft-download-assets/src',
    ),
    'name' => 'Download Assets',
    'version' => '1.0.2',
    'description' => 'Adds a download link next to assets',
    'developer' => 'Sten Van den Bergh',
    'developerUrl' => 'http://www.stenvdb.be/',
    'documentationUrl' => 'https://github.com/stenvdb/craft-download-assets/blob/master/README.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
);
