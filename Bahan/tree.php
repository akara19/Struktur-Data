<?php 
	session_start();
  /* untuk mengambil skrip header dan menu*/
    include 'template/header.php';
    include 'template/menu.php';
    /* ====================== */
	
	$arrData = [
		// Business
		['id' => 1, 'name' => 'Business', 'parent_id' => 0],
		['id' => 5, 'name' => 'Books and magazines', 'parent_id' => 1],
		['id' => 6, 'name' => 'Electronics and telecom', 'parent_id' => 1],

		// Computers
		['id' => 2, 'name' => 'Computers', 'parent_id' => 0],

		// Health
		['id' => 3, 'name' => 'Health', 'parent_id' => 0],
		['id' => 7, 'name' => 'Addictions', 'parent_id' => 3],
		['id' => 8, 'name' => 'Dentistry', 'parent_id' => 3],
		['id' => 9, 'name' => 'Vision Care', 'parent_id' => 3],

		// Sports
		['id' => 4, 'name' => 'Sports', 'parent_id' => 0],
		['id' => 10, 'name' => 'Winter Sports', 'parent_id' => 4],
		['id' => 11, 'name' => 'Ice skating', 'parent_id' => 10],
		['id' => 12, 'name' => 'Sledding', 'parent_id' => 10],
	];
	
	
	function buildTree(Array $data, $parent = 0) {
		$tree = array();
		foreach ($data as $d) {
			if ($d['parent_id'] == $parent) {
				$children = buildTree($data, $d['id']);
				// set a trivial key
				if (!empty($children)) {
					$d['_children'] = $children;
				}
				$tree[] = $d;
			}
		}
		return $tree;
	}	
	
	
	function printTree($tree, $r = 0, $p = null) {
    foreach ($tree as $i => $t) {
        $dash = ($t['parent_id'] == 0) ? '' : str_repeat('-', $r) .' ';
        printf("\t<option value='%d'>%s%s</option>\n", $t['id'], $dash, $t['name']);
       
        if (isset($t['_children'])) {
            printTree($t['_children'], ++$r, $t['parent_id']);
            --$r;
        }
		}
	}
	
	$tree = buildTree($arrData);
	
	print("<ul>");
	printTree($tree);
	print("</ul>"); 
	
    /* untuk mengabil skrip footer */
    include 'template/footer.php';
    /* ===================== */
?>
