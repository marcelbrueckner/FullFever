<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Daniel Lienert <daniel@lienert.cc>, Daniel Lienert
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 * Configuration parameters
 *
 *  itemsPerRun:  Maximum number of items to be processed per run.
 *  unreadOnly:   Whether unread feeds only or additionally feeds already read should be processed. [Default: TRUE]
 *  logFile:      Absolute or relative path. If empty or not sufficient rights, no log file will be created. [Default: './FullFever.log']
 *
 */

// MySQL
$localConfiguration = array(
    'mysqlHost'     => 'localhost',
    'mysqlPort'     => '3306',
    'mysqlUser'     => '',
    'mysqlPassword' => '',
    'mysqlFeverDb'  => '',

    'itemsPerRun'   => 100,
    'unreadOnly'    => TRUE,
    
    'logFile'       => './FullFever.log'
)
?>