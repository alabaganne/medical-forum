<x-app-layout>
	<div class="max-w-4xl bg-white shadow rounded my-12 mx-auto">
		<div class="p-6 border-b">
			<h3 class="text-xl font-semibold">Create a New Post</h3>
			<p class="text-sm text-gray-400 font-medium">Fill out the form below to add a new post.</p>
		</div>
		<div class="p-6">
			<form action="{{ route('posts.store') }}" method="POST" class="text-sm">
				@csrf
				<div>
					<label for="title" class="text-gray-600 mb-1 block">Title:</label>
					<input type="text" name="title" id="title" class="border border-gray-200 rounded shadow-sm w-3/4 block">
				</div>
				<div class="mt-6">
					<label for="body" class="text-gray-600 mb-1 block">Body:</label>
					<textarea name="body" id="body" cols="30" rows="8" class="border border-gray-200 rounded shadow-sm w-full block"></textarea>
				</div>
				<div class="flex justify-between items-center mt-6">
					<p class="text-sm text-gray-500">Go back <a class="text-blue-500 hover:text-blue-600 font-medium cursor-pointer" :href="route('topics.index')">Home</a></p>
					<button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-5 rounded shadow-sm">Submit</button>
				</div>
			</form>
		</div>
	</div>
</x-app-layout>