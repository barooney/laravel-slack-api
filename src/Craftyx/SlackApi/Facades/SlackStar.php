<?php

namespace Craftyx\SlackApi\Facades;

use Illuminate\Support\Facades\Facade;

class SlackStar extends Facade
{
    /**
   * @return string
   */
  protected static function getFacadeAccessor()
  {
      return 'slack.star';
  }
}
