<?php

/**
 * Copyright (c) 2022 Tectalic (https://tectalic.com)
 *
 * For copyright and license information, please view the LICENSE file that was distributed with this source code.
 *
 * Please see the README.md file for usage instructions.
 */
declare (strict_types=1);
namespace OM4\CopyCraft\Vendor\Tectalic\OpenAi\Models\FineTunes;

use OM4\CopyCraft\Vendor\Tectalic\OpenAi\Models\AbstractModel;
final class CreateResponseValidationFilesItem extends AbstractModel
{
    /**
     * List of required property names.
     *
     * These properties must all be set when this Model is instantiated.
     */
    protected const REQUIRED = ['id', 'object', 'bytes', 'created_at', 'filename', 'purpose'];
    /** @var string */
    public $id;
    /** @var string */
    public $object;
    /** @var int */
    public $bytes;
    /** @var int */
    public $created_at;
    /** @var string */
    public $filename;
    /** @var string */
    public $purpose;
    /** @var string */
    public $status;
    /** @var \OM4\CopyCraft\Vendor\Tectalic\OpenAi\Models\FineTunes\CreateResponseValidationFilesItemStatusDetails|null */
    public $status_details;
}
