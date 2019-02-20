<?php
 $googleSecret = env('ADBALITS_GA_SECRET', null);
 $hasSecret    = ! is_null($googleSecret);
?>
@if(isProductionEnv() && $hasSecret)
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134837138-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  var ADBALITS_GA_SECRET = "{{ $googleSecret }}";

  gtag('config', ADBALITS_GA_SECRET);
</script>
@endif
