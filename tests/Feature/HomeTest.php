<?php

declare(strict_types=1);

namespace Test\Feature;

class HomeTest extends WebTestCase
{
    public function testSuccess(): void
    {
        $response = $this->get('/');

        self::assertEquals(200, $response->getStatusCode());

        $content = $response->getBody()->getContents();

        self::assertContains('<h1>Welcome to App</h1>', $content);
    }
}
