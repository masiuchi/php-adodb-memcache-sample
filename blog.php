<?php

require_once('adodb5/adodb.inc.php');
require_once('adodb5/adodb-active-record.inc.php');
require_once('adodb5/adodb-exceptions.inc.php');

class Blog extends ADOdb_Active_Record {
  public $_table = 'mt_blog';
  protected $_prefix = "blog_";
}

