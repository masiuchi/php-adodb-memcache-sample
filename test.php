<?php

require_once('adodb5/adodb.inc.php');
require_once('adodb5/adodb-active-record.inc.php');
require_once('adodb5/adodb-exceptions.inc.php');

$db = NewADOConnection('mysql://root@localhost/mt');
ADOdb_Active_Record::SetDatabaseAdapter($db);

require_once('blog.php');
$blog = new Blog;
$blog->Load(1);

$mc = new Memcache;
$mc->connect('localhost', 11211) or die (1);
$mc->set('blog_id:1', $blog);
$cache = $mc->get('blog_id:1');

