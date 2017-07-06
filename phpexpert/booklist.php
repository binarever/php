<?php
	$dbConn=new mysqli('localhost','root','','bookclub');

	$booksPerPage=10;
	$page=(isset($_GET['page'])?$_GET['page']:1);

	$bookList=new BookList($dbConn);
	$bookPage=new Page($bookList,$page,$booksPerPage);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Club List</title>
</head>
<body>
<p>
	Showing books
	<?php
		printf('%d-%d of %d',$page->getFirstIndex(),$page->getLastIndex(),count($bookList));
	?>
</p>
<table>
	<thead>
		<th>Title</th>
		<th>Author</th>
		<th>Publisher</th>
	</thead>
	<tbody>
		<?php
			foreach($bookPage as $key=>$book){
				printf('<tr><td>%s</td>%s</td><td>%s</td></tr>\n',$book->title,$book->authors,$book->publisher);
			}
		?>
	</tbody>
</table>
<ul class="pages">
	<?php
		$totalPages=ceil(count($bookList)/$booksPerPage);
		if($page>1)
			print_r('<li><a href="?page=%d">Prev</li>\n',$page-1);
		for ($i=1;$i<=$totalPages;$i++){
			if($i==$page)
				print_r('<li>%d</li>\n',$i);
			else
				print_r('<li><a href="?page=%d">%d</li>\n',$i,$i);
		}
		if($page<$totalPages)
			print_r('<li><a href="?page=%d">Next</li>',$page+1);
	?>
</ul>
</body>
</html>