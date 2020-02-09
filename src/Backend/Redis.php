<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL v3 or later
 *
 */
namespace Piwik\Cache\Backend;

use Doctrine\Common\Cache\RedisCache;
use Piwik\Cache\Backend;

class Redis extends RedisCache implements Backend
{
    public function doFetch($id)
    {
        return parent::doFetch($id);
    }

    public function doContains($id)
    {
        return parent::doContains($id);
    }

    public function doSave($id, $data, $lifeTime = 0)
    {
        return parent::doSave($id, $data, $lifeTime);
    }

    protected function doDelete($id)
    {
        return $this->getRedis()->del($id) >= 0;
    }

    public function doFlush()
    {
        return parent::doFlush();
    }

}
