<?php

class Company {
  protected $name;
  protected $address;
  protected $phone;
  
  
  public function displayCompany() {
    echo "会社名：" . $this->name . "<br>";
    echo "住所：" . $this->address . "<br>";
    echo "電話番号：" . $this->phone . "<br>";
  }
}

class Department extends Company {
  private $departmentName;
  private $departmentHead;
  
  public function displayDepartment() {
    echo "部署名：" . $this->departmentName . "<br>";
    echo "部長：" . $this->departmentHead . "<br>";
  }
}

$company1 = new Company();
$company1->$name = "サンプルA";
$company1->$address = "市ヶ谷";
$company1->$phone = "080-XXXX-XXXX";

$department1 = new Department();
$department1->$departmentName = "人事";
$department1->$departmentHead = "高田";

$company2 = new Company();
$company2->$name = "サンプルB";
$company2->$address = "池袋";
$company2->$phone = "090-XXXX-XXXX";

$department2 = new Department();
$department2->$departmentName = "総務";
$department2->$departmentHead = "田中";

$company3 = new Company();
$company3->$name = "サンプルC";
$company3->$address = "新宿";
$company3->$phone = "070-XXXX-XXXXX";

$department3 = new Department();
$department3->$departmentName = "営業";
$department3->$departmentHead = "高橋";

?>