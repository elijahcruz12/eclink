<?php

return [

    /**
     * Setting this to true will limit which domains are allowed to register with this installation of ECLink.
     * If set to false, anyone can register. Keep this in mind.
     */
    'limit_domains' => env('LIMIT_DOMAINS', false),

    /**
     * Must be set if the config variable above is set to true.
     *
     * If limiting to one domain, set the variable in your .env file like so:
     * DOMAINS_ALLOWED=domain.net
     *
     * If limiting to multiple, surround the domains in double quotes, and seperate by comma. No spaces.
     * DOMAINS_ALLOWED="domain.com,domaintwo.com,domain.net"
     */
    'allowed_domains' => env('DOMAINS_ALLOWED'),

    /**
     * Here you can specify your admin emails.
     */
    'admin_emails' => explode(',', env('ADMIN_EMAILS', 'domin@email.com')),

    /**
     * If set to true, users will be sent a email verification. You users will have to verify they're
     * email if this is set to true.
     */
    'verify_email' => env('VERIFY_EMAILS', false),

    /**
     *  This is the suffix used before the actual links themselves.
     *  The is required in order to seperate the links from the actual site. Say you wanted https://longlink.com/login as the short link 'login', Doing this would make logging into the site impossible. Please note that if you change this, every link you might've created will change, which means that they will break if elseware.
     */
    'suffix' => env('LINK_SUFFIX', 'l'),

    /**
     * Here you can specify a different logo to use with ECLink. Recommended PNG or SVG. Recommended size is 40x40 px for SVG and 140x140 minimum px for PNG or JPEG.
     */
    'logo' => env('SITE_LOGO', 'img/brand-default.png'),

    /**
     * Leave this false. If you set to true, your links won't redirect, and will instead show a simple demo view.
     */
    'demo_mode' => env('DEMO_MODE', false),
];
