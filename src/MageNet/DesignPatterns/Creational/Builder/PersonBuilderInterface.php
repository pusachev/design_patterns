<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\Builder;

interface PersonBuilderInterface
{
    /**
     * @return PersonBuilderInterface
     */
    public function setGender() : PersonBuilderInterface;

    /**
     * @return PersonBuilderInterface
     */
    public function setEmployed() : PersonBuilderInterface;

    /**
     * @return PersonInterface
     */
    public function getResult() : PersonInterface;
}
