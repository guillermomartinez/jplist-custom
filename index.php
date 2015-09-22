<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/normalize.css" />

	<link rel="stylesheet" href="css/styles.min.css?v=9" />
	<link rel="stylesheet" type="text/css" href="https://jplist.com/content/css/jplist.demo-pages.min.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- jPList core -->		
	<!-- <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/jplist/5.1.35/jplist.min.css"> -->
	<!-- <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jplist/5.1.35/jplist.min.js"></script> -->	
	<!-- <link href="core/jplist.core.min.css" rel="stylesheet" type="text/css" />
	<script src="core/jplist.core.min.js"></script>	

	<link href="css/jplist.checkbox-dropdown.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jplist.checkbox-dropdown.min.js"></script>	

	<link href="css/jplist.pagination-bundle.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jplist.pagination-bundle.min.js"></script>	

	<link href="css/jplist.textbox-filter.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jplist.textbox-filter.min.js"></script>	
	
	<script src="js/jplist.sort-bundle.min.js"></script>	 -->
	<link rel="stylesheet" type="text/css" href="css/jplist.custom.min.css">
	<script type="text/javascript" src="js/jplist.custom.min.js"></script>
	<link href="css/jplist.filter-toggle-bundle.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jplist.filter-dropdown-bundle.min.js"></script>	

	<script>
		$('document').ready(function(){
			$('#demo').jplist({				
				itemsBox: '.list' 
				,itemPath: '.list-item' 
				,panelPath: '.jplist-panel'	
			});
		});
	</script>
	<style type="text/css">
		body{
			margin: 0 auto;
			padding: 0;
			width: 80%;
		}
	</style>
</head>
<body>
	<!-- demo -->
	<div id="demo" class="box jplist">

		<!-- ios button: show/hide panel -->
		<div class="jplist-ios-button">
			<i class="fa fa-sort"></i>
			jPList Actions
		</div>

		<!-- panel -->
		<div class="jplist-panel box panel-top">						
			<div class="jplist-ios-button">
				<i class="fa fa-sort"></i>
				jPList Actions
			</div>
			<div
				class="jplist-drop-down"
				data-control-type="items-per-page-drop-down"
				data-control-name="paging"
				data-control-action="paging">
				<ul>
					<li><span data-number="5"> 5 por pagina </span></li>
					<li><span data-number="15" data-default="true"> 15 por pagina </span></li>
					<li><span data-number="all"> ver todos </span></li>
				</ul>
			</div>
			<div
				class="jplist-drop-down"
				data-control-type="sort-drop-down"
				data-control-name="sort"
				data-control-action="sort"
				data-datetime-format="{month}/{day}/{year}">
				<ul>
					<li><span data-path="default">Ordenar : </span></li>
					<li><span data-path=".price" data-order="asc" data-type="number">Precio asc</span></li>
					<li><span data-path=".price" data-order="desc" data-type="number">Precio desc</span></li>
					<li><span data-path=".star" data-order="asc" data-type="number">Estrellas asc</span></li>
					<li><span data-path=".star" data-order="desc" data-type="number">Estrellas desc</span></li>
				</ul>
			</div>					
	<!-- checkbox dropdown -->
		<div 
			class="jplist-checkbox-dropdown"
			data-control-type="checkbox-dropdown" 
			data-control-name="category-checkbox-dropdown" 
			data-control-action="filter"
			data-no-selected-text="Filter by category:"
			data-one-item-text="Filtered by {selected}"
			data-many-items-text="{num} selected">

			<ul>
				<li>
					<input data-path=".architecture" id="architecture" type="checkbox"/>
					<label for="architecture">Architecture</label>
				</li>

				<li>
					<input data-path=".christmas" id="christmas" type="checkbox"/>
					<label for="christmas">Christmas</label>
				</li>

				<li>
					<input data-path=".nature" id="nature" type="checkbox"/>
					<label for="nature">Nature</label>
				</li>

				<li>
					<input data-path=".lifestyle" id="lifestyle" type="checkbox"/>
					<label for="lifestyle">Lifestyle</label>
				</li>
			</ul>
		</div>	
		<div class="text-filter-box">
						<!--[if lt IE 10]>
						<div class="jplist-label">Filtrar por Nombre:</div>
						<![endif]-->
						<input
							data-path="default"
							type="text"
							value=""
							placeholder="Filtrar por Nombre"
							data-control-type="textbox"
							data-control-name="title-filter"
							data-control-action="filter"
							/>
						<select
							class="jplist-select"
							data-control-type="filter-select"
							data-control-name="star-filter"
							data-control-action="filter">
							<option data-path="default">Filtrar por estrellas:</option>
							<option data-path=".architecture">architecture</option>
						</select>
					</div>

		<!-- pagination control -->
		<div
			class="jplist-label"
			data-type="Pagina {current} de {pages}"
			data-control-type="pagination-info"
			data-control-name="paging"
			data-control-action="paging">
		</div>
		<div 
		class="jplist-pagination" 
		data-control-type="pagination" 
		data-control-name="paging" 
		data-control-action="paging"
		data-items-per-page="5">
		</div>
<div class="jplist-group" data-control-type="checkbox-group-filter" data-control-action="filter" data-control-name="themes">
				   <input data-path=".architecture" id="architecture" type="checkbox" class="jplist-selected"> 			   
				   <label for="architecture">Architecture</label>				   
				   <input data-path=".christmas" id="christmas" type="checkbox" class="jplist-selected"> 					  
				   <label for="christmas">Christmas</label>				   
				   <input data-path=".nature" id="nature" type="checkbox"> 				   
				   <label for="nature">Nature</label>				   
				   <input data-path=".lifestyle" id="lifestyle" type="checkbox" class="jplist-selected"> 				   
				   <label for="lifestyle">Lifestyle</label>
				</div>
</div>

<!-- data -->   
<div class="list box text-shadow">					
	<?php 
	$list = array(
		"architecture",
		"christmas",
		"nature",
		"lifestyle",
		);
	for ($i=1; $i <= 50 ; $i++) { 
		$key = (rand(1,4)-1);
		// echo $key.'<br>';
		$classname = $list[$key];
		?>
		<!-- item <?php echo $i;?> -->
		<div class="list-item box" id="<?php echo $i;?>">					
		<div class="img">
			<img src="calendar-1.jpg" alt="" title=""/>
		</div>
		<div class="block">
			<p class="date">03/18/2012</p>
			<p class="title"><?php echo ucfirst($classname);?></p>
			<p class="desc"><?php echo ucfirst($classname);?> is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>
			<p class="theme">
				<span class="<?php echo $classname;?>"><?php echo ucfirst($classname);?></span>
				<span class="group2">Group 2</span>
			</p>
			<p class="like">25 Likes</p>
		</div>
	</div>
		<?php 
	}
	?>	

</div>	

<div class="box jplist-no-results text-shadow align-center">
	<p>No results found</p>
</div>

<!-- ios button: show/hide panel -->
<div class="jplist-ios-button">
	<i class="fa fa-sort"></i>
	jPList Actions
</div>

</div>
</body>
</html>