<?php
namespace App;
/*
 * NEED data object as json format
	{
		"to": "/firebase",
		"data": {
			"timestamp": 21340214,
			"className": "us.hoang.anh.le"
		}
	}
 * ArrayObject return $this as itself an object with that format
 */
class Command{

    public $created_timestamp;
    public $expiry_timestamp;
    public $sent_by_uuid;
    public $command;
    public $parameter;

    public function __construct($sentByUUID, $command, $parameter){
        $this->created_timestamp = time();
        $this->expiry_timestamp = time() + 5 * 60;
        $this->sent_by_uuid = $sentByUUID;
        $this->command = $command;
        $this->parameter = $parameter;
    }
}

$cloudMsgData = new Command("90c04912-1d0b-3067-b7e5-00d46c92c9e7", "message", "hi, minh, anh here");
$ao = new \ArrayObject($cloudMsgData);
$a = $ao->getArrayCopy();
$jsonEncoded = json_encode($ao->getArrayCopy());
var_dump($jsonEncoded, get_class($cloudMsgData));


