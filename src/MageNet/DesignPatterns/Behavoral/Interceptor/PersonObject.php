<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Behavoral\Interceptor;

class PersonObject
{
    protected $name;

    public function setName($name)
    {
        echo sprintf('Method: "%s" called', __METHOD__);
        $this->name = $name;
    }

    public function getName()
    {
        echo sprintf('Method: "%s" called', __METHOD__);
        return $this->name;
    }

    public function clearData()
    {
        echo sprintf('Method: "%s" called', __METHOD__);
        $this->name = null;
    }
}
