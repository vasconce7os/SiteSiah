
<ul>
<?php
foreach ($data as $key => $menu1)
{
	?>
	
	<li>
		<?php 
		$class = null;
		if (isset($menu1['child']))
		{
			$class = ' class="hasSub"';
		}
		?>
		<a href="<?php echo($this-> request-> bases . $menu1['url']); ?>"<?php echo ($class); ?> >
			<?php 
			echo($menu1['label'])
			?>
		</a>
		
		<?php
		if (isset($menu1['child']) && is_array($menu1['child'])) 
		{
			?>
			
			<ul  class="sub">
				<?php 
				foreach ($menu1['child'] as $key2 => $menu2)
				{
				?>
				
					<li>
						<a href="<?php echo($this-> request-> bases . $menu2['url']); ?>" >
							<?php 
							echo($menu2['label']);
							?>
						</a>
						
						<?php 
						
						if (isset($menu2['child']) && is_array($menu2['child'])) 
						{
							?>
							
							<ul  class="sub">
								<?php 
								foreach ($menu2['child'] as $key3 => $menu3)
								{
								?>
								
									<li>
										<a href="<?php echo($this-> request-> bases . $menu3['url']); ?>" >
											<?php 
											echo($menu3['label']);
											?>
										</a>
									</li>
									
								<?php	
								}
								?>
							</ul>
							
							<?php
						} 
						/* */
						?>
						
					</li>
					
				<?php	
				}
				?>
			</ul>
			
			<?php
		} 
		?>
		
	</li>
	<?php 
}

?>

</ul>