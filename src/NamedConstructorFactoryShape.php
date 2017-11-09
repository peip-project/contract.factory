<?php

/*
 * This file is part of the semtic package.
 *  (c) ${THIS_YEAR} Timo Michna <timomichna/yahoo.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PEIP\Contract\Factory;

/**
 * Interface PEIP\Contract\Factory\CallableFactoryShape.
 *
 * A factory that will provide an instance of itself via the 'create' method
 */
interface NamedConstructorFactoryShape extends FactoryShape
{
    public static function create() : self ;
}
