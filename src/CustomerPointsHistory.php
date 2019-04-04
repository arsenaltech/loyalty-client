<?php
/**
 * Created by PhpStorm.
 * User: shabbir
 * Date: 3/7/19
 * Time: 10:56 PM
 */

namespace Arsenaltech\Loyalty;


class CustomerPointsHistory extends ApiResource
{
    const OBJECT_NAME = "history";
    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

}