<?php

namespace Swoft\Event;

/**
 * 所有事件名称
 *
 * @uses      AppEvent
 * @version   2017年08月30日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class AppEvent
{
    /**
     * 应用初始化加载监听器
     */
    const APPLICATION_LOADER = "applicationLoader";

    /**
     * 任务前置事件
     */
    const BEFORE_TASK = "beforeTask";

    /**
     * 任务后置事件
     */
    const AFTER_TASK = "afterTask";

    /**
     * 进程前置事件
     */
    const BEFORE_PROCESS = "beforeProcess";

    /**
     * 进程后置事件
     */
    const AFTER_PROCESS = "afterProcess";
}
