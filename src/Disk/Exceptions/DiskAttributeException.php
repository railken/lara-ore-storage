<?php

namespace Railken\LaraOre\Storage\Disk\Exceptions;

abstract class DiskAttributeException extends DiskException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute;

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'DISK_ATTRIBUTE_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is invalid';

    /**
     * Construct.
     *
     * @param mixed $value
     */
    public function __construct($value = null)
    {
        $this->label = $this->attribute;

        parent::__construct($value);
    }
}
