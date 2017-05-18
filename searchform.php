<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<span class="screen-reader-text">Search</span>
	<input type="search" class="u-wide  search-form__search" placeholder="Search…" value="<?php echo get_search_query(); ?>" name="s">
	<button class="search-form__submit  genericon  genericon-search" title="Search"><span class="screen-reader-text">Search</span></button>
</form>