<?php

declare(strict_types=1);

namespace Test\Http\Handler;

use App\Http\Handler\HomeHandler;
use PHPUnit\Framework\TestCase;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\ServerRequest;
use Zend\Expressive\Template\TemplateRendererInterface;

class HomeHandlerTest extends TestCase
{
    public function testReturnsHtmlResponse()
    {
        $renderer = $this->prophesize(TemplateRendererInterface::class);
        $renderer->render('app::home')->willReturn('');

        $home = new HomeHandler($renderer->reveal());

        $response = $home->handle(new ServerRequest());

        $this->assertInstanceOf(HtmlResponse::class, $response);
    }
}
