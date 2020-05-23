
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <?php 
    if( isset($page->plugins) && !empty($page->plugins) ): 
      foreach($page->plugins as $plugin):
        echo "<script src='{$plugin}'></script>\n";
      endforeach;
    endif; 
  ?> 
  
  <script src="assets/build/js/app/aap.js?v=<?php echo $version; ?>"></script>
  <script src="assets/build/js/app/lowes.js?v=<?php echo $version; ?>"></script>
  <script src="assets/build/js/app/jeopardy.js?v=<?php echo $version; ?>"></script>
  <script src="assets/build/js/app/liberty-mutual.js?v=<?php echo $version; ?>"></script>
  <script src="assets/build/js/<?php echo $page->type; ?>.min.js?v=<?php echo $version; ?>"></script>
  
</body>
</html>  
 