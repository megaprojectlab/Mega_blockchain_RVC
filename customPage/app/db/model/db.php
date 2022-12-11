<?php

require_once 'ptcQueryBuilder.php'; // 쿼리빌더 라이브러리

class DB
{
    private $pdo = null; // DB 연결 정보 변수

    function __construct($pdo) {
        try {
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            exit('데이터베이스 연결에 오류가 발생했습니다.');
        }
    }

    function select_visitant_if($ip,$rdate){ // 현재 날짜와 아이피 기준으로 검색하는 함수
        $stmt = $this->pdo->prepare("SELECT * FROM conn_info WHERE ip =:ip AND LEFT(joindate,10) = :rdate");
        $stmt->bindParam(':ip', $ip);
        $stmt->bindParam(':rdate', $rdate);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function email($email){
        $stmt = $this->pdo->prepare("SELECT * FROM $this->table_name WHERE email =:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = $this->getter($datas);

        return $result;
    }

    function builder(){
        $qb = new PtcQueryBuilder($this->pdo);
        $qb->setFetchMode(PDO::FETCH_ASSOC); // 연관배열로 반환
        $result = $qb;

        return $result;
    }
}
?>
