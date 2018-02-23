<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\Builder;

interface PersonDirectorInterface
{
    /**
     * @param PersonBuilderInterface $personBuilder
     * @return PersonInterface
     */
    public function build(PersonBuilderInterface $personBuilder) : PersonInterface;
}
