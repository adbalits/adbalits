<?php
 $secrets = 'foo'; // #todo #cathat this probably needs to be secret/rehashed
?>
@if(isProductionEnv())
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134837138-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134837138-1');
</script>
@endif
