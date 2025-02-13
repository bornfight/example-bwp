<?php

namespace exampleBwp\api;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class ApiHelper
{
    //ROUTE EXAMPLE
    //const LOAD_ARTICLE = 'load-article';

    const BASE_PATH = 'api/v1';

    const BASE_API_URL = '%s/wp-json/%s%s/';

    /**
     * @param string $routeKey
     *
     * @return string
     */
    public static function toRoute(string $routeKey): string
    {
        return sprintf(self::BASE_API_URL, get_site_url(), self::BASE_PATH, $routeKey);
    }
}
