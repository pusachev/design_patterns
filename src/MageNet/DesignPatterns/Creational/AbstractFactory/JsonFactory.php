<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    /** {@inheritdoc} */
    public function createText(string $context): TextInterface
    {
        return new JsonText($context);
    }
}
