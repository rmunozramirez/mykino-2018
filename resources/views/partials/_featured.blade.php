

	<div class="text-center py-3 home-intro">

	</div>

	<!-- Title -->

	<div class="container">
		<div class="dynamicTile row">
			@for ($o = 0; $o < 6; $o++)

				<div class="col-sm-2 col-xs-4">
					
					<div id="tile1" class="tile">
						<div class="carousel slide" data-ride="carousel">
							<!-- Wrapper for slides -->
							<div class="carousel-inner">

								<div class="item active text-center">
									<a href="{{route('films.show', $carousel[$o]->slug)}}">
										<img class="" width="100%" src="{{URL::to('/images/' . $carousel[$o]->image->image ) }}" >
									</a>

								</div>
								<div class="item text-center">
									<a href="{{route('films.show', $carousel[$o + 1]->slug)}}">
										<img class="" width="100%" src="{{URL::to('/images/' . $carousel[$o + 1]->image->image ) }}"  >
									</a>
								</div>

								<div class="item text-center">
									<a href="{{route('films.show', $carousel[$o + 2]->slug)}}">
										<img class="" width="100%" src="{{URL::to('/images/' . $carousel[$o + 2]->image->image ) }}"  >
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			@endfor

		</div>
	</div>

