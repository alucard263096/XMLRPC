<?php
 defined('IN_TA') or exit('Access Denied'); 

class DbSqlsrv
{
	/**
	* Sqlsrv connect identifier
	* @var resource
	*/
	public $conn;

	/**
	* calculate executed sql statement num
	* @var int
	*/
	public $querynum = 0;
	private  $codeKey="unbreakable";

	private static $instance = null;
	
	public static function getInstance() 
	{
		return self::$instance!=null ? self::$instance : new DbSqlsrv();
	}
	
	private function __construct()
	{
		
	}
	
	function __destruct()
	{		
		//~ close the opened connection(no effect to sqlsrv_pconnect)
		if($this->conn)	$this->close();
	}
	
	/**
	* connect to db, return connect identifier
	* @param string db host
	* @param string db user
	* @param string db password
	* @param string db name
	* @param bool is persistent connection: 1 - Yes, 0 - No
	* @return link_identifier
	*/
	function connect($dbhost, $dbuser, $dbpass, $dbname = '', $pconnect = 0) 
	{
		 $dbhost= $this->XORDecryption($this->codeKey,$dbhost);
		 $dbuser= $this->XORDecryption($this->codeKey,$dbuser);
		 $dbpass= $this->XORDecryption($this->codeKey,$dbpass);
		 $dbname= $this->XORDecryption($this->codeKey,$dbname);
		
		$serverName = $dbhost;
		$uid = $dbuser;
		$pwd = $dbpass;
		$connectionInfo = array( "UID"=>$uid,
					"PWD"=>$pwd,
					"Database"=>$dbname,
					"CharacterSet"=>"UTF-8");
		
		if(!$this->conn = sqlsrv_connect( $serverName, $connectionInfo))
		{
			$this->halt('service unavailable');
		} 
		
		return $this->conn;
	}
	
	function connect_4_test($dbhost, $dbuser, $dbpass, $dbname = '', $pconnect = 0) 
	{
		$serverName = $dbhost;
		$uid = $dbuser;
		$pwd = $dbpass;
		$connectionInfo = array( "UID"=>$uid,
					"PWD"=>$pwd,
					"Database"=>$dbname,
					"CharacterSet"=>"UTF-8");
		if(!$this->conn = sqlsrv_connect( $serverName, $connectionInfo))
		{
			$this->halt('service unavailable');
		} 
		
		return $this->conn;
	}
	
	function connect_without_msg($dbhost, $dbuser, $dbpass, $dbname = '', $pconnect = 0) 
	{
		global $LANG;
		$func = $pconnect == 1 ? 'sqlsrv_pconnect' : 'sqlsrv_connect';
		if(!$this->conn = @$func($dbhost, $dbuser, $dbpass))
		{
//			$this->halt($LANG['service_unavailable']);
		}

		
		return $this->conn;
	}

	/**
	* select database
	* @param string db name
	* @return boolean Success: true, Fail: false
	*/
	function select_db($dbname) 
	{
		return @sqlsrv_select_db($dbname , $this->conn);
	}

	/**
	* execute sql statement
	* @param string $sql: sql statement
	* @param string $type: default '', option: CACHE | UNBUFFERED
	* @param int $expires: Cache lifetime, second for unit
	* @param string $dbname: db name
	* @return resource
	*/
	function query($sql) 
	{
		if(!($query = @sqlsrv_query($this->conn,$sql)))
		{
			logger_mgr::logError("sql error :$sql");
			$this->halt($sql.'Sqlsrv Query Error', $sql);
		}
		logger_mgr::logDebug("sql :$sql");
		$this->querynum++;
		return $query;
	}
	function query2($sql,$type,$value) 
	{
		if(!($query = @sqlsrv_query($this->conn,$sql)))
		{
			$this->halt($sql.'Sqlsrv Query Error', $sql);
		}
		$this->querynum++;
		return $query;
	}
	
	/**
	* execute sql statement, only get one record
	* @param string $sql: sql statement
	* @param string $type: default '', option: CACHE | UNBUFFERED
	* @param int $expires: Cache lifetime, second for unit
	* @param string $dbname: db name
	* @return array, if no record in $query, return an empty array
	*/
	function get_one($sql)
	{
		$query = $this->query($sql);
		$row = $this->fetch_array($query);
		$this->free_result($query);
		//return $row ;
		return $row===false ? array() : $row ;
	}
	
	/**
	* get one row data as associate array from resultset.
	* @param resource ResultSet
	* @param string define return array type, option value: MYSQL_ASSOC, MYSQL_BOTH, MYSQL_NUM
	* @return array
	*/
	function fetch_array($query) 
	{
		return sqlsrv_fetch_array($query);
	}
	
