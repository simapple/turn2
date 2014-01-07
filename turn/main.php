<?php
define(TURN_ROOT,dirname(__FILE__));
define(TURN_LIB_ROOT,TURN_ROOT."/lib/");
define(TURN_TABLE_ROOT,TURN_ROOT."/table/");
define(TURN_CONF_ROOT,TURN_ROOT."/conf/");
require(TURN_LIB_ROOT."Db.class.php");
require(TURN_LIB_ROOT."Command.class.php");
//require(TURN_LIB_ROOT."Log.class.php");
require("Turntable.class.php");
require(TURN_TABLE_ROOT."/load.php");
require(TURN_TABLE_ROOT."/helper/Mk.class.php");
require(TURN_TABLE_ROOT."/helper/Getvaluefactory.class.php");
require(TURN_TABLE_ROOT."/helper/Helper.class.php");
require(TURN_CONF_ROOT."files.inc.php");


Load::setfiles($files);
Load::run();


