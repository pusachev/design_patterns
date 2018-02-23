<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\Builder;

class PersonDirector implements PersonDirectorInterface
{
    /** {@inheritdoc} */
    public function build(PersonBuilderInterface $personBuilder): PersonInterface
    {
        return $personBuilder
                    ->setGender()
                    ->setEmployed()
                    ->getResult();
    }
}
