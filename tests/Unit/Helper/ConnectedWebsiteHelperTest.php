<?php

namespace Tests\Unit\Helper;

use Tests\TestCase;

class ConnectedWebsiteHelperTest extends TestCase {
    public function testDesignConsultationCheckoutUrlIncludesAppointmentId(): void
    {
        $url = design_consultation_checkout_url(42, '', '');

        $query = [];
        parse_str(parse_url($url, PHP_URL_QUERY) ?? '', $query);

        $this->assertSame('42', $query['appointmentId'] ?? null);
        $this->assertArrayNotHasKey('associateFirstName', $query);
        $this->assertArrayNotHasKey('associateLastName', $query);
    }

    public function testDesignConsultationCheckoutUrlIncludesAssociateNamesWhenProvided(): void
    {
        $url = design_consultation_checkout_url(7, 'Ann Marie', "O'Brien");

        $query = [];
        parse_str(parse_url($url, PHP_URL_QUERY) ?? '', $query);

        $this->assertSame('7', $query['appointmentId'] ?? null);
        $this->assertSame('Ann Marie', $query['associateFirstName'] ?? null);
        $this->assertSame("O'Brien", $query['associateLastName'] ?? null);
    }
}
