<?php

namespace Railken\LaraOre\Storage\File\Attributes\Content\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileContentNotUniqueException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'content';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_CONTENT_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
