<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\AbstractFactory;

abstract class Text
{
    /** @var string */
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
