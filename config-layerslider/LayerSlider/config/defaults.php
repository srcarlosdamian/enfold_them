<?php

$lsDefaults = array(

	'slider' => array(

		'createdWith' => array(
			'value' => '',
			'keys' => 'createdWith'
		),

		'sliderVersion' => array(
			'value' => '',
			'keys' => 'sliderVersion',
			'props' => array(
				'forceoutput' => true
			)
		),

		'status' => array(
			'value' => true,
			'name' => __('Status', 'LayerSlider'),
			'keys' => 'status',
			'desc' => __('Unpublished sliders will not be visible for your visitors until you re-enable this option. This also applies to scheduled sliders, thus leaving this option enabled is recommended in most cases.', 'LayerSlider'),
			'props' => array(
				'meta' => true
			)
		),

		'scheduleStart' => array(
			'value' => '',
			'name' => __('Schedule From', 'LayerSlider'),
			'keys' => 'schedule_start',
			'desc' => __('<ul>
	<li>Scheduled sliders will only be visible to your visitors between the time period you set here.</li>
	<li>We’re using international date and time format to avoid ambiguity.</li>
	<li>You can also use relative formats described <a href="http://php.net/manual/en/datetime.formats.relative.php" target="_blank">here</a>. For example: <br> <i>tomorrow noon</i>, <i>monday 9am</i> or <i>+1 month</i></li>
	<li>Clear the text field above and left it empty if you want to cancel the schedule.</li>
</ul>

<span>IMPORTANT:</span>
<ul>
	<li>You will still need to set the slider status as published,</li>
	<li>and insert the slider to the target page with one of the methods described in the <a href="https://layerslider.kreaturamedia.com/documentation/#publish-shortcode" target="_blank">documentation</a>.</li>
</ul>', 'LayerSlider'),
			'attrs' => array(
				'placeholder' => __('No schedule', 'LayerSlider')
			),
			'props' => array(
				'meta' => true
			)
		),


		'scheduleEnd' => array(
			'value' => '',
			'name' => __('Schedule Until', 'LayerSlider'),
			'keys' => 'schedule_end',
			'desc' => '',
			'attrs' => array(
				'placeholder' => __('No schedule', 'LayerSlider')
			),
			'props' => array(
				'meta' => true
			)
		),


		// ============= //
		// |   Layout  | //
		// ============= //


		// responsive | fullwidth | fullsize | fixedsize
		'type' => array(
			'value' => 'responsive',
			'name' => __('Slider type', 'LayerSlider'),
			'keys' => 'type',
			'desc' => '',
			'attrs' => array(
				'type' => 'hidden'
			)

		),

		// The width of a new slider.
		'width' => array(
			'value' => 1280,
			'name' => __('Canvas width', 'LayerSlider'),
			'keys' => 'width',
			'desc' => __('The width of the slider canvas in pixels.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'text',
				'placeholder' => 1280
			),
			'props' => array(
				'meta' => true
			)
		),

		// The height of a new slider.
		'height' => array(
			'value' => 720,
			'name' => __('Canvas height', 'LayerSlider'),
			'keys' => 'height',
			'desc' => __('The height of the slider canvas in pixels.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'text',
				'placeholder' => 720
			),
			'props' => array(
				'meta' => true
			)
		),


		// The maximum width that the slider can get in responsive mode.
		'maxWidth' => array(
			'value' => '',
			'name' => __('Max-width', 'LayerSlider'),
			'keys' => 'maxwidth',
			'desc' => __('The maximum width your slider can take in pixels when responsive mode is enabled.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'number',
				'min' => 0,
				'placeholder' => '100%'
			),
			'props' => array(
				'meta' => true
			)
		),


		// Turn on responsiveness under a given width of the slider.
		// Depends on: enabled fullWidth option. Defaults to: 0
		'responsiveUnder' => array(
			'value' => '',
			'name' => __('Responsive under', 'LayerSlider'),
			'keys' => array('responsiveunder', 'responsiveUnder'),
			'desc' => __('Turns on responsive mode in a full-width slider under the specified value in pixels. Can only be used with full-width mode.', 'LayerSlider'),
			'advanced' => true,
			'attrs' => array(
				'type' => 'number',
				'min' => 0,
				'placeholder' => __('Canvas width', 'LayerSlider')
			)
		),

		'layersContrainer' => array(
			'value' => '',
			'keys' => array('sublayercontainer', 'layersContainer')
		),


		'fullSizeMode' => array(
			'value' => 'normal',
			'name' => __('Mode', 'LayerSlider'),
			'keys' => 'fullSizeMode',
			'desc' => __('Select the sizing behavior of your full size sliders (e.g. hero scene).', 'LayerSlider'),
			'options' => array(
				'normal' => __('Normal', 'LayerSlider'),
				'hero' => __('Hero scene', 'LayerSlider'),
				'fitheight' => __('Fit to parent height', 'LayerSlider')
			),
			'attrs' => array(
				'min' => 0
			)
		),

		'allowFullscreen' => array(
			'value' => true,
			'name' => __('Allow fullscreen mode', 'LayerSlider'),
			'keys' => 'allowFullscreen',
			'desc' => __('Visitors can enter OS native full-screen mode when double clicking on the slider.', 'LayerSlider')
		),

		'maxRatio' => array(
			'value' => '',
			'name' => __('Maximum responsive ratio', 'LayerSlider'),
			'keys' => 'maxRatio',
			'desc' => __('The slider will not enlarge your layers above the target ratio. The value 1 will keep your layers in their initial size, without any upscaling.', 'LayerSlider'),
			'advanced' => true
		),

		'fitScreenWidth' => array(
			'value' => true,
			'name' => __('Fit to screen width', 'LayerSlider'),
			'keys' => 'fitScreenWidth',
			'desc' => __('If enabled, the slider will always have the same width as the viewport, even if a theme uses a boxed layout, unless you choose the “Fit to parent height” full size mode.', 'LayerSlider'),
			'advanced' => true
		),

		'preventSliderClip' => array(
			'value' => true,
			'name' => __('Prevent slider clipping', 'LayerSlider'),
			'keys' => 'preventSliderClip',
			'desc' => __('Ensures that the theme cannot clip parts of the slider when used in a boxed layout.', 'LayerSlider'),
			'advanced' => true
		),


		'insertMethod' => array(
			'value' => 'prependTo',
			'name' => __('Move the slider by', 'LayerSlider'),
			'keys' => 'insertMethod',
			'desc' => __('Move your slider to a different part of the page by providing a jQuery DOM manipulation method & selector for the target destination.', 'LayerSlider'),
			'options' => array(
				'prependTo' => 'prepending to',
				'appendTo' => 'appending to',
				'insertBefore' => 'inserting before',
				'insertAfter' => 'inserting after'
			)
		),

		'insertSelector' => array(
			'value' => '',
			'keys' => 'insertSelector',
			'attrs' => array(
				'placeholder' => 'Enter selector'
			)
		),

		'clipSlideTransition' => array(
			'value' => 'disabled',
			'name' => __('Clip slide transition', 'LayerSlider'),
			'keys' => 'clipSlideTransition',
			'desc' => __('Choose on which axis (if any) you want to clip the overflowing content (i.e. that breaks outside of the slider bounds).', 'LayerSlider'),
			'advanced' => true,
			'options' => array(
				'disabled' => __('Do not hide', 'LayerSlider'),
				'enabled' => __('Hide on both axis', 'LayerSlider'),
				'x' => __('X Axis', 'LayerSlider'),
				'y' => __('Y Axis', 'LayerSlider')
			)
		),


		// == COMPATIBILITY ==

		'responsiveness' => array(
			'value' => true,
			'keys' => 'responsive',
			'props' => array(
				'meta' => true,
				'output' => true
			)
		),
		'fullWidth' => array(
			'value' => false,
			'keys' => 'forceresponsive',
			'props' => array(
				'meta' => true,
				'output' => true
			)
		),

		// == END OF COMPATIBILITY ==

		'slideBGSize' => array(
			'value' => 'cover',
			'name' => __('Background size', 'LayerSlider'),
			'keys' => 'slideBGSize',
			'desc' => __('This will be used as a default on all slides, unless you choose to explicitly override it on a per slide basis.', 'LayerSlider'),
			'options' => array(
				'auto' => __('Auto', 'LayerSlider'),
				'cover' => __('Cover', 'LayerSlider'),
				'contain' => __('Contain', 'LayerSlider'),
				'100% 100%' => __('Stretch', 'LayerSlider')
			)
		),

		'slideBGPosition' => array(
			'value' => '50% 50%',
			'name' => __('Background position', 'LayerSlider'),
			'keys' => 'slideBGPosition',
			'desc' => __('This will be used as a default on all slides, unless you choose the explicitly override it on a per slide basis.', 'LayerSlider'),
			'options' => array(
				'0% 0%' => __('left top', 'LayerSlider'),
				'0% 50%' => __('left center', 'LayerSlider'),
				'0% 100%' => __('left bottom', 'LayerSlider'),
				'50% 0%' => __('center top', 'LayerSlider'),
				'50% 50%' => __('center center', 'LayerSlider'),
				'50% 100%' => __('center bottom', 'LayerSlider'),
				'100% 0%' => __('right top', 'LayerSlider'),
				'100% 50%' => __('right center', 'LayerSlider'),
				'100% 100%' => __('right bottom', 'LayerSlider')
			)
		),


		'parallaxSensitivity' => array(
			'value' => 10,
			'name' => __('Parallax sensitivity', 'LayerSlider'),
			'keys' => 'parallaxSensitivity',
			'desc' => __('Increase or decrease the sensitivity of parallax content when moving your mouse cursor or tilting your mobile device.', 'LayerSlider')
		),


		'parallaxCenterLayers' => array(
			'value' => 'center',
			'name' => __('Parallax center layers', 'LayerSlider'),
			'keys' => 'parallaxCenterLayers',
			'desc' => __('Choose a center point for parallax content where all layers will be aligned perfectly according to their original position.', 'LayerSlider'),
			'options' => array(
				'center' => __('At center of the viewport', 'LayerSlider'),
				'top' => __('At the top of the viewport', 'LayerSlider')
			)
		),

		'parallaxCenterDegree' => array(
			'value' => 40,
			'name' => __('Parallax center degree', 'LayerSlider'),
			'keys' => 'parallaxCenterDegree',
			'desc' => __('Provide a comfortable holding position (in degrees) for mobile devices, which should be the center point for parallax content where all layers should align perfectly.', 'LayerSlider')
		),

		'parallaxScrollReverse' => array(
			'value' => false,
			'name' => 'Reverse scroll direction',
			'keys' => 'parallaxScrollReverse',
			'desc' => __('Your parallax layers will move to the opposite direction when scrolling the page.', 'LayerSlider')
		),


		// ================= //
		// |    Mobile    | //
		// ================= //

		'optimizeForMobile' => array(
			'value' => true,
			'name' => __('Optimize for mobile', 'LayerSlider'),
			'keys' => 'optimizeForMobile',
			'advanced' => true,
			'desc' => __('Enable optimizations on mobile devices to avoid performance issues (e.g. fewer tiles in slide transitions, reducing performance-heavy effects with very similar results, etc).', 'LayerSlider')
		),


		// Hides the slider on mobile devices.
		// Defaults to: false
		'hideOnMobile' => array(
			'value' => false,
			'name' => __('Hide on mobile', 'LayerSlider'),
			'keys' => array('hideonmobile', 'hideOnMobile'),
			'desc' => __('Hides the slider on mobile devices, including tablets.', 'LayerSlider')
		),


		// Hides the slider under the given value of browser width in pixels.
		// Defaults to: 0
		'hideUnder' => array(
			'value' => '',
			'name' => __('Hide under', 'LayerSlider'),
			'keys' => array('hideunder', 'hideUnder'),
			'desc' => __('Hides the slider when the viewport width goes under the specified value.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'number',
				'min' => -1
			)
		),

		// Hides the slider over the given value of browser width in pixel.
		// Defaults to: 100000
		'hideOver' => array(
			'value' => '',
			'name' => __('Hide over', 'LayerSlider'),
			'keys' => array('hideover', 'hideOver'),
			'desc' => __('Hides the slider when the viewport becomes wider than the specified value.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'number',
				'min' => -1
			)
		),

		'slideOnSwipe' => array(
			'value' => true,
			'name' => __('Use slide effect when swiping', 'LayerSlider'),
			'keys' => 'slideOnSwipe',
			'desc' => __('Ignore selected slide transitions and use sliding effects only when users are changing slides with a swipe gesture on mobile devices.', 'LayerSlider')
		),

		// ================ //
		// |   Slideshow  | //
		// ================ //

		// Automatically start slideshow.
		'autoStart' => array(
			'value' => true,
			'name' => __('Auto-start slideshow', 'LayerSlider'),
			'keys' => array('autostart', 'autoStart'),
			'desc' => __('Slideshow will automatically start after page load.', 'LayerSlider')
		),

		'startInViewport' => array(
			'value' => true,
			'name' => __('Start only in viewport', 'LayerSlider'),
			'keys' => array('startinviewport', 'startInViewport'),
			'desc' => __('The slider will not start until it becomes visible.', 'LayerSlider')
		),

		'hashChange' => array(
			'value' => false,
			'name' => __('Change URL hash', 'LayerSlider'),
			'keys' => 'hashChange',
			'desc' => __('Updates the hash in the page URL when changing slides based on the deeplinks you’ve set to your slides. This makes it possible to share URLs that will start the slider with the currently visible slide.', 'LayerSlider'),
			'advanced' => true
		),

		'pauseLayers' => array(
			'value' => false,
			'name' => __('Pause layers', 'LayerSlider'),
			'keys' => 'pauseLayers',
			'desc' => __('If you enable this option, layer transitions will not start playing as long the slideshow is in a paused state.', 'LayerSlider'),
			'advanced' => true
		),

		'pauseOnHover' => array(
			'value' => 'enabled',
			'name' => __('Pause on hover', 'LayerSlider'),
			'keys' => array('pauseonhover', 'pauseOnHover'),
			'options' => array(
				'disabled' => __('Do nothing', 'LayerSlider'),
				'enabled' => __('Pause slideshow', 'LayerSlider'),
				'layers' => __('Pause slideshow and layer transitions', 'LayerSlider'),
				'looplayers' => __('Pause slideshow and layer transitions, including loops', 'LayerSlider')
			),
			'desc' => __('Decide what should happen when you move your mouse cursor over the slider.', 'LayerSlider')
		),

		// The starting slide of a slider. Non-index value, starts with 1.
		'firstSlide' => array(
			'value' => 1,
			'name' => __('Start with slide', 'LayerSlider'),
			'keys' => array('firstlayer', 'firstSlide'),
			'desc' => __('The slider will start with the specified slide. You can also use the value “random”.', 'LayerSlider'),
			'attrs' => array('type' => 'text', 'data-options' => '["random"]')
		),

		// Use global shortcuts to control the slider.
		'keybNavigation' => array(
			'value' => true,
			'name' => __('Keyboard navigation', 'LayerSlider'),
			'keys' => array('keybnav', 'keybNav'),
			'desc' => __('You can navigate through slides with the left and right arrow keys.', 'LayerSlider')
		),

		// Accepts touch gestures if enabled.
		'touchNavigation' => array(
			'value' => true,
			'name' => __('Touch navigation', 'LayerSlider'),
			'keys' => array('touchnav', 'touchNav'),
			'desc' => __('Gesture-based navigation when swiping on touch-enabled devices.', 'LayerSlider')
		),

		'playByScroll' => array(
			'value' => false,
			'name' => __('Play By Scroll', 'LayerSlider'),
			'keys' => 'playByScroll',
			'desc' => sprintf(__('Play the slider by scrolling the web page. %sClick here%s to see a live example.', 'LayerSlider'), '<a href="https://layerslider.kreaturamedia.com/sliders/play-by-scroll/" target="_blank">', '</a>' ),
			'premium' => true
		),


		'playByScrollSpeed' => array(
			'value' => 1,
			'name' => __('Play By Scroll Speed', 'LayerSlider'),
			'keys' => 'playByScrollSpeed',
			'desc' => __('Play By Scroll speed multiplier.', 'LayerSlider'),
			'premium' => true
		),


		'playByScrollStart' => array(
			'value' => false,
			'name' => __('Start immediately', 'LayerSlider'),
			'keys' => 'playByScrollStart',
			'desc' => __('Instead of freezing the slider until visitors start scrolling, the slider will automatically start playback and will only pause at the first keyframe.', 'LayerSlider'),
			'premium' => true
		),

		'playByScrollSkipSlideBreaks' => array(
			'value' => false,
			'name' => __('Skip Slide Breaks', 'LayerSlider'),
			'keys' => 'playByScrollSkipSlideBreaks',
			'desc' => __('Enable this option to eliminate the stop between slide changes. Visitors would no longer need to scroll at the end of slides, instead the slider will only stop at the keyframes you specify.', 'LayerSlider'),
			'premium' => true
		),

		// Number of loops taking by the slideshow.
		// Depends on: shuffle. Defaults to: 0 => infinite
		'loops' => array(
			'value' => 0,
			'name' => __('Cycles', 'LayerSlider'),
			'keys' => array('loops', 'cycles'),
			'desc' => __('Number of cycles if slideshow is enabled.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'number',
				'min' => 0
			)
		),

		// The slideshow will always stop at the given number of
		// loops, even when the user restarts slideshow.
		// Depends on: loop. Defaults to: true
		'forceLoopNumber' => array(
			'value' => true,
			'name' => __('Force number of cycles', 'LayerSlider'),
			'keys' => array('forceloopnum', 'forceCycles'),
			'advanced' => true,
			'desc' => __('The slider will always stop at the given number of cycles, even if the slideshow restarts.', 'LayerSlider')
		),

		// The slideshow will change slides in random order.
		'shuffle' => array(
			'value' => false,
			'name' => __('Shuffle mode', 'LayerSlider'),
			'keys' => array('randomslideshow', 'shuffleSlideshow'),
			'desc' => __('Slideshow will proceed in random order. This feature does not work with looping.', 'LayerSlider')
		),

		// Whether slideshow should goind backwards or not
		// when you switch to a previous slide.
		'twoWaySlideshow' => array(
			'value' => false,
			'name' => __('Two way slideshow', 'LayerSlider'),
			'keys' => array('twowayslideshow', 'twoWaySlideshow'),
			'advanced' => true,
			'desc' => __('Slideshow can go backwards if someone switches to a previous slide.', 'LayerSlider')
		),

		'forceLayersOutDuration' => array(
			'value' => 750,
			'name' => __('Forced animation duration', 'LayerSlider'),
			'keys' => 'forceLayersOutDuration',
			'advanced' => true,
			'desc' => __('The animation speed in milliseconds when the slider forces remaining layers out of scene before swapping slides.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0
			)
		),

		// ================= //
		// |   Appearance  | //
		// ================= //

		// The default skin.
		'skin' => array(
			'value' => 'v6',
			'name' => __('Skin', 'LayerSlider'),
			'keys' => 'skin',
			'desc' => __('The skin used for this slider. The “noskin” skin is a border- and buttonless skin. Your custom skins will appear in the list when you create their folders.', 'LayerSlider'),
			'props' => array(
				'output' => true
			)
		),


		'sliderFadeInDuration' => array(
			'value' => 350,
			'name' => __('Initial fade duration', 'LayerSlider'),
			'keys' => array('sliderfadeinduration', 'sliderFadeInDuration'),
			'advanced' => true,
			'desc' => __('Change the duration of the initial fade animation when the page loads. Enter 0 to disable fading.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0
			)
		),


		'sliderClasses' => array(
			'value' => '',
			'name' => __('Slider Classes', 'LayerSlider'),
			'keys' => 'sliderclass',
			'desc' => __('One or more space-separated class names to be added to the slider container element.', 'LayerSlider'),
			'props' => array(
				'meta' => true
			)
		),


		// Some CSS values you can append on each slide individually
		// to make some adjustments if needed.
		'sliderStyle' => array(
			'value' => 'margin-bottom: 0px;',
			'name' => __('Slider CSS', 'LayerSlider'),
			'keys' => array('sliderstyle', 'sliderStyle'),
			'desc' => __('You can enter custom CSS to change some style properties on the slider wrapper element. More complex CSS should be applied with the Custom Styles Editor.', 'LayerSlider'),
			'props' => array(
				'meta' => true
			)
		),


		// Global background color on all slides.
		'globalBGColor' => array(
			'value' => '',
			'name' => __('Background color', 'LayerSlider'),
			'keys' => array('backgroundcolor', 'globalBGColor'),
			'desc' => __('Global background color of the slider. Slides with non-transparent background will cover this one. You can use all CSS methods such as HEX or RGB(A) values.', 'LayerSlider')
		),

		// Global background image on all slides.
		'globalBGImage' => array(
			'value' => '',
			'name' => __('Background image', 'LayerSlider'),
			'keys' => array('backgroundimage', 'globalBGImage'),
			'desc' => __('Global background image of the slider. Slides with non-transparent backgrounds will cover it. This image will not scale in responsive mode.', 'LayerSlider')
		),

		'globalBGImageId' => array(
			'value' => '',
			'keys' => array('backgroundimageId', 'globalBGImageId'),
			'props' => array(
				'meta' => true
			)
		),

		// Global background image repeat
		'globalBGRepeat' => array(
			'value' => 'no-repeat',
			'name' => __('Background repeat', 'LayerSlider'),
			'keys' => 'globalBGRepeat',
			'desc' => __('Global background image repeat.', 'LayerSlider'),
			'options' => array(
				'no-repeat' => __('No-repeat', 'LayerSlider'),
				'repeat' => __('Repeat', 'LayerSlider'),
				'repeat-x' => __('Repeat-x', 'LayerSlider'),
				'repeat-y' => __('Repeat-y', 'LayerSlider')
			)
		),

		// Global background image behavior
		'globalBGAttachment' => array(
			'value' => 'scroll',
			'name' => __('Background behavior', 'LayerSlider'),
			'keys' => 'globalBGAttachment',
			'desc' => __('Choose between a scrollable or fixed global background image.', 'LayerSlider'),
			'options' => array(
				'scroll' => __('Scroll', 'LayerSlider'),
				'fixed' => __('Fixed', 'LayerSlider')
			)
		),

		// Global background image position
		'globalBGPosition' => array(
			'value' => '50% 50%',
			'name' => __('Background position', 'LayerSlider'),
			'keys' => 'globalBGPosition',
			'desc' => __('Global background image position of the slider. The first value is the horizontal position and the second value is the vertical.', 'LayerSlider')
		),

		// Global background image size
		'globalBGSize' => array(
			'value' => 'auto',
			'name' => __('Background size', 'LayerSlider'),
			'keys' => 'globalBGSize',
			'desc' => __('Global background size of the slider. You can set the size in pixels, percentages, or constants: auto | cover | contain ', 'LayerSlider'),
			'attrs' => array('data-options' => '[{
				"name": "'.__('auto', 'LayerSlider').'",
				"value": "auto"
			}, {
				"name": "'.__('cover', 'LayerSlider').'",
				"value": "cover"

			},{
				"name": "'.__('contain', 'LayerSlider').'",
				"value": "contain"
			}, {
				"name": "'.__('stretch', 'LayerSlider').'",
				"value": "100% 100%"
			}]')
		),



		// ================= //
		// |   Navigation  | //
		// ================= //

		// Show the next and previous buttons.
		'navPrevNextButtons' => array(
			'value' => true,
			'name' => __('Show Prev & Next buttons', 'LayerSlider'),
			'keys' => array('navprevnext', 'navPrevNext'),
			'desc' => __('Disabling this option will hide the Prev and Next buttons.', 'LayerSlider')
		),

		// Show the next and previous buttons
		// only when hovering over the slider.
		'hoverPrevNextButtons' => array(
			'value' => true,
			'name' => __('Show Prev & Next buttons on hover', 'LayerSlider'),
			'keys' => array('hoverprevnext', 'hoverPrevNext'),
			'desc' => __('Show the buttons only when someone moves the mouse cursor over the slider. This option depends on the previous setting.', 'LayerSlider')
		),

		// Show the start and stop buttons
		'navStartStopButtons' => array(
			'value' => true,
			'name' => __('Show Start & Stop buttons', 'LayerSlider'),
			'keys' => array('navstartstop', 'navStartStop'),
			'desc' => __('Disabling this option will hide the Start & Stop buttons.', 'LayerSlider')
		),

		// Show the slide buttons or thumbnails.
		'navSlideButtons' => array(
			'value' => true,
			'name' => __('Show slide navigation buttons', 'LayerSlider'),
			'keys' => array('navbuttons', 'navButtons'),
			'desc' => __('Disabling this option will hide slide navigation buttons or thumbnails.', 'LayerSlider')
		),

		// Show the slider buttons or thumbnails
		// ony when hovering over the slider.
		'hoverSlideButtons' => array(
			'value' => false,
			'name' => __('Slide navigation on hover', 'LayerSlider'),
			'keys' => array('hoverbottomnav', 'hoverBottomNav'),
			'desc' => __('Slide navigation buttons (including thumbnails) will be shown on mouse hover only.', 'LayerSlider')
		),

		// Show bar timer
		'barTimer' => array(
			'value' => false,
			'name' => __('Show bar timer', 'LayerSlider'),
			'keys' => array('bartimer', 'showBarTimer'),
			'desc' => __('Show the bar timer to indicate slideshow progression.', 'LayerSlider')
		),

		// Show circle timer. Requires CSS3 capable browser.
		// This setting will overrule the 'barTimer' option.
		'circleTimer' => array(
			'value' => true,
			'name' => __('Show circle timer', 'LayerSlider'),
			'keys' => array('circletimer', 'showCircleTimer'),
			'desc' => __('Use circle timer to indicate slideshow progression.', 'LayerSlider')
		),

		'slideBarTimer' => array(
			'value' => false,
			'name' => __('Show slidebar timer', 'LayerSlider'),
			'keys' => array('slidebartimer', 'showSlideBarTimer'),
			'desc' => __('You can grab the slidebar timer playhead and seek the whole slide real-time like a movie.', 'LayerSlider')
		),

		// ========================== //
		// |  Thumbnail navigation  | //
		// ========================== //

		// Use thumbnails for slide buttons
		// Depends on: navSlideButtons.
		// Possible values: 'disabled', 'hover', 'always'
		'thumbnailNavigation' => array(
			'value' => 'hover',
			'name' => __('Thumbnail navigation', 'LayerSlider'),
			'keys' => array('thumb_nav', 'thumbnailNavigation'),
			'desc' => __('Use thumbnail navigation instead of slide bullet buttons.', 'LayerSlider'),
			'options' => array(
				'disabled' => __('Disabled', 'LayerSlider'),
				'hover' => __('Hover', 'LayerSlider'),
				'always' => __('Always', 'LayerSlider')
			)
		),

		// The width of the thumbnail area in percents.
		'thumbnailAreaWidth' => array(
			'value' => '60%',
			'name' => __('Thumbnail container width', 'LayerSlider'),
			'keys' => array('thumb_container_width', 'tnContainerWidth'),
			'desc' => __('The width of the thumbnail area relative to the slider size.', 'LayerSlider')
		),

		// Thumbnails' width in pixels.
		'thumbnailWidth' => array(
			'value' => 100,
			'name' => __('Thumbnail width', 'LayerSlider'),
			'keys' => array('thumb_width', 'tnWidth'),
			'desc' => __('The width of thumbnails in the navigation area.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0
			)
		),

		// Thumbnails' height in pixels.
		'thumbnailHeight' => array(
			'value' => 60,
			'name' => __('Thumbnail height', 'LayerSlider'),
			'keys' => array('thumb_height', 'tnHeight'),
			'desc' => __('The height of thumbnails in the navigation area.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0
			)
		),


		// The opacity of the active thumbnail in percents.
		'thumbnailActiveOpacity' => array(
			'value' => 35,
			'name' => __('Active thumbnail opacity', 'LayerSlider'),
			'keys' => array('thumb_active_opacity', 'tnActiveOpacity'),
			'desc' => __('Opacity in percentage of the active slide’s thumbnail.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0,
				'max' => 100
			)
		),

		// The opacity of inactive thumbnails in percents.
		'thumbnailInactiveOpacity' => array(
			'value' => 100,
			'name' => __('Inactive thumbnail opacity', 'LayerSlider'),
			'keys' => array('thumb_inactive_opacity', 'tnInactiveOpacity'),
			'desc' => __('Opacity in percentage of inactive slide thumbnails.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0,
				'max' => 100
			)
		),

		// ============ //
		// |  Videos  | //
		// ============ //

		// Automatically starts vidoes on the given slide.
		'autoPlayVideos' => array(
			'value' => true,
			'name' => __('Automatically play media', 'LayerSlider'),
			'keys' => array('autoplayvideos', 'autoPlayVideos'),
			'desc' => __('The playback of video and audio layers will automatically be started on the active slide.', 'LayerSlider')
		),

		// Automatically pauses the slideshow when a video is playing.
		// Auto means it only pauses the slideshow while the video is playing.
		// Possible values: 'auto', 'enabled', 'disabled'
		'autoPauseSlideshow' => array(
			'value' => 'auto',
			'name' => __('Pause slideshow', 'LayerSlider'),
			'keys' => array('autopauseslideshow', 'autoPauseSlideshow'),
			'desc' => __('The slideshow can temporally be paused while video or audio layers are playing. You can choose to permanently stop the pause until manual restarting.', 'LayerSlider'),
			'options' => array(
				'auto' => __('While playing', 'LayerSlider'),
				'enabled' => __('Permanently', 'LayerSlider'),
				'disabled' => __('No action', 'LayerSlider')
			)
		),

		// The preview image quality of a YouTube video.
		// Some videos doesn't have HD preview images and
		// you may have to lower the quality settings.
		// Possible values:
			// 'maxresdefault.jpg',
			// 'hqdefault.jpg',
			// 'mqdefault.jpg',
			// 'default.jpg'
		'youtubePreviewQuality' => array(
			'value' => 'maxresdefault.jpg',
			'name' => __('Youtube preview', 'LayerSlider'),
			'keys' => array('youtubepreview', 'youtubePreview'),
			'desc' => __('The automatically fetched preview image quaility for YouTube videos when you do not set your own. Please note, some videos do not have HD previews, and you may need to choose a lower quaility.', 'LayerSlider'),
			'options' => array(
				'maxresdefault.jpg' => __('Maximum quality', 'LayerSlider'),
				'hqdefault.jpg' => __('High quality', 'LayerSlider'),
				'mqdefault.jpg' => __('Medium quality', 'LayerSlider'),
				'default.jpg' => __('Default quality', 'LayerSlider')
			)
		),


		// =========== //
		// |  Popup  | //
		// =========== //

		'popupShowOnClick' => array(
			'value' => '',
			'name' => __('Open by click', 'LayerSlider'),
			'keys' => 'popupShowOnClick',
			'desc' => __('Enter a jQuery selector to open the Popup by clicking on the target element(s). Acting as a toggle, a secondary click will close the Popup. Leave this field empty if you don’t want to use this trigger.', 'LayerSlider')
		),

		'popupShowOnScroll' => array(
			'value' => '',
			'name' => __('Open at scroll position', 'LayerSlider'),
			'keys' => 'popupShowOnScroll',
			'desc' => __('Enter a scroll position in pixels or percents, which will open the Popup when visitors scroll to that location. Leave this field empty if you don’t want to use this trigger.', 'LayerSlider')
		),

		'popupCloseOnScroll' => array(
			'value' => '',
			'name' => __('Close at scroll position', 'LayerSlider'),
			'keys' => 'popupCloseOnScroll',
			'desc' => __('Enter a scroll position in pixels or percents, which will close the Popup when visitors scroll to that location. Leave this field empty if you don’t want to use this trigger.', 'LayerSlider')
		),

		'popupCloseOnTimeout' => array(
			'value' => '',
			'name' => __('Close automatically after', 'LayerSlider'),
			'keys' => 'popupCloseOnTimeout',
			'desc' => __('Automatically closes the Popup in the specified number of seconds after it was opened. Leave this field empty if you don’t want to use this trigger.', 'LayerSlider')
		),

		'popupCloseOnSliderEnd' => array(
			'value' => false,
			'name' => __('Close on slider end', 'LayerSlider'),
			'keys' => 'popupCloseOnSliderEnd',
			'desc' => __('Closes the Popup after the slider has completed a full cycle and all your slides were displayed.', 'LayerSlider')
		),

		'popupShowOnLeave' => array(
			'value' => false,
			'name' => __('Before leaving the page', 'LayerSlider'),
			'keys' => 'popupShowOnLeave',
			'desc' => __('Opens the Popup before leaving the page. A leave intent is considered when visitors leave the browser window with their mouse cursor in the direction where the window controls and the tab bar is located.', 'LayerSlider')
		),

		'popupShowOnIdle' => array(
			'value' => '',
			'name' => __('Open when idle for', 'LayerSlider'),
			'keys' => 'popupShowOnIdle',
			'desc' => __('Opens the Popup after the specified number of seconds when the user is inactive without moving the mouse cursor or pressing any button. Leave this field empty if you don’t want to use this trigger.', 'LayerSlider')
		),

		'popupShowOnTimeout' => array(
			'value' => '',
			'name' => __('Open automatically after', 'LayerSlider'),
			'keys' => 'popupShowOnTimeout',
			'desc' => __('Automatically opens the Popup after the specified number of seconds. Leave this field empty if you don’t want to use this trigger.', 'LayerSlider')
		),


		'popupShowOnce' => array(
			'value' => true,
			'name' => __('Prevent reopening', 'LayerSlider'),
			'keys' => 'popupShowOnce',
			'desc' => __('Depending on your settings, the same Popup can be displayed in multiple times without reloading the page. Such example would be when you use a scroll trigger and the user scrolls to that location a number of times. Enabling this option will prevent opening this Popup consequently.', 'LayerSlider')
		),

		'popupDisableOverlay' => array(
			'value' => false,
			'name' => __('Disable overlay', 'LayerSlider'),
			'keys' => 'popupDisableOverlay',
			'desc' => __('Disable this option to hide the overlay behind the Popup.', 'LayerSlider')
		),

		'popupShowCloseButton' => array(
			'value' => true,
			'name' => __('Show close button', 'LayerSlider'),
			'keys' => 'popupShowCloseButton',
			'desc' => __('Disable this option to hide the Popup close button. This option is also useful when you would like to use a custom close button. To do that, select the “Close the Popup” option from the layer linking field.', 'LayerSlider')
		),

		'popupCloseButtonStyle' => array(
			'value' => '',
			'name' => __('Close button custom CSS', 'LayerSlider'),
			'keys' => 'popupCloseButtonStyle',
			'desc' => __('Enter a list of CSS properties, which will be applied to the built-in close button (if enabled) to customize it’s appearance.', 'LayerSlider'),
			'advanced' => true
		),

		'popupOverlayClickToClose' => array(
			'value' => true,
			'name' => __('Close by clicking away', 'LayerSlider'),
			'keys' => 'popupOverlayClickToClose',
			'desc' => __('Close the Popup by clicking on the overlay.', 'LayerSlider')
		),

		'popupStartSliderImmediately' => array(
			'value' => false,
			'name' => __('Start slider immediately', 'LayerSlider'),
			'keys' => 'popupStartSliderImmediately',
			'desc' => __('Enable this option to start your slider immediately, without waiting for the Popup to complete its opening transition.', 'LayerSlider'),
			'advanced' => true
		),

		'popupResetOnClose' => array(
			'value' => 'slide',
			'name' => __('Reset on close', 'LayerSlider'),
			'keys' => 'popupResetOnClose',
			'desc' => __('Choose whether the slider should play all slide transitions over again when re-opening the Popup.', 'LayerSlider'),
			'advanced' => true,
			'options' => array(
				'disabled' => __('Disabled', 'LayerSlider'),
				'slide' => __('Enabled', 'LayerSlider')
			)
		),

		// 'popupCustomStyle' => array(
		// 	'value' => '',
		// 	'name' => __('Popup custom CSS', 'LayerSlider'),
		// 	'keys' => 'popupCustomStyle',
		// 	'desc' => __('Enter CSS properties, which will be applied to the popup main container element to customize it’s appearance.', 'LayerSlider')
		// ),

		'popupWidth' => array(
			'value' => 640,
			'name' => __('Popup Width', 'LayerSlider'),
			'keys' => 'popupWidth',
			'attrs' => array(
				'type' => 'number',
				'min' => 0,
 			),
			'props' => array(
				'meta' => true
			)
		),

		'popupHeight' => array(
			'value' => 360,
			'name' => __('Popup Height', 'LayerSlider'),
			'keys' => 'popupHeight',
			'attrs' => array(
				'type' => 'number',
				'min' => 0,
 			),
			'props' => array(
				'meta' => true
			)
		),

		'popupFitWidth' => array(
			'value' => false,
			'name' => __('Fit Width', 'LayerSlider'),
			'keys' => 'popupFitWidth'
		),

		'popupFitHeight' => array(
			'value' => false,
			'name' => __('Fit Height', 'LayerSlider'),
			'keys' => 'popupFitHeight'
		),

		'popupPositionHorizontal' => array(
			'value' => 'center',
			'keys' => 'popupPositionHorizontal'
		),

		'popupPositionVertical' => array(
			'value' => 'middle',
			'keys' => 'popupPositionVertical'
		),

		'popupDistanceLeft' => array(
			'value' => 10,
			'name' => __('Distance left', 'LayerSlider'),
			'keys' => 'popupDistanceLeft',
			'tooltip' => __('Distance specified in pixels from the left side of the browser window.', 'LayerSlider')
		),

		'popupDistanceRight' => array(
			'value' => 10,
			'name' => __('Distance right', 'LayerSlider'),
			'keys' => 'popupDistanceRight',
			'tooltip' => __('Distance specified in pixels from the right side of the browser window.', 'LayerSlider')
		),

		'popupDistanceTop' => array(
			'value' => 10,
			'name' => __('Distance top', 'LayerSlider'),
			'keys' => 'popupDistanceTop',
			'tooltip' => __('Distance specified in pixels from the top of the browser window.', 'LayerSlider')
		),

		'popupDistanceBottom' => array(
			'value' => 10,
			'name' => __('Distance bottom', 'LayerSlider'),
			'keys' => 'popupDistanceBottom',
			'tooltip' => __('Distance specified in pixels from the bottom of the browser window.', 'LayerSlider')
		),

		'popupDurationIn' => array(
			'value' => 1000,
			'name' => __('Opening duration', 'LayerSlider'),
			'keys' => 'popupDurationIn',
			'desc' => __('The Popup opening transition duration specified in milliseconds. A second equals to 1000 milliseconds.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0,
				'step' => 100
			)
		),

		'popupDurationOut' => array(
			'value' => 500,
			'name' => __('Closing duration', 'LayerSlider'),
			'keys' => 'popupDurationOut',
			'desc' => __('The Popup closing transition duration specified in milliseconds. A second equals to 1000 milliseconds.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0,
				'step' => 100
			)
		),

		'popupDelayIn' => array(
			'value' => 200,
			'name' => __('Opening delay', 'LayerSlider'),
			'keys' => 'popupDelayIn',
			'desc' => __('Delay before opening the Popup specified in milliseconds. A second equals to 1000 milliseconds.', 'LayerSlider'),
			'advanced' => true,
			'attrs' => array(
				'min' => 0,
				'step' => 100
			)
		),

		// 'popupEaseIn' => array(
		// 	'value' => 'easeInOutQuint',
		// 	'name' => __('Opening easing', 'LayerSlider'),
		// 	'keys' => 'popupEaseIn',
		// 	'desc' => __('The timing function of the animation. With it you can manipulate the movement of animated objects. Please click on the link next to this select field to open easings.net for more information and real-time examples.', 'LayerSlider')
		// ),

		// 'popupEaseOut' => array(
		// 	'value' => 'easeInQuint',
		// 	'name' => __('Closing easing', 'LayerSlider'),
		// 	'keys' => 'popupEaseOut',
		// 	'desc' => __('The timing function of the animation. With it you can manipulate the movement of animated objects. Please click on the link next to this select field to open easings.net for more information and real-time examples.', 'LayerSlider')
		// ),

		'popupTransitionIn' => array(
			'value' => 'fade',
			'name' => __('Opening transition', 'LayerSlider'),
			'keys' => 'popupTransitionIn',
			'desc' => __('Choose from one of the pre-defined Popup opening transitions.', 'LayerSlider'),
			'options' => array(
				'fade' => __('Fade', 'LayerSlider'),
				'slidefromtop' => __('Slide from top', 'LayerSlider'),
				'slidefrombottom' => __('Slide from bottom', 'LayerSlider'),
				'slidefromleft' => __('Slide from left', 'LayerSlider'),
				'slidefromright' => __('Slide from right', 'LayerSlider'),
				'rotatefromtop' => __('Rotate from top', 'LayerSlider'),
				'rotatefrombottom' => __('Rotate from bottom', 'LayerSlider'),
				'rotatefromleft' => __('Rotate from left', 'LayerSlider'),
				'rotatefromright' => __('Rotate from right', 'LayerSlider'),
				'scalefromtop' => __('Scale from top', 'LayerSlider'),
				'scalefrombottom' => __('Scale from bottom', 'LayerSlider'),
				'scalefromleft' => __('Scale from left', 'LayerSlider'),
				'scalefromright' => __('Scale from right', 'LayerSlider'),
				'scale' => __('Scale', 'LayerSlider'),
				'spin' => __('Spin', 'LayerSlider'),
				'spinx' => __('Spin horizontally', 'LayerSlider'),
				'spiny' => __('Spin vertically', 'LayerSlider'),
				'elastic' => __('Elastic', 'LayerSlider')
			)
		),

		'popupTransitionOut' => array(
			'value' => 'fade',
			'name' => __('Closing transition', 'LayerSlider'),
			'keys' => 'popupTransitionOut',
			'desc' => __('Choose from one of the pre-defined Popup closing transitions.', 'LayerSlider'),
			'options' => array(
				'fade' => __('Fade', 'LayerSlider'),
				'slidetotop' => __('Slide to top', 'LayerSlider'),
				'slidetobottom' => __('Slide to bottom', 'LayerSlider'),
				'slidetoleft' => __('Slide to left', 'LayerSlider'),
				'slidetoright' => __('Slide to right', 'LayerSlider'),
				'rotatetotop' => __('Rotate to top', 'LayerSlider'),
				'rotatetobottom' => __('Rotate to bottom', 'LayerSlider'),
				'rotatetoleft' => __('Rotate to left', 'LayerSlider'),
				'rotatetoright' => __('Rotate to right', 'LayerSlider'),
				'scaletotop' => __('Scale to top', 'LayerSlider'),
				'scaletobottom' => __('Scale to bottom', 'LayerSlider'),
				'scaletoleft' => __('Scale to left', 'LayerSlider'),
				'scaletoright' => __('Scale to right', 'LayerSlider'),
				'scale' => __('Scale', 'LayerSlider'),
				'spin' => __('Spin', 'LayerSlider'),
				'spinx' => __('Spin horizontally', 'LayerSlider'),
				'spiny' => __('Spin vertically', 'LayerSlider'),
				'elastic' => __('Elastic', 'LayerSlider')
			)
		),

		// 'popupCustomTransitionIn' => array(
		// 	'value' => '',
		// 	'name' => __('Custom opening transition', 'LayerSlider'),
		// 	'keys' => 'popupCustomTransitionIn',
		// ),

		// 'popupCustomTransitionOut' => array(
		// 	'value' => '',
		// 	'name' => __('Custom closing transition', 'LayerSlider'),
		// 	'keys' => 'popupCustomTransitionOut',
		// ),

		'popupOverlayBackground' => array(
			'value' => 'rgba(0,0,0,.85)',
			'name' => __('Overlay color', 'LayerSlider'),
			'keys' => 'popupOverlayBackground',
			'desc' => __('The overlay color. You can use color names, hexadecimal, RGB or RGBA values.', 'LayerSlider')
		),

		'popupOverlayDurationIn' => array(
			'value' => 400,
			'name' => __('Overlay opening duration', 'LayerSlider'),
			'keys' => 'popupOverlayDurationIn',
			'desc' => __('The overlay opening transition duration specified in milliseconds. A second equals to 1000 milliseconds.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0,
				'step' => 100
			)
		),

		'popupOverlayDurationOut' => array(
			'value' => 400,
			'name' => __('Overlay closing duration', 'LayerSlider'),
			'keys' => 'popupOverlayDurationOut',
			'desc' => __('The overlay closing transition duration specified in milliseconds. A second equals to 1000 milliseconds.', 'LayerSlider'),
			'attrs' => array(
				'min' => 0,
				'step' => 100
			)
		),

		// 'popupOverlayEaseIn' => array(
		// 	'value' => 'easeInQuint',
		// 	'name' => __('Overlay opening easing', 'LayerSlider'),
		// 	'keys' => 'popupOverlayEaseIn',
		// 	'desc' => __('The timing function of the animation. With it you can manipulate the movement of animated objects. Please click on the link next to this select field to open easings.net for more information and real-time examples.', 'LayerSlider')
		// ),

		// 'popupOverlayEaseOut' => array(
		// 	'value' => 'easeInQuint',
		// 	'name' => __('Overlay closing easing', 'LayerSlider'),
		// 	'keys' => 'popupOverlayEaseOut',
		// 	'desc' => __('The timing function of the animation. With it you can manipulate the movement of animated objects. Please click on the link next to this select field to open easings.net for more information and real-time examples.', 'LayerSlider')
		// ),

		'popupOverlayTransitionIn' => array(
			'value' => 'fade',
			'name' => __('Opening transition', 'LayerSlider'),
			'keys' => 'popupOverlayTransitionIn',
			'desc' => __('Choose from one of the pre-defined overlay opening transitions.', 'LayerSlider'),
			'options' => array(
				'fade' => __('Fade', 'LayerSlider'),
				'slidefromtop' => __('Slide from top', 'LayerSlider'),
				'slidefrombottom' => __('Slide from bottom', 'LayerSlider'),
				'slidefromleft' => __('Slide from left', 'LayerSlider'),
				'slidefromright' => __('Slide from right', 'LayerSlider'),
				'fadefromtopright' => __('Fade from top right', 'LayerSlider'),
				'fadefromtopleft' => __('Fade from top left', 'LayerSlider'),
				'fadefrombottomright' => __('Fade from bottom right', 'LayerSlider'),
				'fadefrombottomleft' => __('Fade from bottom left', 'LayerSlider'),
				'scale' => __('Scale', 'LayerSlider')
			)
		),

		'popupOverlayTransitionOut' => array(
			'value' => 'fade',
			'name' => __('Closing transition', 'LayerSlider'),
			'keys' => 'popupOverlayTransitionOut',
			'desc' => __('Choose from one of the pre-defined overlay closing transitions.', 'LayerSlider'),
			'options' => array(
				'fade' => __('Fade', 'LayerSlider'),
				'slidetotop' => __('Slide to top', 'LayerSlider'),
				'slidetobottom' => __('Slide to bottom', 'LayerSlider'),
				'slidetoleft' => __('Slide to left', 'LayerSlider'),
				'slidetoright' => __('Slide to right', 'LayerSlider'),
				'fadetotopright' => __('Fade to top right', 'LayerSlider'),
				'fadetotopleft' => __('Fade to top left', 'LayerSlider'),
				'fadetobottomright' => __('Fade to bottom right', 'LayerSlider'),
				'fadetobottomleft' => __('Fade to bottom left', 'LayerSlider'),
				'scale' => __('Scale', 'LayerSlider')
			)
		),

		//----

		'popupPagesAll' => array(
			'value' => false,
			'name' => __('All pages', 'LayerSlider'),
			'keys' => 'popup_pages_all',
			'props' => array(
				'meta' => true
			)
		),

		'popupPagesHome' => array(
			'value' => false,
			'name' => __('Home page', 'LayerSlider'),
			'keys' => 'popup_pages_home',
			'props' => array(
				'meta' => true
			)
		),

		'popupPagesPage' => array(
			'value' => false,
			'name' => __('Pages', 'LayerSlider'),
			'keys' => 'popup_pages_page',
			'props' => array(
				'meta' => true
			)
		),

		'popupPagesPost' => array(
			'value' => false,
			'name' => __('Posts', 'LayerSlider'),
			'keys' => 'popup_pages_post',
			'props' => array(
				'meta' => true
			)
		),

		'popupPagesCustom' => array(
			'value' => '',
			'name' => __('Include custom pages', 'LayerSlider'),
			'keys' => 'popup_pages_custom',
			'props' => array(
				'meta' => true
			)
		),

		'popupPagesExclude' => array(
			'value' => '',
			'name' => __('Exclude pages', 'LayerSlider'),
			'keys' => 'popup_pages_exclude',
			'props' => array(
				'meta' => true
			)
		),

		'popupRolesAdministrator' => array(
			'value' => true,
			'name' => __('Administrators', 'LayerSlider'),
			'keys' => 'popup_roles_administrator',
			'props' => array( 'meta' => true )
		),

		'popupRolesEditor' => array(
			'value' => true,
			'name' => __('Editors', 'LayerSlider'),
			'keys' => 'popup_roles_editor',
			'props' => array( 'meta' => true )
		),

		'popupRolesAuthor' => array(
			'value' => true,
			'name' => __('Authors', 'LayerSlider'),
			'keys' => 'popup_roles_author',
			'props' => array( 'meta' => true )
		),

		'popupRolesContributor' => array(
			'value' => true,
			'name' => __('Contributors', 'LayerSlider'),
			'keys' => 'popup_roles_contributor',
			'props' => array( 'meta' => true )
		),

		'popupRolesSubscriber' => array(
			'value' => true,
			'name' => __('Subscribers', 'LayerSlider'),
			'keys' => 'popup_roles_subscriber',
			'props' => array( 'meta' => true )
		),

		'popupRolesVisitor' => array(
			'value' => true,
			'name' => __('Visitors', 'LayerSlider'),
			'keys' => 'popup_roles_visitor',
			'props' => array( 'meta' => true )
		),

		'popupFirstTimeVisitor' => array(
			'value' => false,
			'name' => __('Show only for first time visitors', 'LayerSlider'),
			'keys' => 'popup_first_time_visitor',
			'props' => array( 'meta' => true )
		),

		'popupRepeat' => array(
			'value' => true,
			'name' => __('Repeat Popup', 'LayerSlider'),
			'keys' => 'popup_repeat',
			'desc' => __('Enables or disables repeating this Popup to your target audience with the below specified frequency.', 'LayerSlider'),
			'props' => array( 'meta' => true )
		),

		'popupRepeatDays' => array(
			'value' => '',
			'name' => __('Repeat after', 'LayerSlider'),
			'keys' => 'popup_repeat_days',
			'desc' => __('Controls the repeat frequency of this Popup specified in days. Leave this option empty if you want to display the Popup on each page load. Enter 0 to repeat after the end of a browsing session (when the browser closes).', 'LayerSlider'),
			'props' => array( 'meta' => true ),
			'attrs' => array(
				'type' => 'number',
				'min' => 0,
				'max' => 365
			)
		),





		// ========== //
		// |  Misc  | //
		// ========== //


		// Ignores the host/domain names in URLS by converting the to
		// relative format. Useful when you move your site.
		// Prevents linking content from 3rd party servers.
		'relativeURLs' => array(
			'value' => false,
			'name' => __('Use relative URLs', 'LayerSlider'),
			'keys' => 'relativeurls',
			'desc' => __('Use relative URLs for local images. This setting could be important when moving your WP installation.', 'LayerSlider'),
			'props' => array(
				'meta' => true
			)
		),

		'allowRestartOnResize' => array(
			'value' => false,
			'name' => __('Allow restarting slides on resize', 'LayerSlider'),
			'keys' => 'allowRestartOnResize',
			'desc' => __('Certain transformation and transition options cannot be updated on the fly when the browser size or device orientation changes. By enabling this option, the slider will automatically detect such situations and will restart the itself to preserve its appearance.', 'LayerSlider'),
			'advanced' => true
		),

		'useSrcset' => array(
			'value' => true,
			'name' => __('Use srcset attribute', 'LayerSlider'),
			'keys' => 'useSrcset',
			'desc' => __('The srcset attribute allows loading dynamically scaled images based on screen resolution. It can save bandwidth and allow using retina-ready images on high resolution devices. In some rare edge cases, this option might cause blurry images.', 'LayerSlider'),
			'props' => array(
				'meta' => true
			)
		),

		'enhancedLazyLoad' => array(
			'value' => false,
			'name' => 'Enhanced lazy load',
			'keys' => 'enhancedLazyLoad',
			'desc' => __('The default lazy loading behavior makes a compromise to ensure maximum compatibility while offering a solution that works ideally in almost all cases. However, by leaving the image ’src’ attribute untouched, there is a slight chance that the browser might start downloading some assets for a split second before LayerSlider cancels them. Enabling this option will eliminate any chance of generating even a minuscule amount of unwanted traffic, but it can also cause issues for search engine indexing and other WP themes/plugins.', 'LayerSlider'),
			'advanced' => true,
			'props' => array(
				'meta' => true
			)
		),


		'preferBlendMode' => array(
			'value' => 'disabled',
			'name' => __('Prefer Blend Mode', 'LayerSlider'),
			'keys' => 'preferBlendMode',
			'desc' => __('Enable this option to avoid blend mode issues with slide transitions. Due to technical limitations, this will also clip your slide transitions regardless of your settings.', 'LayerSlider'),
			'options' => array(
				'enabled' => __('Enabled', 'LayerSlider'),
				'disabled' => __('Disabled', 'LayerSlider')
			),
			'advanced' => true
		),


		// ============== //
		// |  YourLogo  | //
		// ============== //

		'yourLogoId' => array (
			'value' => '',
			'keys' => 'yourlogoId',
			'props' => array( 'meta' => true )
		),

		// Places a fixed image on the top of the slider.
		'yourLogoImage' => array(
			'value' => '',
			'name' => __('YourLogo', 'LayerSlider'),
			'keys' => array('yourlogo', 'yourLogo'),
			'desc' => __('A fixed image layer can be shown above the slider that remains still throughout the whole slider. Can be used to display logos or watermarks.', 'LayerSlider')
		),

		// Custom CSS style settings for the YourLogo image.
		// Depends on: yourLogoImage
		'yourLogoStyle' => array(
			'value' => 'left: -10px; top: -10px;',
			'name' => __('YourLogo style', 'LayerSlider'),
			'keys' => array('yourlogostyle', 'yourLogoStyle'),
			'desc' => __('CSS properties to control the image placement and appearance.', 'LayerSlider')
		),

		// Linking the YourLogo image to a given URL.
		// Depends on: yourLogoImage
		'yourLogoLink' => array(
			'value' => '',
			'name' => __('YourLogo link', 'LayerSlider'),
			'keys' => array('yourlogolink', 'yourLogoLink'),
			'desc' => __('Enter a URL to link the YourLogo image.', 'LayerSlider')
		),

		// Link target for yourLogoLink.
		// Depends on: yourLogoLink
		'yourLogoTarget' => array(
			'value' => '_self',
			'name' => __('Link target', 'LayerSlider'),
			'keys' => array('yourlogotarget', 'yourLogoTarget'),
			'desc' => '',
			'options' => array(
				'_self' => __('Open on the same page', 'LayerSlider'),
				'_blank' => __('Open on new page', 'LayerSlider'),
				'_parent' => __('Open in parent frame', 'LayerSlider'),
				'_top' => __('Open in main frame', 'LayerSlider')
			),
		),

		// Post options
		'postType' => array(
			'value' => '',
			'keys' => 'post_type',
			'props' => array(
				'meta' => true
			)
		),

		'postOrderBy' => array(
			'value' => 'date',
			'keys' => 'post_orderby',
			'options' => array(
				'date' => __('Date Created', 'LayerSlider'),
				'modified' => __('Last Modified', 'LayerSlider'),
				'ID' => __('Post ID', 'LayerSlider'),
				'title' => __('Post Title', 'LayerSlider'),
				'comment_count' => __('Number of Comments', 'LayerSlider'),
				'rand' => __('Random', 'LayerSlider')
			),
			'props' => array(
				'meta' => true
			)
		),

		'postOrder' => array(
			'value' => 'DESC',
			'keys' => 'post_order',
			'options' => array(
				'ASC' => __('Ascending', 'LayerSlider'),
				'DESC' => __('Descending', 'LayerSlider')
			),
			'props' => array(
				'meta' => true
			)
		),

		'postCategories' => array(
			'value' => '',
			'keys' => 'post_categories',
			'props' => array(
				'meta' => true
			)
		),

		'postTags' => array(
			'value' => '',
			'keys' => 'post_tags',
			'props' => array(
				'meta' => true
			)
		),

		'postTaxonomy' => array(
			'value' => '',
			'keys' => 'post_taxonomy',
			'props' => array(
				'meta' => true
			)
		),

		'postTaxTerms' => array(
			'value' => '',
			'keys' => 'post_tax_terms',
			'props' => array(
				'meta' => true
			)
		),

		// Old and obsolete API
		'cbInit' => array(
			'value' => "function(element) {\r\n\r\n}",
			'keys' => array('cbinit','cbInit'),
			'props' => array(
				'meta' => true
			)
		),

		'cbStart' => array(
			'value' => "function(data) {\r\n\r\n}",
			'keys' => array('cbstart','cbStart'),
			'props' => array(
				'meta' => true
			)
		),

		'cbStop' => array(
			'value' => "function(data) {\r\n\r\n}",
			'keys' => array('cbstop','cbStop'),
			'props' => array(
				'meta' => true
			)
		),

		'cbPause' => array(
			'value' => "function(data) {\r\n\r\n}",
			'keys' => array('cbpause','cbPause'),
			'props' => array(
				'meta' => true
			)
		),

		'cbAnimStart' => array(
			'value' => "function(data) {\r\n\r\n}",
			'keys' => array('cbanimstart','cbAnimStart'),
			'props' => array(
				'meta' => true
			)
		),

		'cbAnimStop' => array(
			'value' => "function(data) {\r\n\r\n}",
			'keys' => array('cbanimstop','cbAnimStop'),
			'props' => array(
				'meta' => true
			)
		),

		'cbPrev' => array(
			'value' => "function(data) {\r\n\r\n}",
			'keys' => array('cbprev','cbPrev'),
			'props' => array(
				'meta' => true
			)
		),

		'cbNext' => array(
			'value' => "function(data) {\r\n\r\n}",
			'keys' => array('cbnext','cbNext'),
			'props' => array(
				'meta' => true
			)
		),
	),

	'slides' => array(

		// The background image of slides
		// Defaults to: void
		'image' => array (
			'value' => '',
			'name' => __('Set a slide image', 'LayerSlider'),
			'keys' => 'background',
			'tooltip' => __('The slide image/background. Click on the image to open the WordPress Media Library to choose or upload an image.', 'LayerSlider'),
			'props' => array( 'meta' => true )
		),

		'imageId' => array (
			'value' => '',
			'keys' => 'backgroundId',
			'props' => array( 'meta' => true )
		),

		'imageSize' => array(
			'value' => 'inherit',
			'name' => __('Size', 'LayerSlider'),
			'keys' => 'bgsize',
			'tooltip' => __('The size of the slide background image. Leave this option on inherit if you want to set it globally from Slider Settings.', 'LayerSlider'),
			'options' => array(
				'inherit' => __('Inherit', 'LayerSlider'),
				'auto' => __('Auto', 'LayerSlider'),
				'cover' => __('Cover', 'LayerSlider'),
				'contain' => __('Contain', 'LayerSlider'),
				'100% 100%' => __('Stretch', 'LayerSlider')
			)
		),

		'imagePosition' => array(
			'value' => 'inherit',
			'name' => __('Position', 'LayerSlider'),
			'keys' => 'bgposition',
			'tooltip' => __('The position of the slide background image. Leave this option on inherit if you want to set it globally from Slider Settings.', 'LayerSlider'),
			'options' => array(
				'inherit' => __('Inherit', 'LayerSlider'),
				'0% 0%' => __('left top', 'LayerSlider'),
				'0% 50%' => __('left center', 'LayerSlider'),
				'0% 100%' => __('left bottom', 'LayerSlider'),
				'50% 0%' => __('center top', 'LayerSlider'),
				'50% 50%' => __('center center', 'LayerSlider'),
				'50% 100%' => __('center bottom', 'LayerSlider'),
				'100% 0%' => __('right top', 'LayerSlider'),
				'100% 50%' => __('right center', 'LayerSlider'),
				'100% 100%' => __('right bottom', 'LayerSlider')
			)
		),

		'imageColor' => array(
			'value' => '',
			'name' => __('Color', 'LayerSlider'),
			'keys' => 'bgcolor',
			'tooltip' => __('The slide background color. You can use color names, hexadecimal, RGB or RGBA values.', 'LayerSlider')
		),

		'thumbnail' => array (
			'value' => '',
			'name' => __('Set a slide thumbnail', 'LayerSlider'),
			'keys' => 'thumbnail',
			'tooltip' => __('The thumbnail image of this slide. Click on the image to open the WordPress Media Library to choose or upload an image. If you leave this field empty, the slide image will be used.', 'LayerSlider'),
			'props' => array( 'meta' => true )
		),

		'thumbnailId' => array (
			'value' => '',
			'keys' => 'thumbnailId',
			'props' => array( 'meta' => true )
		),

		// Default slide delay in millisecs.
		// Defaults to: 4000 (ms) => 4secs
		'delay' => array(
			'value' => '',
			'name' => __('Duration', 'LayerSlider'),
			'keys' => array('slidedelay', 'duration'),
			'tooltip' => __('Here you can set the time interval between slide changes, this slide will stay visible for the time specified here. This value is in millisecs, so the value 1000 means 1 second. Please don’t use 0 or very low values.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'number',
				'min' => 0,
				'step' => 500,
				'placeholder' => 'auto'
			)
		),

		'2dTransitions' => array(
			'value' => '',
			'keys' => array('2d_transitions', 'transition2d')
		),

		'3dTransitions' => array(
			'value' => '',
			'keys' => array('3d_transitions', 'transition3d')
		),

		'custom2dTransitions' => array(
			'value' => '',
			'keys' => array('custom_2d_transitions', 'customtransition2d')
		),

		'custom3dTransitions' => array(
			'value' => '',
			'keys' => array('custom_3d_transitions', 'customtransition3d')
		),

		'customProperties' => array(
			'value' => '',
			'keys' => 'customProperties',
			'props' => array(
				'meta' => true
			)
		),

		'transitionOrigami' => array(
			'value' => false,
			'name' => __('Origami', 'LayerSlider'),
			'keys' => 'transitionorigami',
			'premium' => true
		),

		'transitionDuration' => array(
			'value' => '',
			'name' => __('Duration', 'LayerSlider'),
			'keys' => 'transitionduration',
			'tooltip' => __('We’ve made our pre-defined slide transitions with special care to fit in most use cases. However, if you would like to increase or decrease the speed of these transitions, you can override their timing here by providing your own transition length in milliseconds. (1 second = 1000 milliseconds)', 'LayerSlider'),
			'attrs' => array(
				'type' => 'number',
				'min' => 0,
				'step' => 500,
				'placeholder' => __( 'custom duration', 'LayerSlider' )
			)

		),

		'timeshift' => array(
			'value' => 0,
			'name' => __('Time Shift', 'LayerSlider'),
			'keys' => 'timeshift',
			'tooltip' => __('You can shift the starting point of the slide animation timeline, so layers can animate in an earlier time after a slide change. This value is in milliseconds. A second is 1000 milliseconds. You can only use a negative value.', 'LayerSlider'),
			'attrs' => array(
				'step' => 50
			)
		),

		'linkUrl' => array(
			'value' => '',
			'name' => __('Enter URL', 'LayerSlider'),
			'keys' => array('layer_link', 'linkUrl'),
			'tooltip' => __('If you want to link the whole slide, type the URL here. You can choose a WordPress page/post/attachment or use one of the pre-defined options from the dropdown list when you click into this field. You can also type a hash mark followed by a number to link this layer to another slide. Example: #3 - this will switch to the third slide.', 'LayerSlider'),
			'attrs' => array(
				'data-options' => '[{
					"name": "'.__('Switch to the next slide', 'LayerSlider').'",
					"value": "#next",
					"linkAction": true
				},{
					"name": "'.__('Switch to the previous slide', 'LayerSlider').'",
					"value": "#prev",
					"linkAction": true
				},{
					"name": "'.__('Stop the slideshow', 'LayerSlider').'",
					"value": "#stop",
					"linkAction": true
				},{
					"name": "'.__('Resume the slideshow', 'LayerSlider').'",
					"value": "#start",
					"linkAction": true
				},{
					"name": "'.__('Replay the slide from the start', 'LayerSlider').'",
					"value": "#replay",
					"linkAction": true
				},{
					"name": "'.__('Reverse the slide, then pause it', 'LayerSlider').'",
					"value": "#reverse",
					"linkAction": true
				},{
					"name": "'.__('Reverse the slide, then replay it', 'LayerSlider').'",
					"value": "#reverse-replay",
					"linkAction": true
				},{
					"name": "'.__('Close the Popup', 'LayerSlider').'",
					"value": "#closepopup",
					"linkAction": true
				}]'
			),
			'props' => array(
				'meta' => true
			)

		),


		'linkId' => array(
			'value' => '',
			'keys' => 'linkId',
			'props' => array( 'meta' => true )
		),

		'linkType' => array(
			'value' => '',
			'keys' => 'linkType',
			'props' => array( 'meta' => true )
		),

		'linkTarget' => array(
			'value' => '_self',
			'name' => __('Link Target', 'LayerSlider'),
			'keys' => array('layer_link_target', 'linkTarget'),
			'options' => array(
				'_self' => __('Open on the same page', 'LayerSlider'),
				'_blank' => __('Open on new page', 'LayerSlider'),
				'_parent' => __('Open in parent frame', 'LayerSlider'),
				'_top' => __('Open in main frame', 'LayerSlider'),
				'ls-scroll' => __('Scroll to element (Enter selector)', 'LayerSlider')
			),
			'props' => array(
				'meta' => true
			)
		),


		'linkPosition' => array(
			'value' => 'over',
			'keys' => array('layer_link_type', 'linkPosition'),
			'tooltip' => __('Choose whether the slide link should be on top or underneath your layers. The later option makes the link clickable only at empty spaces where the slide background is visible, and enables you to link both slides and layers independently from each other.', 'LayerSlider'),
			'options' => array(
				'over' => __('On top of layers', 'LayerSlider'),
				'under' => __('Underneath layers', 'LayerSlider'),
			),
			'props' => array(
				'meta' => true
			)
		),

		'ID' => array(
			'value' => '',
			'name' => __('#ID', 'LayerSlider'),
			'keys' => 'id',
			'tooltip' => __('You can apply an ID attribute on the HTML element of this slide to work with it in your custom CSS or Javascript code.', 'LayerSlider'),
			'props' => array(
				'meta' => true
			)
		),

		'deeplink' => array(
			'value' => '',
			'name' => __('Deeplink', 'LayerSlider'),
			'keys' => 'deeplink',
			'tooltip' => __('You can specify a slide alias name which you can use in your URLs with a hash mark, so LayerSlider will start with the correspondig slide.', 'LayerSlider')
		),

		'globalHover' => array(
			'value' => false,
			'name' => __('Global Hover', 'LayerSlider'),
			'keys' => 'globalhover',
			'tooltip' => __('By turning this option on, all layers will trigger their Hover Transitions at the same time when you hover over the slider with your mouse cursor. It’s useful to create spectacular effects that involve multiple layer transitions and activate on hovering over the slider instead of individual layers.', 'LayerSlider'),
			'premium' => true
		),

		'postContent' => array(
			'value' => null,
			'keys' => 'post_content',
			'props' => array(
				'meta' => true
			)
		),


		'postOffset' => array(
			'value' => '',
			'keys' => 'post_offset',
			'props' => array(
				'meta' => true
			)
		),

		'skipSlide' => array(
			'value' => false,
			'name' => __('Hidden', 'LayerSlider'),
			'keys' => 'skip',
			'tooltip' => __('If you don’t want to use this slide in your front-page, but you want to keep it, you can hide it with this switch.', 'LayerSlider'),
			'props' => array(
				'meta' => true
			)
		),


		'overflow' => array(
			'value' => false,
			'name' => __('Overflow layers', 'LayerSlider'),
			'keys' => 'overflow',
			'tooltip' => __('By default the slider clips the layers outside of its bounds. Enable this option to allow overflowing content.', 'LayerSlider')
		),

		// Ken Burns effect
		'kenBurnsZoom' => array(
			'value' => 'disabled',
			'name' => __('Zoom', 'LayerSlider'),
			'keys' => 'kenburnszoom',
			'options' => array(
				'disabled' => __('Disabled', 'LayerSlider'),
				'in' => __('Zoom In', 'LayerSlider'),
				'out' => __('Zoom Out', 'LayerSlider'),
			)
		),

		'kenBurnsRotate' => array(
			'value' => '',
			'name' => __('Rotate', 'LayerSlider'),
			'keys' => 'kenburnsrotate',
			'tooltip' => __('The amount of rotation (if any) in degrees used in the Ken Burns effect. Negative values are allowed for counterclockwise rotation.', 'LayerSlider'),

		),

		'kenBurnsScale' => array(
			'value' => 1.2,
			'name' => __('Scale', 'LayerSlider'),
			'keys' => 'kenburnsscale',
			'tooltip' => __('Increase or decrease the size of the slide background image in the Ken Burns effect. The default value is 1, the value 2 will double the image, while 0.5 results half the size. Negative values will flip the image.', 'LayerSlider'),
			'attrs' => array(
				'type' => 'number',
				'step' => 0.1
			),
			'props' => array(
				'output' => true
			)
		),


		// Parallax
		'parallaxType' => array(
			'value' => '2d',
			'name' => __('Type', 'LayerSlider'),
			'keys' => 'parallaxtype',
			'tooltip' => __('The default value for parallax layers on this slide, which they will inherit, unless you set it otherwise on the affected layers.', 'LayerSlider'),
			'options' => array(
				'2d' => __('2D', 'LayerSlider'),
				'3d' => __('3D', 'LayerSlider')
 			)
		),

		'parallaxEvent' => array(
			'value' => 'cursor',
			'name' => __('Event', 'LayerSlider'),
			'keys' => 'parallaxevent',
			'tooltip' => __('You can trigger the parallax effect by either scrolling the page, or by moving your mouse cursor / tilting your mobile device. This is the default value on this slide, which parallax layers will inherit, unless you set it otherwise directly on them.', 'LayerSlider'),
			'options' => array(
				'cursor' => __('Cursor or Tilt', 'LayerSlider'),
				'scroll' => __('Scroll', 'LayerSlider')
 			)
		),

		'parallaxAxis' => array(
			'value' => 'both',
			'name' => __('Axes', 'LayerSlider'),
			'keys' => 'parallaxaxis',
			'tooltip' => __('Choose on which axes parallax layers should move. This is the default value on this slide, which parallax layers will inherit, unless you set it otherwise directly on them.', 'LayerSlider'),
			'options' => array(
				'none' => __('None', 'LayerSlider'),
				'both' => __('Both axes', 'LayerSlider'),
				'x' => __('Horizontal only', 'LayerSlider'),
				'y' => __('Vertical only', 'LayerSlider')
			)
		),


		'parallaxTransformOrigin' => array(
			'value' => '50% 50% 0',
			'name' => __('Transform Origin', 'LayerSlider'),
			'keys' => 'parallaxtransformorigin',
			'tooltip' => __('Sets a point on canvas from which transformations are calculated. For example, a layer may rotate around its center axis or a completely custom point, such as one of its corners. The three values represent the X, Y and Z axes in 3D space. Apart from the pixel and percentage values, you can also use the following constants: top, right, bottom, left, center.', 'LayerSlider')
		),

		'parallaxDurationMove' => array(
			'value' => 1500,
			'name' => __('Move duration', 'LayerSlider'),
			'keys' => 'parallaxdurationmove',
			'tooltip' => __('Controls the speed of animating layers when you move your mouse cursor or tilt your mobile device. This is the default value on this 