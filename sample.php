<?php
class Company {
  protected $name;
  protected $address;
  protected $telephone;

  function __construct($name, $address, $telephone) {
    $this->name = $name;
    $this->address = $address;
    $this->telephone = $telephone;
  }

  function displayCompany() {
    echo "会社名: " . $this->name ."\n";
    echo "住所: " . $this->address . "\n";
    echo "電話番号: " . $this->telephone . "\n";
  }
}

class Department extends Company {
  private $department_name;
  private $department_head;

  function __construct($name, $address, $telephone, $department_name, $department_head) {
    parent::__construct($name, $address, $telephone);
    $this->department_name = $department_name;
    $this->department_head = $department_head;
  }

  function displayDepartment() {
    echo "部署名: " . $this->department_name . "\n";
    echo "部長: " . $this->department_head . "\n";
  }
}

$department1 = new Department("サンプルA", "市ヶ谷", "080-XXXX-XXXX", "人事", "高田");
$department2 = new Department("サンプルB", "池袋", "090-xxxx-xxxx", "総務", "田中");
$department3 = new Department("サンプルC", "新宿", "070-xxxx-xxxx", "営業", "高橋");

$departments = array($department1, $department2,$department3);

foreach ($departments as $department) {
  $department->displayCompany();
  $department->displayDepartment();
  echo "\n";
}
?>
