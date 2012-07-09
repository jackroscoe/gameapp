<div class="island p20 no-bottom">
	<h1>Game Management</h1>
	<p>Below is a list of games currently in the system. You can add new games using the button below. If you want to manage the missions for a game you can click on it to view more information.</p>
	<p class="italic">NOTE: DELETION OF GAMES IS NOT CURRENTLY AVAILABLE</p>
	<a href="#" class="link">ADD LINK HERE</a>
	<?php //$session->check('Auth.User.id') ?>
	<div class="manager">
		<div class="island p20 game-column col-190">
			<h2>Games</h2>
			<ul class="games">
				<?php foreach($games as $game) { ?>
					<li><?php
						echo $this->Html->link($game['Game']['title'], '/games/view/' . $game['Game']['id'] . '/' . str_replace(' ', '-', strtolower($game['Game']['title'])), array('class' => 'fetch-guides listing', 'data-id' => $game['Game']['id'])); ?>
					</li><?php
				} ?>
			</ul>
		</div>
		<div class="island p20 game-column guide-column col-189">
			<h2>My Guides</h2>
			<div class="add-guide hidden mb20">
				<input type="text" name="title" />
				<?php echo $this->Html->link('Add new guide', '/guides/add/', array('class' => 'add right', 'data-type' => 'guide', 'data-prev-type' => 'game')); ?>
			</div>
			<p class="no-game">No game selected.</p>
			<ul class="guides">
			</ul>
		</div>
		<div class="island p20 game-column section-column col-188">
			<h2>Sections</h2>
			<div class="add-section hidden mb20">
				<input type="text" name="title" />
				<?php echo $this->Html->link('Add new section', '/sections/add/', array('class' => 'add right', 'data-type' => 'section', 'data-prev-type' => 'guide')); ?>
			</div>
			<p class="no-guide">No guide selected.</p>
			<ul class="sections">
			</ul>
		</div>
		<div class="island p20 game-column mission-column col-188">
			<h2>Missions</h2>
			<div class="add-mission hidden mb20">
				<input type="text" name="title" />
				<?php echo $this->Html->link('Add new mission', '/missions/add/', array('class' => 'add right', 'data-type' => 'mission', 'data-prev-type' => 'section')); ?>
			</div>
			<p class="no-section">No mission selected.</p>
			<ul class="missions">
			</ul>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		function resizeColumns() {
			// Wait until ajax request has fully loaded
			setTimeout(function() {
				// Resize all columns to fit the max height
				var maxHeight = 0;
				$("div.game-column ul").each(function() {
					var el = $(this);
					if(el.height() > maxHeight) {
						maxHeight = el.height();
					}
				});

				// Add combined height of search box and headings to get total column height
				maxHeight += 104;
				$("div.game-column").each(function() {
					$(this).animate({
						height: maxHeight
					}, 400);
				});
			}, 400);	
		}
		
		$("div.game-column li a.listing:not(.open-mission)").live("click", function() {
			var el = $(this);
			var newType;
			var prevType;
			
			// Determine what was clicked, and what we need to load; in order to configure the Ajax request below
			if(el.parent().parent().hasClass('games')) {
				prevType = 'game';
				newType = 'guide';
				
				// Hide or display relatively 'No 'X' selected messages'
				$("p.no-game").animate({optacity: 0}, 140).css({'display' : 'none'});
				$("p.no-guide").css({'display' : 'block'}).animate({opacity: 1}, 140);
				$("p.no-section").css({'display' : 'block'}).animate({opacity: 1}, 140);
				
				// Slide up unecessary 'add' input fields
				$("div.add-section").slideUp();
				$("div.add-mission").slideUp();
				
				$("ul.sections li").animate({
					opacity: 0
				}, 140);
				$("ul.missions li").animate({
					opacity: 0
				}, 140);
			} else if (el.parent().parent().hasClass('guides')) {
				prevType = 'guide';
				newType = 'section';
				
				// Hide or display relatively 'No 'X' selected messages'
				$("p.no-guide").animate({optacity: 0}, 140).css({'display' : 'none'});
				$("p.no-section").css({'display' : 'block'}).animate({opacity: 1}, 140);
				
				// Slide up unecessary 'add' input fields
				$("div.add-mission").slideUp();
				
				$("ul.missions li").animate({
					opacity: 0
				}, 140);
				$("p.no-game").animate({opacity: 0}, 140);
			} else if (el.parent().parent().hasClass('sections')) {
				prevType = 'section';
				newType = 'mission';
				
				$("p.no-section").animate({optacity: 0}, 140).css({'display' : 'none'});
			}
			
			$("ul." + newType + "s li").animate({
						opacity: 0
					}, 140);
			
			$(".add-" + newType).css({'display' : 'block'}).animate({opacity: 1}, 140);

			var dataId = el.attr('data-id');
			$.ajax({
				url: '/gameapp/' + newType + 's/my' + newType + 's/' + dataId,
				success: function(html){
				// Replace current content with our AJAX response
					$("ul." + newType + "s").replaceWith(html);
					$("ul." + newType + "s li").animate({
						opacity: 1
					}, 140);
				} 
			});
			
			$("ul." + prevType + "s a").removeClass('selected');
			el.addClass('selected');
			
			$("a[data-type=" + newType + "]").attr('href', '/gameapp/' + newType + 's/add/' + dataId);
			
			resizeColumns();

			return false;
		});
		
		$("a.open-mission").live("click", function() {
			var el = $(this);
			
			$("ul.missionss a").removeClass('selected');
			el.addClass('selected');
			
			$.ajax({
				url: el.attr('href'),
				success: function(html) {
					// Insert Mission view frame above management table
					$(html).insertAfter($(".manager"));
					$(".mission-view").slideDown();
				}
			});
			
			return false;
		});
		
		$("a.delete").live("click", function() {
			var el = $(this);
			var id = el.prev().attr('data-parent-id');
			
			// Determine what was clicked, and what we need to load; in order to configure the Ajax request below
			if (el.parent().parent().hasClass('guides')) {
				prevType = 'game';
				newType = 'guide';
			} else if (el.parent().parent().hasClass('sections')) {
				prevType = 'guide';
				newType = 'section';
			} else if (el.parent().parent().hasClass('missions')) {
				prevType = 'section';
				newType = 'mission';
			}
			
			$.ajax({
				url: el.attr('href'),
				success: function(html){
				// Replace current guide list with new list
					$("ul." + prevType + "s a[data-id=" + id + "]").click();
				} 
			});
			
			return false;
		});
		
		$("a.add").click(function() {
			var el = $(this);
			var url = el.attr('href');
			var title = el.prev().val();
			var data = url.split('/');
			var id = data[4];
			var type = el.attr("data-type");
			var prevType = el.attr("data-prev-type");
			
			$.ajax({
				url: url + '/' + title,
				success: function(html) {
					// Replace current guide list with new list
					$("ul." + prevType + "s a[data-id=" + id + "]").click();
				}
			});
			
			return false;
		});
		
		resizeColumns();
	});
</script>