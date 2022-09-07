<?php include "../../database.php"; ?>

<?php
class customer {
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }


    // public function insert_cartegory($cartegory_name) {
    //     $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUES ('$cartegory_name')";
    //     $result = $this->db->insert($query);
    //     header('Location:../../pages/tables/cartegorylist1.php');
    //     // return $result;
    // }



    public function show_customer(){
        $query = "SELECT * FROM tbl_user ORDER BY id_user DESC";
        $result = $this->db->select($query);
        return $result;
    }



    public function get_customer($customer_id) {
        // $query = "SELECT * FROM tbl_user WHERE id_user = '$id_user' ";
        // $result = $this->db->select($query);
        // return $result;
    }



    // public function update_customer($status){
    //     $query = "UPDATE tbl_ SET cartegory_name = '$cartegory_name' WHERE cartegory_id = '$cartegory_id' ";
    //     $result = $this->db->update($query);
    //     header('Location:../../pages/tables/cartegorylist1.php');
    //     return $result;
    // }



    // public function delete_cartegory($cartegory_id) {
    //     $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id' ";
    //     $result = $this->db->delete($query);
    //     header('Location:../../pages/tables/cartegorylist1.php');
    //     return $result;
    // }
}
?>
