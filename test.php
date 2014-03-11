<?php
  include('xmlrpc.inc');
 
  $dbname = 'DB_NAME';
  $user = 'USER_NAME';
  $pwd = 'PASSW';
  $url = ' https://OPENERP.URL';
  $sock = new xmlrpc_client(" https://OPENERP.URL/xmlrpc/common");
 
  $sock_msg = new xmlrpcmsg('login');
  $sock_msg->addParam(new xmlrpcval($dbname, "string"));
  $sock_msg->addParam(new xmlrpcval($user, "string"));
  $sock_msg->addParam(new xmlrpcval($pwd, "string"));
  $sock_resp = $sock->send($sock_msg);
 
  if ($sock_resp->errno != 0){
    echo  'error';
  }else{
 
    $sock_val = $sock_resp->value();
 
    $user_id = $sock_val->scalarval();
 
  }

?>
