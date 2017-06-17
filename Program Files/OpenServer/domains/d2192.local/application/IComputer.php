<?php
/** utf-8 */

namespace application;


/** create interface IComputer */
interface IComputer
{
    /** create method "start" */
    function start();

    /** create method "shutdown" */
    function shutdown();

    /** create method "restart" */
    function restart();

    /** create method printParameters */
    function printParameters();

    /** create method identifyUser */
    function identifyUser();
}

/** as we can see, all methods are not implemented */
