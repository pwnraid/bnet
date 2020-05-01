<?php

declare(strict_types=1);

/*
 * This file is part of boo/bnet.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
*
* This source file is subject to the MIT license that is bundled
* with this source code in the file LICENSE.
*/

namespace Boo\BattleNet\Endpoints\WowGameData\Pet;

use Boo\BattleNet\Endpoints\EndpointInterface;

/**
 * @internal
 */
final class GetPetsIndex implements EndpointInterface
{
    private const PATH = '/data/wow/pet/index';

    public function getMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getPath(): string
    {
        return self::PATH;
    }
}