<?php
class Book extends CI_Model{
	var $title;
	var $author;
	var $publisher;
	var $publishDate;
	var $location;
	var $bookCount;
	
	function setBook($book){
		$this->title = isset($book['title']) == null ? "" : $book['title'];
		$this->author = isset($book['author']) == null ? "" : $book['author'];
		$this->publisher = isset($book['publisher']) == null ? "" : $book['publisher'];
		$this->publishDate = isset($book['publishDate']) == null ? "" : $book['publishDate'];
		$this->location = isset($book['location']) == null ? "" : $book['location'];
		$this->bookCount = isset($book['bookCount']) == null ? "" : $book['bookCount'];
	}
}
?>