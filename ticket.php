<?php
    require "config.php";

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

        public function add_ticket(){
            $c = new config;
            $conn = $c->connect();
            $sql = 'INSERT INTO ticket(code,customer_name,customer_phone,number_of_ticket,branch_id,task_list_id,employee_id,status,flag,create_at) VALUES (:code,:customer_name,:customer_phone,:number_of_ticket,:branch_id,:task_list_id,:employee_id,:status,:flag,NOW())';
            $tsql = $conn->prepare($sql);
            $tsql->execute(
                array (
                    ":code" => $this->code,
                    ":customer_name" => $this->customer_name,
                    ":customer_phone" => $this->customer_phone,
                    ":number_of_ticket" => $this->number_of_ticket,
                    ":branch_id" => $this->branch_id,
                    ":task_list_id" => $this->task_list_id,
                    ":employee_id" => $this->employee_id,
                    ":status" => $this->status,
                    ":flag" => $this->flag, 
                )
            );
            $conn = null;
        }

        public function showCode() {
            $c = new config;
            $conn = $c->connect();
            $sql = 'SELECT tl.id,tl.code FROM task_list tl INNER JOIN task_status ts ON tl.status=ts.id WHERE ts.name = "pending"  ';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll();
            foreach($results as $row) {
                echo "<option value='".$row["id"]."'>".$row["code"]."</option>";
            }
            $conn = null;
        }

        public function setBranchId($task_id) {
            $c = new config;
            $conn = $c->connect();
            $sql = 'select b.id bid from task_list tl inner join router_list rl on tl.router_list_id = rl.id inner join branch b on rl.start_point = b.id where tl.id = :task_list_id ';
            $tsql = $conn->prepare($sql);
            $tsql->execute(
                array (
                    ":task_list_id" => $task_id
                )
            );
            $conn = null;
            $this->branch_id  = $tsql->fetchColumn(0);
        }

    }

?>