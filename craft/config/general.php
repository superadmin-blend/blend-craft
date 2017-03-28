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
        'siteUrl' => 'http://blend-craft.dev',
        'environmentVariables' => array(
            'baseUrl' => 'http://blend-craft.dev',
            'assetsBaseUrl' => '/assets/',
            'assetsBasePath' => './assets/',
        ),
        'devMode' => true,
    ),

);
