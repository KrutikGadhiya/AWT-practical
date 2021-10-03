<?php

class User
{
    // table name definition and database connection
    public $db_conn;
    public $table_name = "users";

    // object properties
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;

    public function __construct($db)
    {
        $this->db_conn = $db;
    }

    function create()
    {
        //write query
        $sql = "INSERT INTO " . $this->table_name . " SET firstname = ?, lastname = ?, email = ?, mobile = ?";

        $prep_state = $this->db_conn->prepare($sql);

        $prep_state->bindParam(1, $this->firstname);
        $prep_state->bindParam(2, $this->lastname);
        $prep_state->bindParam(3, $this->email);
        $prep_state->bindParam(4, $this->mobile);

        # print_r($prep_state); exit();

        if ($prep_state->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // for pagination
    public function countAll()
    {
        $sql = "SELECT id FROM " . $this->table_name . "";

        $prep_state = $this->db_conn->prepare($sql);
        $prep_state->execute();

        $num = $prep_state->rowCount(); //Returns the number of rows affected by the last SQL statement
        return $num;
    }


    function update()
    {
        $sql = "UPDATE " . $this->table_name . " SET firstname = :firstname, lastname = :lastname, email = :email, mobile = :mobile WHERE id = :id";
        // prepare query
        $prep_state = $this->db_conn->prepare($sql);


        $prep_state->bindParam(':firstname', $this->firstname);
        $prep_state->bindParam(':lastname', $this->lastname);
        $prep_state->bindParam(':email', $this->email);
        $prep_state->bindParam(':mobile', $this->mobile);
        $prep_state->bindParam(':id', $this->id);

        echo "<h1>" . $this->mobile . "</h1>";
        // execute the query
        if ($prep_state->execute()) {
            return true;
        } else {
            return false;
        }
    }


    function delete($id)
    {
        $sql = "DELETE FROM " . $this->table_name . " WHERE id = :id ";

        $prep_state = $this->db_conn->prepare($sql);
        $prep_state->bindParam(':id', $this->id);

        if ($prep_state->execute(array(":id" => $_GET['id']))) {
            return true;
        } else {
            return false;
        }
    }


    function getAllUsers($from_record_num, $records_per_page)
    {
        $sql = "SELECT id, firstname, lastname, email, mobile FROM " . $this->table_name . " ORDER BY firstname ASC LIMIT ?, ?";


        $prep_state = $this->db_conn->prepare($sql);


        $prep_state->bindParam(1, $from_record_num, PDO::PARAM_INT); //Represents the SQL INTEGER data type.
        $prep_state->bindParam(2, $records_per_page, PDO::PARAM_INT);


        $prep_state->execute();

        return $prep_state;
        $db_conn = NULL;
    }

    // for edit user form when filling up
    function getUser()
    {
        $sql = "SELECT firstname, lastname, email, mobile FROM " . $this->table_name . " WHERE id = :id";

        $prep_state = $this->db_conn->prepare($sql);
        $prep_state->bindParam(':id', $this->id);
        $prep_state->execute();

        $row = $prep_state->fetch(PDO::FETCH_ASSOC);

        $this->firstname = $row['firstname'];
        $this->lastname = $row['lastname'];
        $this->email = $row['email'];
        $this->mobile = $row['mobile'];
    }
}
