
<!--team-->
<section class="agile-team" id="team">
<h4 class="header">Электронные книги</h4>
	<div class="line"></div>
	<div class="container">
				<div class="wthree_team_agileinfo">
				<?php 
                require_once('config/connection.php');
                $sql = "SELECT *  FROM books;";
                $result =  mysqli_query($conn, $sql);
                while($row =  mysqli_fetch_assoc($result))
                {
             
                ?>
                <div class="col-sm-3 col-xs-6 wthree_team_grid_left">
					<figure class="effect-julia">
						<img src="assets/img/books/<?=$row['image'];?>" alt=" " class="img-responsive" /> 
						<div class="w3l_banner_figure">
							<p><?=$row['name'];?></p>
							<p>
								<a target="_blank" href="assets/file/books/<?=$row['src'];?>" class="social-button twitter"><i class="fa fa-folder-open"></i>Открыть </a>
								
								
							</p> 
							
						</div> 			
					</figure>
				</div>	
				<?php 
                   }
                ?>
				<div class="clearfix"> </div>
			</div>
		</div>
</section>