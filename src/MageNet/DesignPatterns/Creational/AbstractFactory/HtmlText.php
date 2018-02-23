<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\AbstractFactory;

class HtmlText extends Text implements TextInterface
{
    /** {@inheritdoc} */
    public function getText()
    {
        return sprintf("<strong>%s</strong>", $this->text);
    }
}
