<?php

namespace Railken\LaraOre\Storage\File\Attributes\DiskId\Exceptions;

use Railken\LaraOre\Storage\File\Exceptions\FileAttributeException;

class FileDiskIdNotUniqueException extends FileAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'disk_id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILE_DISK_ID_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
