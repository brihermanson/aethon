<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'yii\\swiftmailer\\' => array($vendorDir . '/yiisoft/yii2-swiftmailer/src'),
    'yii\\redis\\' => array($vendorDir . '/yiisoft/yii2-redis/src'),
    'yii\\queue\\sync\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/sync'),
    'yii\\queue\\stomp\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/stomp'),
    'yii\\queue\\sqs\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/sqs'),
    'yii\\queue\\redis\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/redis'),
    'yii\\queue\\gearman\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/gearman'),
    'yii\\queue\\file\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/file'),
    'yii\\queue\\db\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/db'),
    'yii\\queue\\beanstalk\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/beanstalk'),
    'yii\\queue\\amqp_interop\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/amqp_interop'),
    'yii\\queue\\amqp\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/amqp'),
    'yii\\queue\\' => array($vendorDir . '/yiisoft/yii2-queue/src'),
    'yii\\debug\\' => array($vendorDir . '/yiisoft/yii2-debug/src'),
    'yii\\composer\\' => array($vendorDir . '/yiisoft/yii2-composer'),
    'yii\\' => array($vendorDir . '/yiisoft/yii2'),
    'yii2tech\\ar\\softdelete\\' => array($vendorDir . '/craftcms/cms/lib/ar-softdelete/src'),
    'voku\\helper\\' => array($vendorDir . '/voku/anti-xss/src/voku/helper', $vendorDir . '/voku/email-check/src/voku/helper', $vendorDir . '/voku/urlify/src/voku/helper'),
    'voku\\' => array($vendorDir . '/voku/portable-ascii/src/voku', $vendorDir . '/voku/portable-utf8/src/voku', $vendorDir . '/voku/stop-words/src/voku'),
    'verbb\\fieldmanager\\' => array($vendorDir . '/verbb/field-manager/src'),
    'verbb\\base\\' => array($vendorDir . '/verbb/base/src'),
    'stenvdb\\downloadassets\\' => array($vendorDir . '/stenvdb/craft-download-assets/src'),
    'servd\\AssetStorage\\' => array($vendorDir . '/servd/craft-asset-storage/src'),
    'rias\\contactformextensions\\' => array($vendorDir . '/hybridinteractive/craft-contact-form-extensions/src'),
    'phpDocumentor\\Reflection\\' => array($vendorDir . '/phpdocumentor/reflection-common/src', $vendorDir . '/phpdocumentor/reflection-docblock/src', $vendorDir . '/phpdocumentor/type-resolver/src'),
    'nystudio107\\seomatic\\' => array($vendorDir . '/nystudio107/craft-seomatic/src'),
    'nystudio107\\pluginmanifest\\' => array($vendorDir . '/nystudio107/craft-plugin-manifest/src'),
    'modules\\' => array($baseDir . '/modules'),
    'mikehaertl\\shellcommand\\' => array($vendorDir . '/mikehaertl/php-shellcommand/src'),
    'fruitstudios\\linkit\\' => array($vendorDir . '/fruitstudios/linkit/src'),
    'ether\\tagManager\\' => array($vendorDir . '/ether/tags/src'),
    'enshrined\\svgSanitize\\' => array($vendorDir . '/enshrined/svg-sanitize/src'),
    'creocoder\\nestedsets\\' => array($vendorDir . '/creocoder/yii2-nested-sets/src'),
    'crafttests\\fixtures\\' => array($vendorDir . '/craftcms/cms/tests/fixtures'),
    'craftcms\\oauth2\\client\\' => array($vendorDir . '/craftcms/oauth2-craftid/src'),
    'craft\\redactor\\' => array($vendorDir . '/craftcms/redactor/src'),
    'craft\\contactform\\' => array($vendorDir . '/craftcms/contact-form/src'),
    'craft\\composer\\' => array($vendorDir . '/craftcms/plugin-installer/src'),
    'craft\\awss3\\' => array($vendorDir . '/craftcms/aws-s3/src'),
    'craft\\' => array($vendorDir . '/craftcms/cms/src'),
    'cebe\\markdown\\' => array($vendorDir . '/cebe/markdown'),
    'carlcs\\uielementfields\\' => array($vendorDir . '/carlcs/craft-uielementfields/src'),
    'carlcs\\redactorcustomstyles\\' => array($vendorDir . '/carlcs/craft-redactorcustomstyles/src'),
    'benf\\neo\\' => array($vendorDir . '/spicyweb/craft-neo/src'),
    'Webmozart\\Assert\\' => array($vendorDir . '/webmozart/assert/src'),
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'TrueBV\\' => array($vendorDir . '/true/punycode/src'),
    'Symfony\\Polyfill\\Php80\\' => array($vendorDir . '/symfony/polyfill-php80'),
    'Symfony\\Polyfill\\Php73\\' => array($vendorDir . '/symfony/polyfill-php73'),
    'Symfony\\Polyfill\\Php72\\' => array($vendorDir . '/symfony/polyfill-php72'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Symfony\\Polyfill\\Intl\\Normalizer\\' => array($vendorDir . '/symfony/polyfill-intl-normalizer'),
    'Symfony\\Polyfill\\Intl\\Idn\\' => array($vendorDir . '/symfony/polyfill-intl-idn'),
    'Symfony\\Polyfill\\Intl\\Grapheme\\' => array($vendorDir . '/symfony/polyfill-intl-grapheme'),
    'Symfony\\Polyfill\\Iconv\\' => array($vendorDir . '/symfony/polyfill-iconv'),
    'Symfony\\Polyfill\\Ctype\\' => array($vendorDir . '/symfony/polyfill-ctype'),
    'Symfony\\Contracts\\Translation\\' => array($vendorDir . '/symfony/translation-contracts'),
    'Symfony\\Contracts\\Service\\' => array($vendorDir . '/symfony/service-contracts'),
    'Symfony\\Component\\Yaml\\' => array($vendorDir . '/symfony/yaml'),
    'Symfony\\Component\\Translation\\' => array($vendorDir . '/symfony/translation'),
    'Symfony\\Component\\String\\' => array($vendorDir . '/symfony/string'),
    'Symfony\\Component\\Process\\' => array($vendorDir . '/symfony/process'),
    'Symfony\\Component\\Finder\\' => array($vendorDir . '/symfony/finder'),
    'Symfony\\Component\\Filesystem\\' => array($vendorDir . '/symfony/filesystem'),
    'Symfony\\Component\\Console\\' => array($vendorDir . '/symfony/console'),
    'Stringy\\' => array($vendorDir . '/voku/stringy/src'),
    'Seld\\PharUtils\\' => array($vendorDir . '/seld/phar-utils/src'),
    'Seld\\JsonLint\\' => array($vendorDir . '/seld/jsonlint/src/Seld/JsonLint'),
    'Seld\\CliPrompt\\' => array($vendorDir . '/seld/cli-prompt/src'),
    'React\\Promise\\' => array($vendorDir . '/react/promise/src'),
    'Psr\\SimpleCache\\' => array($vendorDir . '/psr/simple-cache/src'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-factory/src', $vendorDir . '/psr/http-message/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'PhpScience\\TextRank\\' => array($vendorDir . '/php-science/textrank/src', $vendorDir . '/php-science/textrank/tests'),
    'PhpOption\\' => array($vendorDir . '/phpoption/phpoption/src/PhpOption'),
    'Opis\\Closure\\' => array($vendorDir . '/opis/closure/src'),
    'LitEmoji\\' => array($vendorDir . '/elvanto/litemoji/src'),
    'League\\OAuth2\\Client\\' => array($vendorDir . '/league/oauth2-client/src'),
    'League\\MimeTypeDetection\\' => array($vendorDir . '/league/mime-type-detection/src'),
    'League\\Flysystem\\AwsS3v3\\' => array($vendorDir . '/league/flysystem-aws-s3-v3/src'),
    'League\\Flysystem\\' => array($vendorDir . '/league/flysystem/src'),
    'Laminas\\Stdlib\\' => array($vendorDir . '/laminas/laminas-stdlib/src'),
    'Laminas\\Feed\\' => array($vendorDir . '/laminas/laminas-feed/src'),
    'Laminas\\Escaper\\' => array($vendorDir . '/laminas/laminas-escaper/src'),
    'JsonSchema\\' => array($vendorDir . '/justinrainbow/json-schema/src/JsonSchema'),
    'JmesPath\\' => array($vendorDir . '/mtdowling/jmespath.php/src'),
    'Imagine\\' => array($vendorDir . '/pixelandtonic/imagine/src'),
    'Illuminate\\View\\' => array($vendorDir . '/illuminate/view'),
    'Illuminate\\Support\\' => array($vendorDir . '/illuminate/collections', $vendorDir . '/illuminate/macroable', $vendorDir . '/illuminate/support'),
    'Illuminate\\Pipeline\\' => array($vendorDir . '/illuminate/pipeline'),
    'Illuminate\\Filesystem\\' => array($vendorDir . '/illuminate/filesystem'),
    'Illuminate\\Events\\' => array($vendorDir . '/illuminate/events'),
    'Illuminate\\Contracts\\' => array($vendorDir . '/illuminate/contracts'),
    'Illuminate\\Container\\' => array($vendorDir . '/illuminate/container'),
    'Illuminate\\Bus\\' => array($vendorDir . '/illuminate/bus'),
    'GuzzleHttp\\Psr7\\' => array($vendorDir . '/guzzlehttp/psr7/src'),
    'GuzzleHttp\\Promise\\' => array($vendorDir . '/guzzlehttp/promises/src'),
    'GuzzleHttp\\' => array($vendorDir . '/guzzlehttp/guzzle/src'),
    'GraphQL\\' => array($vendorDir . '/webonyx/graphql-php/src'),
    'Egulias\\EmailValidator\\' => array($vendorDir . '/egulias/email-validator/src'),
    'Dotenv\\' => array($vendorDir . '/vlucas/phpdotenv/src'),
    'Doctrine\\Inflector\\' => array($vendorDir . '/doctrine/inflector/lib/Doctrine/Inflector'),
    'Doctrine\\Common\\Lexer\\' => array($vendorDir . '/doctrine/lexer/lib/Doctrine/Common/Lexer'),
    'Defuse\\Crypto\\' => array($vendorDir . '/defuse/php-encryption/src'),
    'Composer\\XdebugHandler\\' => array($vendorDir . '/composer/xdebug-handler/src'),
    'Composer\\Spdx\\' => array($vendorDir . '/composer/spdx-licenses/src'),
    'Composer\\Semver\\' => array($vendorDir . '/composer/semver/src'),
    'Composer\\Pcre\\' => array($vendorDir . '/composer/pcre/src'),
    'Composer\\MetadataMinifier\\' => array($vendorDir . '/composer/metadata-minifier/src'),
    'Composer\\CaBundle\\' => array($vendorDir . '/composer/ca-bundle/src'),
    'Composer\\' => array($vendorDir . '/composer/composer/src/Composer'),
    'Carbon\\' => array($vendorDir . '/nesbot/carbon/src/Carbon'),
    'Aws\\' => array($vendorDir . '/aws/aws-sdk-php/src'),
    'Arrayy\\' => array($vendorDir . '/voku/arrayy/src'),
    'AlbertCht\\InvisibleReCaptcha\\' => array($vendorDir . '/albertcht/invisible-recaptcha/src'),
);
