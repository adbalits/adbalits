<?php
    $formUrl = $router->books()->url();
?>
<form method="GET" action="{{ $formUrl }}">
    <input class="books_search" name="keyword" type="text" placeholder="Search by title or author"/>
    <button class="btn btn-outline-primary" type="submit">
        Search
    </button>
</form>