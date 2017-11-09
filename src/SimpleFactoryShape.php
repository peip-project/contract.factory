<?php

/*
 * This file is part of the peip/contract.factory package.
 *  (c) 2017 Timo Michna <timomichna/yahoo.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PEIP\Contract\Factory;

/**
 * Class PEIP\Contract\Factory\SimpleFactoryShape.
 *
 */
interface SimpleFactoryShape
{
    /**
     * @param array ...$args
     * @return object
     */
    public function build(...$args);
}
