<x-app-layout>

	<div class="container py-8 ">
		<div class="grid grid-cols-3 gap-6">
			@foreach($posts as $post)
				<img 
					src="{{Storage::url($post->image->url)}}"
					class=" @if($loop->first) col-span-2 @endif w-full h-80 bg-cover bg-center">
					<div class="w-full h-full px-8 flex flex-col justify-center">
						<h1 class="text-4xl text-white leading-8 font-bold">
							<a href="">
								{{$post->name}}
							</a>
						</h1>
					</div>
			@endforeach
		</div>
	</div>

</x-app-layout>