<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

use PHPUnit\Framework\TestCase;

use MageNet\DesignPatterns\Creational\AbstractFactory\TextInterface;
use MageNet\DesignPatterns\Creational\AbstractFactory\HtmlFactory;
use MageNet\DesignPatterns\Creational\AbstractFactory\JsonFactory;
use MageNet\DesignPatterns\Creational\AbstractFactory\HtmlText;
use MageNet\DesignPatterns\Creational\AbstractFactory\JsonText;

class AbstractFactoryTest extends TestCase
{
    /**
     * @param string $text
     * @param string $expected
     *
     * @dataProvider htmlTextDataProvider
     */
    public function testCreateHtmlText($text, $expected)
    {
        $factory = new HtmlFactory();
        $htmlText = $factory->createText($text);

        $this->assertInstanceOf(HtmlText::class, $htmlText);
        $this->assertInstanceOf(TextInterface::class, $htmlText);
        $this->assertEquals($expected, $htmlText->getText());
    }

    /**
     * @param string $text
     * @param string $expected
     *
     * @dataProvider jsonTextDataProvider
     */
    public function testCreateJsonText($text, $expected)
    {
        $factory = new JsonFactory();
        $jsonText = $factory->createText($text);

        $this->assertInstanceOf(JsonText::class, $jsonText);
        $this->assertInstanceOf(TextInterface::class, $jsonText);
        $this->assertEquals($expected, $jsonText->getText());
    }

    /**
     * @return string[]
     */
    public function htmlTextDataProvider()
    {
        return [
            [
                'text'      => 'simple text',
                'expected'  => '<strong>simple text</strong>'
            ],
            [
                'text'      => 'simple text with "quotes"',
                'expected'  => '<strong>simple text with "quotes"</strong>'
            ]
        ];
    }

    /**
     * @return string[]
     */
    public function jsonTextDataProvider()
    {
        return [
            [
                'text'      => 'simple text',
                'expected'  => '"simple text"'
            ],
            [
                'text'      => 'simple text with "quotes"',
                'expected'  => '"simple text with \"quotes\""'
            ]
        ];
    }
}
