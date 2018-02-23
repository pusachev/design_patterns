<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\Builder;

class EmployedFemaleBuilder implements PersonBuilderInterface
{
    /** @var PersonInterface */
    private $person;

    public function __construct()
    {
        $this->person = new Person();
    }

    /** {@inheritdoc} */
    public function setGender(): PersonBuilderInterface
    {
        $this->person->setGender(PersonInterface::GENDER_FEMALE);

        return $this;
    }

    /** {@inheritdoc} */
    public function setEmployed(): PersonBuilderInterface
    {
        $this->person->setEmployed(true);

        return $this;
    }

    /** {@inheritdoc} */
    public function getResult(): PersonInterface
    {
        return $this->person;
    }
}
