<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Behavoral\Interceptor;

abstract class AbstractInterceptor
{
    public $object;
    public $rootObject;

    /**
     * @param $object
     */
    public function __construct($object)
    {
        $this->object = $object;

        if ($object instanceof AbstractInterceptor) {
            $this->rootObject = $object->rootObject;
        } else {
            $this->rootObject = $object;
        }

        $object->intercepted = $this;
    }

    /**
     * @param string  $method
     * @param mixed[] $args
     * @return mixed
     */
    public function callMethod($method, $args)
    {
        return call_user_func_array(array($this->object, $method), $args);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->rootObject->$name);
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        unset($this->rootObject->$name);
    }

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->rootObject->$name = $value;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->rootObject->$name;
    }

    /**
     * @param string  $method
     * @param mixed[] $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        if ($method[0] == "_") {
            $method = substr($method, 1);
        }

        if (method_exists($this, "before")) {
            $this->before($this->rootObject, $method, $args);
        }

        if (method_exists($this, "around")) {
            $value = $this->around($this->rootObject, $method, $args);
        } else {
            $value = $this->callMethod($method, $args);
        }

        if (method_exists($this, "after")) {
            $this->after($this->rootObject, $method, $args);
        }

        return $value;
    }
}
