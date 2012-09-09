<?php

namespace PHPSpec2\Exception\Stub;

class MethodNotFoundException extends StubException
{
    private $subject;
    private $method;

    public function __construct($subject, $method)
    {
        $this->subject = $subject;
        $this->method  = $method;

        parent::__construct(sprintf(
            'Method <value>%s::%s()</value> not found.',
            get_class($subject), $method
        ));
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getMethod()
    {
        return $this->method;
    }
}
