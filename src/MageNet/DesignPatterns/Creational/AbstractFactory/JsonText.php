<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\AbstractFactory;

class JsonText extends Text implements TextInterface
{
    /** {@inheritdoc} */
    public function getText()
    {
        return json_encode($this->text);
    }
}