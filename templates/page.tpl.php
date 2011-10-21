<?php global $base_path; ?>
<div id="page">

  <?php
  /**
   * HTML5 gives a bunch of new elements we can use in the header,
   * for starters we can wrap the whole thing in <header>, use the
   * WAI ARIA role "banner", and group headings with <hgroup>.
   */
  ?>
  <header id="header">

	<div class="form">
		<form action="" id="searchform" method="get">
            		<input type="submit" value="Search" id="searchsubmit" name="submit" class="submit button headlines">
            		<input type="text" placeholder="Search the Revolution" id="s" name="s" class="search field">
        	</form>
	</div>

	<h2><a id="logo" href="" title="Occupy Philadelphia">Occupy Philadelphia</a></h2>
    	<strong class="headlines">We are the 99%. Join us! City Hall - 24/7 - Until the job is done!</strong>
    
	<?php
	/**
	* Lets imagine a perfect world where Main menu and Secondary menu are
	* replaced by Menu Block module in core, so we just need some regions.
	* Notice I'm not going to wrap these in any markup, what region.tpl.php
	* spits out right now is just fine for styling purposes. We'll add
	* semantics at the block level.
	*/
	?>
	<?php print render($page['menu_bar']); ?>

  </header>

  <?php	if($is_front): ?>
  <section class="flex-container">
	<img src="<?= $base_path.path_to_theme(); ?>/images/marchpic-949x360.png"/>
	<div class="flex-caption">
		<h2>This is what democracy looks like.</h2>
		<div class="slide-excerpt">
		<p>Occupy Philly has taken to the streets in solidarity with Occupy Wall St. to take back the country for the people.</p>
		</div>
	</div>
  </section>
  <?php endif; ?>
  <?php
  /**
   * The wrapper <div> is for styling only, no need for a semantic element here,
   * remember <div> lost all its semantics in HTML5.
   */
  ?>
  <div>

    <?php
    /**
     * Here we use <section> to branch the outline to create a new sectioned
     * content area for our main content. We can apply the WAI ARIA role
     * "main".
     */
    ?>  
    <section id="content" role="main">

      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 id="page-title" class="headlines"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs = render($tabs)): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>

      <?php if ($action_links = render($action_links)): ?>
        <ul class="action-links"><?php print $action_links; ?></ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

    </section>

    <?php if ($sidebar_second = render($page['sidebar_second'])): print $sidebar_second; endif; ?>

  </div>

  <?php
  /**
   * Much like the header we can add semantics to our page footer using the
   * new <footer> element and the WAI ARIA role "contetinfo" which fits
   * perfectly with what most footers contain - information about the site
   * such as copywrite notices and the company name. Using footer has nothing
   * to do with page layout (that its positioned at the "footer" of the page),
   * its all about the content of the element, not where it is.
   */
  ?>
  <?php if ($footer = render($page['footer'])): ?>
    <footer id="footer" role="contentinfo">
	<div id="footer-sidebar">
		<div class="sidebar">
			<a href="" id="footer-logo">Occupy Philly</a>
			<p>&copy; 2011 Occupy Philly&mdash;Please feel free to distribute any of the original content on this site across the internet.</p>
		</div>	
		<?php print render($page['menu_bar']); ?>
	</div>
	<div>
		<?php print $footer; ?>
	</div>
</footer>
  <?php endif; ?>

</div>
