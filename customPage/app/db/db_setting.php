<?php
/**
 * 설명 : DB연결을 담당
 *
 * //특이사항
 *
 */
include_once "db_info.php";

class Db_conn
{
	public $conn = null;
	public $pdo = null;

    function __construct() // 생성자 db연결 담당
    {
		$this->dbConnect();

    }

	private function dbConnect()
	{
		try{
			// MySQL PDO 객체 생성
			// mysql을 다른 DB로 변경하면 다른 DB도 사용 가능
			$this->pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
			// 에러 출력
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(Exception $e) {
			echo $e->getMessage();
		}
	}
	public function loadData($data_name)
	{
		require 'model/'.strtolower($data_name) . '.php';
		return new $data_name($this->pdo);
	}


}
