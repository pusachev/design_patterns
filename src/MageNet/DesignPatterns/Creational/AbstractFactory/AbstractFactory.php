<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory
{
    /**
     * @param string $context
     * @return TextInterface
     */
    abstract public function createText(string $context): TextInterface;
}
