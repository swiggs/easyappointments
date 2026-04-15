<?php

namespace Tests\Unit\Config;

use Config;
use Tests\TestCase;

class AppConfigTest extends TestCase {
    public function testConnectedWebsiteUrlMatchesRootConfig(): void
    {
        $this->assertSame(
            rtrim(Config::CONNECTED_WEBSITE_URL, '/'),
            config('connected_website_url'),
        );
    }

    public function testConnectedWebsiteDesignConsultationPath(): void
    {
        $this->assertSame(
            '/shop/services/design-consultation/',
            config('connected_website_design_consultation_path'),
        );
    }
}
