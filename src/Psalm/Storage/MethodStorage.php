<?php
namespace Psalm\Storage;

use Psalm\CodeLocation;

class MethodStorage extends FunctionLikeStorage
{
    /**
     * @var bool
     */
    public $is_static;

    /**
     * @var bool
     */
    public $reflected;

    /**
     * @var bool
     */
    public $registered;

    /**
     * @var int
     */
    public $visibility;

    /**
     * @var bool
     */
    public $final;

    /**
     * @var array<int, CodeLocation>
     */
    public $unused_params = [];

    /**
     * @var array<int, bool>
     */
    public $used_params = [];
}
