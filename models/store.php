<?php
class Store
{
    public $id;
    public $name;
    public $des;
    public $create_at;
    public $pre_hash;
    public $hash;

    function __constructor($id, $name, $des, $create_at, $pre_hash, $hash)
    {
        $this->id = $id;
        $this->name = $name;
        $this->des = $des;
        $this->create_at = $create_at;
        $this->pre_hash = $pre_hash;
        $this->hash = $hash;
    }

    static function find($hash)
    {
        // Find in DB with hash
    }

    function execHash()
    {
        $hash = hash('sha256', $this->id . $this->name . $this->des . $this->quantity . $this->create_at . $this->pre_hash);
    }

    function isValid()
    {
        // Check if pre hash is in DB Transport
    }

    function insertDB()
    {
        //Add source to database
    }
}
?>