{assign var="mod_tmpl_url" value=$mod_vars.templates_url}
{assign var="mod_tmpl_dir" value=$mod_vars.templates_dir}

<!-- ZSlider client styles -->
<link rel="stylesheet" type="text/css" href="{$mod_tmpl_url}/css/nivo-slider.css">
<link rel="stylesheet" type="text/css" href="{$mod_tmpl_url}/css/zslider.css">

<!-- ZSlider client modules -->
<script type="text/javascript" src="{$mod_tmpl_url}/js/jquery.nivo.slider.pack.js"></script>

{literal}
<script type="text/javascript">
	$(window).load(function() {
	    $('#zslider').nivoSlider({
	    	effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
		    slices: 15,                     // For slice animations
		    boxCols: 8,                     // For box animations
		    boxRows: 4,                     // For box animations
		    animSpeed: 500,                 // Slide transition speed
		    pauseTime: 5000,                // How long each slide will show
		    startSlide: 0,                  // Set starting Slide (0 index)
		    directionNav: false,             // Next & Prev navigation
		    controlNav: false,               // 1,2,3... navigation
		    controlNavThumbs: false,        // Use thumbnails for Control Nav
		    pauseOnHover: true,             // Stop animation while hovering
		    manualAdvance: false,           // Force manual transitions
		    prevText: '',               // Prev directionNav text
		    nextText: '',               // Next directionNav text
		    randomStart: false,             // Start on a random slide
		    beforeChange: function(){},     // Triggers before a slide transition
		    afterChange: function(){},      // Triggers after a slide transition
		    slideshowEnd: function(){},     // Triggers after all slides have been shown
		    lastSlide: function(){},        // Triggers when last slide is shown
		    afterLoad: function(){}         // Triggers when slider has loaded
	    });
	});
</script>
{/literal}


{if $slider|count > 0}
<div class="zslider-wrapper">
	<div id="zslider" class="nivoSlider">

	{foreach from=$slider item=slide}
	<a href="{$slide->link}">
		<div class="zslider-descr">{$slide->descr}</div>
		<img src="/uploads/{$slide->image}" data-thumb="/uploads/{$slide->image}" alt="{$slide->name}" title="" />
	</a>
	{/foreach}

	</div>
</div>

{/if}