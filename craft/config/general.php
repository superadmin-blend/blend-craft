<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

    '*' => array(
        // Whether "index.php" should be visible in URLs (true, false, "auto")
        'omitScriptNameInUrls' => true,
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 0,

        // Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
        'enableCsrfProtection' => true,

        // Control Panel trigger word
        'cpTrigger' => 'admin',
    ),

    // Environment-specific variables (see https://craftcms.com/docs/multi-environment-configs#environment-specific-variables)
    '.dev' => array(
        'siteUrl' => array(
            'en' => 'http://blend-craft.dev',
            'nl' => 'http://blend-craft.dev/nl',
            'fr' => 'http://blend-craft.dev/fr'
        ),
        'environmentVariables' => array(
            'baseUrl' => 'http://blend-craft.dev',
            'assetsBaseUrl' => '/assets/',
            'assetsBasePath' => $_SERVER['DOCUMENT_ROOT'].'/assets/',
        ),
        'devMode' => true,
    ),

    '.blendworks.be' => array(
        'siteUrl' => array(
            'en' => 'https://blendcraft.blendworks.be',
            'nl' => 'https://blendcraft.blendworks.be/nl',
            'fr' => 'https://blendcraft.blendworks.be/fr'
        ),
        'environmentVariables' => array(
            'baseUrl' => 'https://blendcraft.blendworks.be',
            'assetsBaseUrl' => '/assets/',
            'assetsBasePath' => $_SERVER['DOCUMENT_ROOT'].'/assets/',
        ),
        'devMode' => false,
        'phpMaxMemoryLimit' => '512M',
    ),

);
