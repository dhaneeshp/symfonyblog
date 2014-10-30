<?php


namespace Treewalker\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Validator\Constraints as Assert;


class ChangePassword {
    
     protected $oldPassword;

    /**
     * @Assert\Length(
     *     min = 6,
     *     minMessage = "Password should by at least 6 chars long"
     * )
     */
     protected $newPassword;
     
     
     public function getOldPassword() {
         return $this->oldPassword;
     }

     public function getNewPassword() {
         return $this->newPassword;
     }

     public function setOldPassword($oldPassword) {
         $this->oldPassword = $oldPassword;
     }

     public function setNewPassword($newPassword) {
         $this->newPassword = $newPassword;
     }


}
