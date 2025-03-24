<?php 
class DashboardModel{
    private $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
}
?>