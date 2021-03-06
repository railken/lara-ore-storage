<?php

namespace Railken\LaraOre\Storage\File\Attributes\Access\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileAccessNotDefinedException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'access';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_ACCESS_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
