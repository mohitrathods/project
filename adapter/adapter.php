<?php 
class adapter { //adapter named connect
    
    
    // all the configuration AND CONNECTION
    public $config = [
        'host' => 'localhost',
        'username' => 'root',
        'password'=> '',
        'databasename' => 'project'
    ];

        public $connect = null;
        public function connect() {
            if($this->connect != null){
                return $this->connect;
            }
            $connect = mysqli_connect(
                $this->config['host'],
                $this->config['username'],
                $this->config['password'],
                $this->config['databasename']
            );
            // $this->connect = $connect; or direct return check if this works or not
            return $connect;
            
        }


        // PUBLIC function fetch all QUERY and pass $query parameter in it
        public function fetchAll($query)
	    {
            $connect = $this->connect();//call the connect function here and store in connect var
            $result = mysqli_query($connect,$query);
            /*
                Object oriented style:
                $mysqli -> query(query, resultmode)
                Procedural style:
                mysqli_query(connection, query, resultmode) resultmode is optional
            */


            if($result->num_rows > 0 ){
                return $result->fetch_all(MYSQLI_ASSOC); 
                //returns all data from here defined once here can be used anywhere like in product, category anywhere
                //to access the data
            }
                return $result;
	    }


        //MAKE VARIOUS FUNCTIONS FOR VARIOUS PURPOSES

        //2 : FETCHROW
        public function fetchRow($query) {
                $connect = $this->connect(); //call connect function for connection
                $result = mysqli_query($connect,$query);

                if($result->num_rows > 0){
                    return $result->fetch_assoc();
                }
                return false;
        }


        //3 : fetch number
        public function fetchNumber($query){
            $connect = $this->connect();//call the connect fun store in connect variable
            $result = mysqli_query($connect,$query);

            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            }
            return false;
        }

        //4 : INSERT
        public function insertFun($query){
            $connect = $this->connect();//call the connect function
            $result = mysqli_query($connect,$query);


            if ($result){
                return $connect->insert_id; //this insert_id is set in input or in insert file
            }
                //else
                return false;
        }

        //5 : UPDATE
        public function updateFun($query){
            $connect = $this->connect();
            $result = mysqli_query($connect, $query);
            if($result){
                return true;
            }
            //else
            return false;
        }

        //5 : DELETE
        public function deleteFun($query) {
            $connect = $this->connect();
            $result = mysqli_query($connect,$query);

            if($result){
                return true;

            }

            else {
                return false;
            }
        }


}

?>