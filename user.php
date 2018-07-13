<?php
	/**
	 * User class
	 */
	require_once 'connection.php';

	class User{
		private $id;
    private $name;
    private $fname;
    private $lname;
    private $username;
    private $email;
    private $password;
    private $type;

		function __construct()
		{
        $this->connect = new Connection();
		}

		/* getters */
    
    public function getName()
    {
        return $this->name;
    }    

    public function getId()
    {
        return $this->id;
    }
    public function getFname()
    {
        return $this->name;
    }

    public function getLname()
    {
        return $this->address;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getType()
    {
        return $this->type;
    }


    /* setters */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    


		public function AddUser(){
			// echo 'email: '.$this->email.' username:'.$this->username;
			// die();
      $sql = "INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `email`, `password`, `type`) 
      				VALUES ('', '$this->fname', '$this->lname', '$this->username', '$this->email', '$this->password', 'User');";
      return $this->connect->Iud($sql);
    }

    function selectUser(){
	    $query="SELECT * FROM user where Username='$this->username'";
	    return $this->connect->Iud($query);
		}

	  public function Login(){
      return $this->connect->getData("SELECT * FROM user 
	      														 WHERE username='$this->username' 
	      														 AND password='$this->password'");
      
    }

	}