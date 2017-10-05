<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <heshudong@ibenchu.com>
 * @copyright (c) 2017, notadd.com
 * @datetime 2017-10-05 23:46
 */
namespace Notadd\Composer;

use Notadd\Foundation\Extension\Abstracts\Installer as AbstractInstaller;

/**
 * Class Installer.
 */
class Installer extends AbstractInstaller
{
    /**
     * @return bool
     */
    public function handle()
    {
        return true;
    }
}
