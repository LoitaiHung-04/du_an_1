<?php
function connectDB()
{
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
        // var_dump('ket noi thnah cong');die();
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}

function query_all_data($sql, $params = [])
{
    $conn = connectDB();
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function query_one_data($sql, $params = [])
{
    $conn = connectDB();
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function execute($sql, $params = [])
{
    $conn = connectDB();
    $stmt = $conn->prepare($sql);
    return $stmt->execute($params);
}
function addGetLateId($sql, $params = [])
{
    
    $conn = connectDB();
    $stmt = $conn->prepare($sql);

    $stmt->execute($params);

    $lastInsertId = $conn->lastInsertId();

    $conn = null;

    return $lastInsertId;

}
function checkLoginAdmin() {
    
    if (empty($_SESSION['user_admin'])) {
        require_once './views/pages/login/login.php';
        exit();
        
    }
}



