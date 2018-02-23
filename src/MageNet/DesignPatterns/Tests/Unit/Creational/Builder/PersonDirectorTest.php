<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Tests\Unit\Creational\Builder;

use MageNet\DesignPatterns\Creational\Builder\PersonBuilderInterface;
use PHPUnit\Framework\TestCase;

use MageNet\DesignPatterns\Creational\Builder\EmployedFemaleBuilder;
use MageNet\DesignPatterns\Creational\Builder\EmployedMaleBuilder;
use MageNet\DesignPatterns\Creational\Builder\UnemployedMaleBuilder;
use MageNet\DesignPatterns\Creational\Builder\UnemployedFemaleBuilder;
use MageNet\DesignPatterns\Creational\Builder\PersonInterface;
use MageNet\DesignPatterns\Creational\Builder\PersonDirectorInterface;
use MageNet\DesignPatterns\Creational\Builder\PersonDirector;

class PersonDirectorTest extends TestCase
{
    /** @var PersonDirectorInterface */
    protected $personDirector;

    /** {@inheritdoc} */
    public function setUp()
    {
        $this->personDirector = new PersonDirector();
    }

    /** {@inheritdoc} */
    public function tearDown()
    {
        $this->personDirector = null;
        parent::tearDown();
    }

    /**
     * @param string    $builderClass
     * @param string    $expectedGender
     * @param bool      $expectedEmployed
     *
     * @dataProvider builderDataProvider
     */
    public function testEmployedMaleBuilder($builderClass, $expectedGender, $expectedEmployed)
    {
        /** @var PersonBuilderInterface $builder */
        $builder = new $builderClass;
        $person =$this->personDirector->build($builder);

        $this->assertInstanceOf(PersonInterface::class, $person);
        $this->assertEquals($expectedGender, $person->getGender());
        $this->assertEquals($expectedEmployed, $person->getEmployed());

    }

    /**
     * @return mixed[]
     */
    public function builderDataProvider()
    {
        return [
            'employed male builder' => [
                'class'             => EmployedMaleBuilder::class,
                'expectedGender'    => PersonInterface::GENDER_MALE,
                'expectedEmployed'  => true
            ],
            'employed female builder' => [
                'class'             => EmployedFemaleBuilder::class,
                'expectedGender'    => PersonInterface::GENDER_FEMALE,
                'expectedEmployed'  => true
            ],
            'unemployed male builder' => [
                'class'             => UnemployedMaleBuilder::class,
                'expectedGender'    => PersonInterface::GENDER_MALE,
                'expectedEmployed'  => false
            ],
            'unemployed female builder' => [
                'class'             => UnemployedFemaleBuilder::class,
                'expectedGender'    => PersonInterface::GENDER_FEMALE,
                'expectedEmployed'  => false
            ],
        ];
    }
}
