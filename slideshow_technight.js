
var image1=new Image()
image1.src="image1.jpg"
var image2=new Image()
image2.src="image2.jpg"
var image3=new Image()
image3.src="image3.jpg"
var image4=new Image()
image4.src="image4.jpg"
var image5=new Image()
image5.src="image5.jpg"
var image6=new Image()
image6.src="image6.jpg"
var image7=new Image()
image7.src="image7.jpg"
var image8=new Image()
image8.src="image8.jpg"
var image9=new Image()
image9.src="image9.jpg"
var image10=new Image()
image10.src="image10.jpg"
var image11=new Image()
image11.src="image11.jpg"
var image12=new Image()
image12.src="image12.jpg"
var image=new Image()
image13.src="image13.jpg"
var image=new Image()
image14.src="image14.jpg"
var image=new Image()
image15.src="image15.jpg"
var image=new Image()
image16.src="image16.jpg"
var image=new Image()
image17.src="image17.jpg"
var image=new Image()
image18.src="image18.jpg"
var image=new Image()
image19.src="image19.jpg"
var image=new Image()
image20.src="image20.jpg"
var image=new Image()
image21.src="image21.jpg"
var image=new Image()
image22.src="image22.jpg"
var image=new Image()
image23.src="image23.jpg"
var image=new Image()
image24.src="image24.jpg"
var image=new Image()
image25.src="image25.jpg"
var image=new Image()
image26.src="image26.jpg"
var image=new Image()
image27.src="image27.jpg"
var image=new Image()
image28.src="image28.jpg"
var image=new Image()
image29.src="image29.jpg"
var image=new Image()
image30.src="image30.jpg"
var image=new Image()
image31.src="image31.jpg"
var image=new Image()
image32.src="image32.jpg"
var image=new Image()
image33.src="image33.jpg"
var image=new Image()
image34.src="image34.jpg"
var image=new Image()
image35.src="image35.jpg"
var image=new Image()
image36.src="image36.jpg"
var image=new Image()
image37.src="image37.jpg"
var image=new Image()
image38.src="image38.jpg"
var image=new Image()
image39.src="image39.jpg"
var image=new Image()
image40.src="image40.jpg"
var image=new Image()
image41.src="image41.jpg"
var image=new Image()
image42.src="image42.jpg"
var image=new Image()
image43.src="image43.jpg"
var image=new Image()
image44.src="image44.jpg"
var image=new Image()
image45.src="image45.jpg"
var image=new Image()
image46.src="image46.jpg"
var image=new Image()
image47.src="image47.jpg"




jQuery("document").ready(function(){
    jQuery("#slider > img:gt(0)").hide();
     jQuery("#button-next").click(function() { 
        jQuery("#slider > img:first")
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .appendTo("#slider");
  });
});

jQuery("document").ready(function(){
    jQuery("#slider > img:gt(0)").hide();
     jQuery("#button-previous").click(function() { 
        jQuery("#slider > img:last")
    .fadeOut(1000)
    .next()
    .fadeIn(1500)
    .appendTo("#slider");
  });
});


