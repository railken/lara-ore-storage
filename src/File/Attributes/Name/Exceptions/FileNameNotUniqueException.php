<?php

namespace Railken\LaraOre\Storage\File\Attributes\Name\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileNameNotUniqueException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_NAME_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
