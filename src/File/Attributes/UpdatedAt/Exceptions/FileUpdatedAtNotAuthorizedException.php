<?php

namespace Railken\LaraOre\Storage\File\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileUpdatedAtNotAuthorizedException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_UPDATED_AT_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
