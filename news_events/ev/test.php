﻿<?php
require_once($_SERVER['DOCUMENT_ROOT'].'templates/_functions.php');

//Change page name here:
$PageName = 'Events';

require_once($_SERVER['DOCUMENT_ROOT'].'templates/_header.php');
?>

		<div id="Content">
<!-- ------------------------------------------- Content starts here ------------------------------------------------- -->
		
			<h1><?php echo "$PageName";?></h1>
			
			<?php
			//Connect to the database
			require_once ('../../../con_test.php');
			
			if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
				$news_id = intval($_GET['id']);
				
				//Retrieve the release information
				$q = "SELECT title, text, DATE_FORMAT(date, '%M %d, %Y') AS dr, resources, first_name, surname FROM news_items, users WHERE category='events' AND news_items.item_id=$news_id AND news_items.user_id=users.user_id";		
				$r = @mysqli_query ($dbc, $q);
				
				if (mysqli_num_rows($r) === 1) { //Valid id for one item
					//Get the item information
					$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
					
					//Formating the information
					echo '<h2>' . $row['title'] . '</h2>' . "\n\t\t\t";
					echo '<h6>' . $row['dr'] . '&nbsp; | &nbsp;from: ' . $row['first_name']. ' ' . $row['surname']. '</h6><br/>' . "\n\t\t\t";
					echo '<div class="news_article">' . $row['text'] . "</div>\n\t\t\t";
					if ($row['resources'] != '') {
						echo '<p><em>Other resources:</em> ' . $row['resources']. '</p><br/>' . "\n\t\t\t";
					}
					echo '<br/><p><a href="../events">>> Back to Events</a></p>';
				}
				else { //Not valid item id
					echo '<p>Sorry, this page doesn\'t exist.</p>';
				}
				
			}
			else {
				//Retrieve releases information summary
				$q = "SELECT item_id, title, summary, DATE_FORMAT(date, '%M %d, %Y') AS dr FROM news_items WHERE category='events' ORDER BY date DESC";
				$r = @mysqli_query ($dbc, $q);
				
				//Count the number of the rows
				$num = mysqli_num_rows($r);
				echo '<br/>';
				
				if ($num > 0) { //everything went ok, display results
					
					//Fetch and print all releases:
					while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
						echo '<a href="test.php?id=' . $row['item_id'] . '">'.$row['title'].'</a><br/><h6>'
							. $row['dr'] . '</h6>
							<p>' . $row['summary'] . '</p><br/>';
					}
					mysqli_free_result ($r); //Free up the resources
				}
				else { //if it didnt run ok
					echo '<p>There are currently no events.</p>';
				} 
			}
			
			mysqli_close($dbc);
			?>
					
<!-- ------------------------------------------- Content ends here ------------------------------------------------- -->
		</div>	
<?php require_once($_SERVER['DOCUMENT_ROOT'].'templates/_footer.php');?>