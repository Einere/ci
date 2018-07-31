<?php
class MemberModel extends CI_Model{
    private $memSeq = '';
    private $memId = '';
    private $memFirstName = '';
    private $memLastName = '';
    private $memNickName = '';
    private $memPw = '';
    private $memBirth = '';
    private $memAddr = '';
    private $memAgree = '';

    function __contruct(){
        parent::__construct();
    }

    

    /**
     * Get the value of memSeq
     */ 
    public function getMemSeq()
    {
        return $this->memSeq;
    }

    /**
     * Set the value of memSeq
     *
     * @return  self
     */ 
    public function setMemSeq($memSeq)
    {
        $this->memSeq = $memSeq;

        return $this;
    }

    /**
     * Get the value of memId
     */ 
    public function getMemId()
    {
        return $this->memId;
    }

    /**
     * Set the value of memId
     *
     * @return  self
     */ 
    public function setMemId($memId)
    {
        $this->memId = $memId;

        return $this;
    }

    /**
     * Get the value of memFirstName
     */ 
    public function getMemFirstName()
    {
        return $this->memFirstName;
    }

    /**
     * Set the value of memFirstName
     *
     * @return  self
     */ 
    public function setMemFirstName($memFirstName)
    {
        $this->memFirstName = $memFirstName;

        return $this;
    }

    /**
     * Get the value of memLastName
     */ 
    public function getMemLastName()
    {
        return $this->memLastName;
    }

    /**
     * Set the value of memLastName
     *
     * @return  self
     */ 
    public function setMemLastName($memLastName)
    {
        $this->memLastName = $memLastName;

        return $this;
    }

    /**
     * Get the value of memNickName
     */ 
    public function getMemNickName()
    {
        return $this->memNickName;
    }

    /**
     * Set the value of memNickName
     *
     * @return  self
     */ 
    public function setMemNickName($memNickName)
    {
        $this->memNickName = $memNickName;

        return $this;
    }

    /**
     * Get the value of memPw
     */ 
    public function getMemPw()
    {
        return $this->memPw;
    }

    /**
     * Set the value of memPw
     *
     * @return  self
     */ 
    public function setMemPw($memPw)
    {
        $this->memPw = $memPw;

        return $this;
    }

    /**
     * Get the value of memBirth
     */ 
    public function getMemBirth()
    {
        return $this->memBirth;
    }

    /**
     * Set the value of memBirth
     *
     * @return  self
     */ 
    public function setMemBirth($memBirth)
    {
        $this->memBirth = $memBirth;

        return $this;
    }

    /**
     * Get the value of memAddr
     */ 
    public function getMemAddr()
    {
        return $this->memAddr;
    }

    /**
     * Set the value of memAddr
     *
     * @return  self
     */ 
    public function setMemAddr($memAddr)
    {
        $this->memAddr = $memAddr;

        return $this;
    }

    /**
     * Get the value of memAgree
     */ 
    public function getMemAgree()
    {
        return $this->memAgree;
    }

    /**
     * Set the value of memAgree
     *
     * @return  self
     */ 
    public function setMemAgree($memAgree)
    {
        $this->memAgree = $memAgree;

        return $this;
    }
}
?>