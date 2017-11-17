<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CreditWithdrawalsBundle\Entity;

class PaymentRequests
{
    private $firstName;
    private $lastName;
    private $email;
    private $credits;
    private $status;
    private $dateRequested;
    private $updatedBy;
    private $actor;
    private $id;
    
    public function getfirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function credits() {
        return $this->email;
    }
    
    public function getDateRequested() {
        return $this->dateRequested->format('Y-m-d H:i:s');;
    }
    
    public function getStatus() {
        
        $status = '';
        switch ($this->status) {
            case 1:
                $status='Pending';
                break;
            case 2:
                $status='Payment Sent';
                break;
            case 3:
                $status='Refund';
                break;
            default:
                $status='I do not know';
        }
        
        return $status;
    }
}