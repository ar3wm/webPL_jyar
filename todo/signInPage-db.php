<?php

function getUser_by_username($username)
{
	global $db;
	
	// echo "in getTaskInfo_by_id " . $id ;
	
	$query = "SELECT * FROM users where username = :username";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	
	// fetchAll() returns an array for all of the rows in the result set
	// fetch() return a row
	$results = $statement->fetch();
	
	// closes the cursor and frees the connection to the server so other SQL statements may be issued
    $statement->closecursor();
    // echo implode($results) . "<br/> "; //view user and password
    if($results == NULL) {
        return false;
    }
	return true;
	// return $results;
}

function checkPasswordToUser($username, $password)
{
    // echo "entered checkPasswordToUser function";
	global $db;
	
	// echo "in getTaskInfo_by_id " . $id ;
	
	$query = "SELECT password FROM users where username = :username";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	
    $results = $statement->fetch();

    // $hash_results = password_hash($results[0], PASSWORD_DEFAULT);
    // echo $hash_results . "<br/>";
    // echo $password;
    $statement->closecursor();
    
    if($results[0] != $password) {
        return false;
    }
	return true;
	// return $results;
}

function newUserSignUp($username, $password) {
    global $db;

    $query = "SELECT username FROM users where username = :username";
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->execute();
	$results = $statement->fetch();
    $statement->closecursor();
    
    //if username doesn't already exist/is not already in use
    if($results == '') {
        //insert into table
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
	
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();

        return "new user";
    }
    return "user found";
}

?>