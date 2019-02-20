<?php
 $googleSecret = env('ADBALITS_GA_SECRET', null);
 $hasSecret    = ! is_null($googleSecret);
?>
@if(isProductionEnv() && $hasSecret)
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{$googleSecret}}"></script>
<script>
  var ADBALITS_GA_SECRET = "{{ $googleSecret }}";

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', ADBALITS_GA_SECRET);
</script>
@endif
