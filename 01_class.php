class Student {
    function __construct($s_id) {
        $sql = "select * from student where s_id = '$s_id'";
        $res = sql_query($sql);
        $row = sql_row_keyed($res, 0);
        foreach($row as $key => $value) {
            $this->$key = $value;
        }
    }

}
