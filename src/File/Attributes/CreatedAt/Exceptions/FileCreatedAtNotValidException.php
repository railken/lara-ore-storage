<?php

namespace Railken\LaraOre\Storage\File\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileCreatedAtNotValidException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
