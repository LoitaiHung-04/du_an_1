<?php
    class BaiViet {
        public  $conn;
        
        public function __construct(){
            $this->conn = connectDB();
        }

        // danh sach bai viet 
        public function getAll(){
            try {
                $sql = "SELECT * FROM tin_tucs";
                $stmt = $this->conn->prepare($sql);
                $stmt ->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);

            } catch (PDOException $e) {
                echo "error" .$e->getMessage();
            }
        }
        public function deleteData($id){
            try {
                $sql = "DELETE FROM  tin_tucs WHERE id=:id";

                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':id',$id);

                $stmt ->execute();
                return true;

            } catch (PDOException $e) {
                echo "error" .$e->getMessage();
            }
        }
        public function getDetailData($id){
            try {
                $sql = "SELECT *  FROM  tin_tucs WHERE id=:id";

                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':id',$id);

                $stmt ->execute();
                return $stmt->fetch();

            } catch (PDOException $e) {
                echo "error" .$e->getMessage();
            }
        }
        
        

        public function postData($title,$content,$trang_thai){
            try {
                $sql = "INSERT INTO tin_tucs (title,content,trang_thai)
                        VALUES(:title,:content,:trang_thai)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':title',$title);
                $stmt->bindParam(':content',$content);

                $stmt->bindParam(':trang_thai',$trang_thai);

                $stmt ->execute();
                return true;
            } catch (PDOException $e) {
                echo "error" .$e->getMessage();
            }
        }
        public function updateData($id, $title, $content, $trang_thai){
            try {
                $sql = "UPDATE tin_tucs 
                        SET title = :title,
                            content = :content,
                            trang_thai = :trang_thai
                        WHERE id = :id";
                
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':content', $content);
                $stmt->bindParam(':trang_thai', $trang_thai);
                $stmt->bindParam(':id', $id);
        
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo "error: " . $e->getMessage();
            }
        }
        
            

        public function __destruct(){
            $this->conn = null;
        }

    }
?>