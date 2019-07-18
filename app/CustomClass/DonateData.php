<?php 
namespace App\CustomClass;
use App\Donate;

class DonateData{
	private $id;
	private $name;
	private $email;
	private $country;
	private $amount;
	private $comment;

	public function __construct($donate_data){
		$donates = Donate::where('id',$donate_data)->firstOrFail();
		$this->setId($donates->id);
		$this->setName($donates->name);
		$this->setEmail($donates->email);
		$this->setCountry($donates->country);
		$this->setAmount($donates->amount);
		$this->setComment($donates->comment);
	}

	public function getSingleDonateData(){
		return $arr = [
			'id' => $this->getId(),
			'name' => $this->getName(),
			'email' => $this->getEmail(),
			'country' => $this->getCountry(),
			'amount' => $this->getAmount(),
			'comment' => $this->getComment()
		];
	}

	public static function getAllData($donate_datas){
		$arr = [];
		foreach($donate_datas as $data){
			$obj = new DonateData($data->id);
			array_push($arr,$obj->getSingleDonateData());
		}
		return $arr;
	}

	private function setId($id){
		 $this->id = $id;
	}
	private function setName($name){
		$this->name = $name;
	}
	private function setEmail($email){
		$this->email = $email;
	}
	private function setCountry($country){
		$this->country = $country;
	}
	private function setAmount($amount){
		$this->amount = $amount;
	}
	private function setComment($comment){
		$this->comment = $comment;
	}
	private function getId(){
		return $this->id;
	}
	private function getName(){
		return $this->name;
	}
	private function getEmail(){
		return $this->email;
	}
	private function getCountry(){
		return $this->country;
	}
	private function getAmount(){
		return $this->amount;
	}
	private function getComment(){
		return $this->comment;
	}
}


 ?>
