<?php 
	session_start();
  /* untuk mengambil skrip header dan menu*/
    include 'template/header.php';
    include 'template/menu.php';
    /* ====================== */
 
	class Komik {
		public $buku;
		public $next;
		
		function __construct($buku){
			$this->buku = $buku;
			$this->next = null;
		}
	}
	
	class linkedList{
		public $head;
		function __construct(){
			$this->head = null;
		}
		
		public function insert($buku){
			$link = new Komik($buku);
			$link->next = $this->head;
			$this->head = &$link;
			
		}
	}
	
	$data =  new  linkedList();
	$data->insert('Detective Conan');
	$data->insert('Black Clover');
	$data->insert('One Piece');
	
	echo $data->head->buku."<br>";
	echo $data->head->next->buku."<br>";
	echo $data->head->next->next->buku;
	
    /* untuk mengabil skrip footer */
    include 'template/footer.php';
    /* ===================== */
?>
