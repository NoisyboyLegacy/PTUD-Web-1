<?php
class Department{
    private $Conn ;
    public $ID;
    public $Name;
    public $NumberOfStaff;

    public function __construct($Connection)
    {
        $this->Conn = $Connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Departments";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute();
        $result = $cmd->fetchAll();
        $this->Conn = null;
        return $result;
    }

    public function getbyId($id)
    {
        $sql = "SELECT * FROM Departments WHERE id =:id";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute(array('id' => $id));
        $result = $cmd->fetchObject();
        $this->Conn = null;
        return $result;
    }

    public function InsertDPM($Name)
    {
        $sql = "CALL `proc_thembophanmoi`(:Name)";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute(array('Name' => $Name));
        $this->Conn = null;
        return;
    }

    public function UpdateDPM($id,$Name,$NumberOfStaff)
    {
        $sql = "CALL `proc_suabophan`(:id, :Name, :NumberOfStaff)";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute(array('id'=>$id,'Name' => $Name,'NumberOfStaff'=>$NumberOfStaff));
        $this->Conn = null;
        return;
    }

    public function DeleteDPM($id)
    {
        $sql = "CALL `proc_xoabophan`(:id)";
        $cmd = $this->Conn->prepare($sql);
        $cmd->execute(array('id'=>$id));
        $this->Conn = null;
        return;
    }

}
?>