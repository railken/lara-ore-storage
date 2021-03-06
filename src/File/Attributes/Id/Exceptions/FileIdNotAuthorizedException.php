<?php

namespace Railken\LaraOre\Storage\File\Attributes\Id\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileIdNotAuthorizedException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_ID_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
