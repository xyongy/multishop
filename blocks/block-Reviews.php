<?php

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2005 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}

global $prefix, $db;

$sql = "SELECT id, title FROM ".$prefix."_reviews ORDER BY id DESC LIMIT 0,10";
$result = $db->sql_query($sql);
while (list($id, $title) = $db->sql_fetchrow($result)) {
$id = intval($id);
$title = stripslashes($title);
  $content .= "<strong><big>&middot;</big></strong>&nbsp;<a href=\"modules.php?name=Reviews&amp;rop=showcontent&amp;id=$id\">$title</a><br>";
}

?>