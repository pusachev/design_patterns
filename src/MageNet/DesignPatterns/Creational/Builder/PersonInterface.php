<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Creational\Builder;

interface PersonInterface
{
    const GENDER_MALE = 'Male';
    const GENDER_FEMALE = 'Female';

    /**
     * @param string $gender
     * @return PersonInterface
     */
    public function setGender(string $gender) : PersonInterface;

    /**
     * @return string
     */
    public function getGender() : string;

    /**
     * @param bool $employed
     * @return PersonInterface
     */
    public function setEmployed(bool $employed) : PersonInterface;

    /**
     * @return bool
     */
    public function getEmployed() : bool;
}
