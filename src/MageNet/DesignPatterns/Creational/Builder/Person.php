<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\Builder;

class Person implements PersonInterface
{
    /** @var string */
    protected $gender;

    /** @var bool */
    protected $employed;

    /** {@inheritdoc} */
    public function setGender(string $gender): PersonInterface
    {
        $this->gender = $gender;

        return $this;
    }

    /** {@inheritdoc} */
    public function getGender(): string
    {
        return $this->gender;
    }

    /** {@inheritdoc} */
    public function setEmployed(bool $employed): PersonInterface
    {
        $this->employed = $employed;

        return $this;
    }

    /** {@inheritdoc} */
    public function getEmployed(): bool
    {
        return $this->employed;
    }
}
