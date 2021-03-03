<div class="xl:w-1/2 w-full">
    <form class="my-1 flex" wire:submit.prevent="sendComment">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's up?" wire:model.lazy="comment">
        <div class="py-2">
            <button class="p-2 bg-green-500 w-20 rounded shadow text-white" type="submit">Send</button>
        </div>
    </form>
    @foreach($comments as $comment)
    <div class="rounded border shadow p-3 my-2">
        <div class="flex justify-start my-2">
            <p class="font-bold text-lg">{{$comment['creator']}}</p>
            <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment['created_at']}}</p>
        </div>

        <p class="text-gray-800">{{$comment['body']}}</p>
    </div>
    @endforeach
</div>
