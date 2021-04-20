<main id="sj-main" class="sj-main sj-haslayout sj-sectionspace">
	@yield('main-one')
	 <div id="sj-twocolumns" class="sj-twocolumns">
		 <div class="container">
			 <div class="row">
				 <div class="col-12 col-sm-12 col-md-8 col-lg-9">
					 <div id="sj-content" class="sj-content">			
					@yield('edit-start')
					@yield('previous')
					@yield('books')
					@yield('article')
					 </div>
				 </div>
				@yield('aside')
			 </div>
		 </div>
	 </div>
 </main>