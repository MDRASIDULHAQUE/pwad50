
<?php
class Member {
  public $username = "";
  private $loggedIn = false;

  public function login() {
    $this->loggedIn = true;
  }
  public function logout() {
    $this->loggedIn = false;
  }
  public function isLoggedIn() {
    return $this->loggedIn;
  }
}

$member1 =new Member;
$member1->username="Rasid";
$member1->login();
echo $member1->isLoggedIn();
//$member1->logout();
echo "<hr>";
echo $member1->isLoggedIn();
?>
