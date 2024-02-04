<?php
class message{
    private $table = 'message_table';
    private $dbconn;
	private $dbstmt;
	private $dbsql;
    private $dbnumRow;
    
    public $id;
    public $name;
    public $email;
    public $subject;
    public $message;
    public $status;
    public $datetime;
    
    private $current_admin;
    private $last_id;
    
    public function __construct($conn = ''){
        if(!empty($conn)){
            //CREATE CONNECTION
            require_once(file_location('inc_path','connection.inc.php'));
            $this->dbconn = dbconnect($conn,'PDO');
        }
    }
    
    public function __destruct(){
    	//CLOSES ALL CONNECTION
        if(is_resource($this->dbconn)){
            closeconnect('db', $this->dbconn);
        }
        if(is_resource($this->dbstmt)){
            closeconnect('stmt',$this->dbstmt);
        }
    }
    
    
    public function insert_message(){
        $this->dbsql = "INSERT INTO {$this->table}(m_name,m_email,m_subject,m_message) VALUES(:name,:email,:subject,:message)";
        $this->dbstmt = $this->dbconn->prepare($this->dbsql);
        $this->dbstmt->bindParam(':name',$this->name,PDO::PARAM_STR);
        $this->dbstmt->bindParam(':email',$this->email,PDO::PARAM_STR);
        $this->dbstmt->bindParam(':subject',$this->subject,PDO::PARAM_STR);
        $this->dbstmt->bindParam(':message',$this->message,PDO::PARAM_STR);
        if($this->dbstmt->execute()){return 'success';}else{return 'fail';} 
    }//end insert message
}
?>