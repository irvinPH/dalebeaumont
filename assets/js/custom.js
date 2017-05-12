/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
new UISearch( document.getElementById( 'sb-search' ) );

// .addIndicators({name: "pin scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)

var controller = new ScrollMagic.Controller();
var controller2 = new ScrollMagic.Controller();
var controller3 = new ScrollMagic.Controller();
var controller4 = new ScrollMagic.Controller();

// build scenes
new ScrollMagic.Scene({triggerElement: "#test", duration: 600, triggerHook: 1,})
	.setClassToggle("#test", "fadeIn") // add class toggle
	.addIndicators({name: "pins scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#hero", duration: '100%', triggerHook: 0.2})
	.setClassToggle(".top", 'show') // add class toggle
	.addIndicators({name: "pins scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin
	.addTo(controller2);

new ScrollMagic.Scene({triggerElement: "#hero", duration: '100%', triggerHook: 0.2})
	.setClassToggle("#hero .caps", 'show') // add class toggle
	.addIndicators({name: "pins scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin
	.addTo(controller3);

new ScrollMagic.Scene({triggerElement: "#hero", duration: '100%', triggerHook: 0.2})
	.setClassToggle("#hero h2", 'show') // add class toggle
	.addIndicators({name: "pins scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin
	.addTo(controller3);	

//projects
new ScrollMagic.Scene({triggerElement: "#projects h2", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle("#projects h2", "slideInUp") // add class toggle
	.addIndicators({name: "pins scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller);	

new ScrollMagic.Scene({triggerElement: ".project", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".project-1", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);

new ScrollMagic.Scene({triggerElement: ".project", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".project-2", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);		


new ScrollMagic.Scene({triggerElement: ".project-3", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".project-3", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);	

new ScrollMagic.Scene({triggerElement: ".project-4", duration: '100%', reverse: false,  triggerHook: 1,})
	.setClassToggle(".project-4", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);			

new ScrollMagic.Scene({triggerElement: "#featured", duration: '100%', reverse: false, triggerHook: 0.8,})
	.setClassToggle(".media-logos", "zoomIn") // add class toggle
	.addIndicators({name: "featyred scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);					


//Blogs

new ScrollMagic.Scene({triggerElement: "#featued-blogs h2", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle("#featured-blogs h2", "slideInUp") // add class toggle
	.addIndicators({name: "pins scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller);	

new ScrollMagic.Scene({triggerElement: ".blog-1", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".blog-1", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);

new ScrollMagic.Scene({triggerElement: ".blog-2", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".blog-2", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);		


new ScrollMagic.Scene({triggerElement: ".blog-3", duration: '100%', reverse: false, triggerHook: 1,})
	.setClassToggle(".blog-3", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);	

new ScrollMagic.Scene({triggerElement: ".blog-4", duration: '100%', reverse: false,  triggerHook: 1,})
	.setClassToggle(".blog-4", "slideInUp") // add class toggle
	.addIndicators({name: "project scene", colorEnd: "#FFFFFF"}) // add indicators (requires plugin)
	.addTo(controller4);
		