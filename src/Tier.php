<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:56 PM
 */

namespace Arsenaltech\Loyalty;


class Tier extends ApiResource
{
    const OBJECT_NAME = "tier";
    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

}