<?php

declare(strict_types=1);

namespace Test\Http\Handler;

use App\Http\Handler\HomeHandler;
use PHPUnit\Framework\TestCase;
use Zend\Diactoros\ServerRequest;
use Zend\Expressive\Template\TemplateRendererInterface;

class HomeHandlerTest extends TestCase
{
    public function testReturnsHtmlResponse(): void
    {
        $renderer = $this->prophesize(TemplateRendererInterface::class);
        $renderer->render('app::home')->willReturn('Hello!');

        $home = new HomeHandler($renderer->reveal());

        $response = $home->handle(new ServerRequest());

        self::assertContains('Hello!', $response->getBody()->getContents());
    }
}
