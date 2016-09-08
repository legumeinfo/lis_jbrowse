<!-- Title and guide text  -->
<?php //echo $url_source; ?>


<!--  --------button for URL display-----------   -->
<div>
  <button onclick="javascript:
      var location_iframe=document.getElementById('frameviewer').contentWindow.location; 
console.log('location-iframe: '+location_iframe);
      var url_iframe=location_iframe.href;  //URL of the iframe
      var query_string_iframe = location_iframe.search;
      /*var url_drupal = window.location.href;  // URL of our drupal node containing the iframe */
      var url_drupal = window.location.origin+window.location.pathname;  // URL of our drupal node containing the iframe  
      var drupalizedJbrowseURL=url_drupal+query_string_iframe; 
      document.getElementById('showURL_p').innerHTML=drupalizedJbrowseURL; ">
      Show URL for Bookmark
  </button>
  <p id="showURL_p"  style="background:#EDEDED;"></p>
</div>
<hr/>

<!--  ------------iframe jbrowse-----------------  -->
<div>
<iframe id="frameviewer" frameborder="0" width="1200" height="2500" scrolling="yes"  src="<?php  echo($url_source);  ?>"  name="frameviewer">
    <!-- jbrowse place holder -->
</div>


<!-- SCRATCH PAD  -->

