<?php

namespace Transfluent\MobileApp;

class ServiceFactory
{
    private $namespace = __NAMESPACE__;

    public function newInstance($class, $dependency = null)
    {
        $class = $this->namespace . '\\' . ucfirst($class);
        return new $class($dependency);
    }
    
    public function serviceInstance($service, $dependency = array())
    {
        return new $service($dependency);
    }
    
    public function libraryInstance($class, $dependency = null)
    {
        $class = $this->namespace . '\\lib\\' . ucfirst($class);
        return new $class($dependency);
    }
    
    public function modelInstance($class, $dependency = null)
    {
        $class = $this->namespace . '\\model\\' . ucfirst($class);
        return new $class($dependency);
    }
}
