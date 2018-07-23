<!DOCTYPE html>
<html>
<head>
	<title>Locate a store</title>
</head>
<body background="background\benitos.jpg">

<br>
	<div class="fluid-container">
	<!--Modal--><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                   <h1 style="text-align: center;"><b>*****Location For the Store*****</b></h1>
                  </div>
                  <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.093893845251!2d77.31936771462851!3d28.566943093798223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce4487fd1275d%3A0x2d367f00a0fd11f3!2sSector+18%2C+Noida%2C+Uttar+Pradesh+201301!5e0!3m2!1sen!2sin!4v1529178377021" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen"  style="overflow: hidden;"  >Loading&amp;#8230;</iframe>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
	jQuery(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
console.log("document is ready");
  
  
  jQuery('.btn[href^=#]').click(function(e){
    e.preventDefault();
    var href = jQuery(this).attr('href');
    jQuery(href).modal('toggle');
  });

  

});  
</script>
	
</body>
</html>