<?php
class Post extends Model{
	
	function getPost($pID){
		
		$sql =  'SELECT t1.pID as pID, t1.title as title, t1.content as content, t1.date as date, t1.uID as uID, t1.categoryID as categoryID, t2.first_name as first_name, t2.last_name as last_name, t3.name as name 
                  FROM posts t1 
                  INNER JOIN users t2 ON t1.uID = t2.uID
                  INNER JOIN categories t3 ON t1.categoryID = t3.categoryID 
                  WHERE pID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}
		
		$sql =  'SELECT t1.pID, t1.title, t1.content, t1.date, t1.uID, t1.categoryID, t2.first_name, t2.last_name, t3.name
                  FROM posts t1
                  INNER JOIN users t2 ON t1.uID = t2.uID
                  INNER JOIN categories t3 ON t1.categoryID = t3.categoryID';
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addPost($data){
		
		$sql='INSERT INTO posts (title,content,date,categoryID) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;
		
	}

	public function updatePost($data){
        $sql = 'UPDATE posts SET title = ?, content = ?, date = ?, categoryID = ? where pID = ?';
        $this->db->execute($sql, $data);
        return 'Update complete.';
    }
	
}