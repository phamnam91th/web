<?php
    class ticket{
        public $code;
        public $customer_name;
        public $customer_phone;
        public $number_of_ticket;
        public $branch_id;
        public $task_list_id;
        public $employee_id;
        public $status;
        public $flag;
        public $create_at;
        public $update_at;

        public function add_ticket($conn){
            $sql = 'INSERT INTO ticket(code,customer_name,customer_phone,number_of_ticket,branch_id,task_list_id,employee_id,status,flag,create_at,update_at)
             VALUES ("'.$this->code.'","'.$this->customer_name.'","'.$this->customer_phone.'","'.$this->number_of_ticket.'","'.$this->branch_id.'","'.$this->task_list_id.'","'.$this->status.'","'.$this->flag.'","'.$this->create_at.'","'.$this->update_at.'")';
            $tsql = $conn->prepare($sql);
            $tsql->execute();
        }

        public function showCode($conn) {
            $sql = 'SELECT id,code FROM task_list';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
            foreach($results as $row) {
                echo "<option value='".$row["id"]."'>".$row["code"]."</option>";
            }
        }

    }

?>