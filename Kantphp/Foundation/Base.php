<?php

/**
 * @package KantPHP
 * @author  Zhenqiang Zhang <565364226@qq.com>
 * @copyright (c) 2011 - 2015 KantPHP Studio, All rights reserved.
 * @license http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 */

namespace Kant\Foundation;

use Kant\Foundation\Object;
use Kant\KantFactory;

class Base extends Object {

    //cache
    protected $cache;
    //cookie
    protected $cookie;

    public function __construct() {
        $this->cookie = KantFactory::getCookie();
    }

}
