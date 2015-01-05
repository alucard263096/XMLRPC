<?php
require ROOT.'/include/xmlrpc.inc';
$xmlrpc_internalencoding='UTF-8';

class WebServiceClient {
	
	public $xmlrpc_client = null;
	public $server = '';
	public $port = '';
	private $path = '';
	
	public function __construct($path = '', $server = '', $port = '') {
		global $CONFIG;
		
		if ($path != '') {
			$this->path = $CONFIG['web_service']['path'].$path;
		} else {
			$this->path = $CONFIG['web_service']['path'];
		}
		if ($server != '') {
			$this->server = $server;
		} else {
			$this->server = $CONFIG['web_service']['server'];
		}
		if ($port != '') {
			$this->port = $port;
		} else {
			$this->port = $CONFIG['web_service']['port'];
		}
		if ($this->xmlrpc_client == null) {
			if ($this->path != '' && $this->server != '' && $this->port != '') {
				$this->xmlrpc_client = new xmlrpc_client($this->path, $this->server, $this->port);
			$this->xmlrpc_client->return_type = 'phpvals';
			}
		} else {
			$this->xmlrpc_client->path = $this->path;
			$this->xmlrpc_client->server = $this->server;
			$this->xmlrpc_client->port = $this->port;
		}
	}
	
	public function obj2xmlrpcval($obj) {
		$v = new xmlrpcval();
		
		if (is_array($obj)) {
			foreach ($obj as $key => $val) {
				$arr[$key] = $this->obj2xmlrpcval($val);
			}
			$v->addStruct($arr); 
		} else {
			$v->addScalar($obj);
		}
		
		return $v;
	}
	
	public function resetClient($path = '', $server = '', $port = '') {
		global $CONFIG;
		
		if ($path != '') {
			$this->path = $CONFIG['web_service']['path'].$path;
		}
		if ($server != '') {
			$this->server = $server;
		}
		if ($port != '') {
			$this->port = $port;
		}
		if ($this->xmlrpc_client == null) {
			$this->xmlrpc_client = new xmlrpc_client($this->path, $this->server, $this->port);
			$this->xmlrpc_client->return_type = 'phpvals';
		} else {
			$this->xmlrpc_client->path = $this->path;
			$this->xmlrpc_client->server = $this->server;
			$this->xmlrpc_client->port = $this->port;
		}
	}
	
	public function getResultFromServer($obj, $method = '') {
		$log_str = "[Web Service Client] >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>\n";
		if (is_array($obj) && $method != '') {
			$log_str .= "[Web Service Client] Calling server - Method name: ".$method."\n";
			$log_str .= "[Web Service Client] Calling server - Params: \n";
			foreach ($obj as $key => $value) {
				$log_str .= "[Web Service Client] (".$key." => ".$value.") \n";
			}
			$log_str .= "[Web Service Client] Calling server - Params End. \n";
			$msg = new xmlrpcmsg($method, array($this->obj2xmlrpcval($obj)));
			
		} else {
			$msg = $obj;
		}
		
		$rsp = $this->xmlrpc_client->send($msg);
		
		if ($rsp->faultcode() == 0) {
			$log_str .= "[Web Service Client] Got result from server - result size: ".count($rsp->value())."\n";
		} else {
			$log_str .= "[Web Service Client] Cannot get result from server - Method name: ".$method." Error: ".$rsp->faultCode()." Message: ".$rsp->faultString()."\n";
			echo $log_str;
		}
		$log_str .= "[Web Service Client] <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<";
		
		return $rsp;
	}
}

$webServiceClient = new WebServiceClient();

?>