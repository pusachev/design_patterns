<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2018, Pavel Usachev
 */

namespace MageNet\DesignPatterns\Behavoral\Interceptor;

class LogInterceptor extends AbstractInterceptor
{
    
    public function around($object, $method, $args)
    {
        echo sprintf('Before method: "%s" called', $method);
        $value = $this->callMethod($method, $args);
        echo sprintf('After method: "%s" called', $method);

        return $value;
    }
}