	/**
	* get all rows data as associate array from resultset.
	* @param resource: ResultSet
	* @param string: define return array type,option value: MYSQL_ASSOC, MYSQL_BOTH, MYSQL_NUM
	* @return array: contain all rows data in $query; if no record in $query, return an empty array
	*/
	function fetch_array_all($query) 
	{
		while($row=sqlsrv_fetch_array($query))
			$rows[] = $row;
		//return $rows;
		return !is_array($rows)? array() : $rows ;
	}

	function fetch_one_column( $query, $colname )
	{
		$retarr = $this->fetch_array_all( $query );
		foreach ( $retarr as &$v ){
			$v = $v[$colname];
		}
		return 	$retarr;
	}
	
	/**
	* save or update db record
	* @param string $sql_check: check if exist sql statement
	* @param string $sql_update: update sql statement
	* @param string $sql_insert: insert sql statement
	* @return effect row num
	*/
	function save_or_update($sql_check, $sql_update, $sql_insert) 
	{
		$this->query($sql_check);
		if ( $this->affected_rows() > 0 ) {	// exist corresponding record
			$this->query($sql_update);	
		} else {	// no exist
			$this->query($sql_insert);
		}
		
		return $this->affected_rows();
	}
	
	/**
	* get the last effect row num
	* @return int
	*/
	function affected_rows() 
	{
		return sqlsrv_affected_rows($this->conn);
	}

	/**
	* get record count of resultset
	* @return int
	*/
	function num_rows($query) 
	{
		return sqlsrv_num_rows($query);
	}

	/**
	* get field count of resultset
	* @return int
	*/
	function num_fields($query) 
	{
		return mysql_num_fields($query);
	}

    /**
     * get result set 
     * @return array
     */
	function result($query, $row) 
	{
		return @sqlsrv_result($query, $row);
	}

	
	/**
	 * free result set
	 * @return bool whether free result success 
	 */
	function free_result($query) 
	{
		return sqlsrv_free_result($query);
	}


    /**
     * get one row from resultset
	 * @return array
	 */
	function fetch_row($query) 
	{
		return sqlsrv_fetch_row($query);
	}


	/**
	 * close db connection
	 * @return bool whether close connection successful
	 */
	function close() 
	{
		return sqlsrv_close($this->conn);
	}

	/**
	 * Character encoding conversion
	 * @return character
	 */
//	function setCharsetEncoding($data){;
//		$data = ($data,'iso8859-1','utf-8');
//		return $data;
//	}
	
    /**
	* display error message and exit
	* @param string $message
	* @param string $sql, sql statememt
	*/
	function halt($message = '', $sql = '')
	{
		
		echo $message;
		echo "The method or operation is not implemented.";
		exit();
	}
  function XOREncryption($codeKey,$dataIn)
  {
  	$longDataPtr;
  	$strDataOut;
  	$temp;
  	$tempString=null;
  	$intXOrValue1;
  	$intXOrValue2;
  	
  	for($i=1;$i<=strlen($dataIn);$i++)
  	{
  		
  		$intXOrValue1=ord(substr($dataIn,$i-1,1));
  		$intXOrValue2=ord(substr($codeKey,($i % strlen($codeKey)),1));
  		
  		$temp=($intXOrValue1 ^ $intXOrValue2);
  		//echo($temp);
  		$tempString=base_convert($temp,10,16);
  		//echo($tempString);
  		if(strlen($tempString)==1)
  		{
  			$tempString="0".$tempString;
  		}
  		$strDataOut=$strDataOut.$tempString;
  		
  	}
  	return $strDataOut;	
  }
  function XORDecryption($codeKey,$dataIn)
  {
  	//echo("aaaaaaa");
  	$longDataPtr;
  	$strDataOut;
  	$intXOrValue1;
  	$intXOrValue2;
  	
  	for($i=1;$i<=strlen($dataIn)/2;$i++)
  	{
  		$intXOrValue1=base_convert(substr($dataIn,(2*$i)-2,2),16,10);
  		//echo("aa:".$intXOrValue1."<br/>");
  		$intXOrValue2=ord(substr($codeKey,($i%strlen($codeKey)),1));
  		//echo("bb".$intXOrValue2."<br/>");
  		$strDataOut=$strDataOut.chr($intXOrValue1 ^ $intXOrValue2);
  	}
  	return $strDataOut;
  }
  
}




$dbmgr = DbSqlsrv::getInstance();
$myconn = $dbmgr->connect($CONFIG['database']['host'], $CONFIG['database']['user'], $CONFIG['database']['psw'], $CONFIG['database']['database']);

//$myconn = $dbmgr->connect_4_test($CONFIG['database']['host'],$CONFIG['database']['user'], $CONFIG['database']['psw'], $CONFIG['database']['database']);


?>