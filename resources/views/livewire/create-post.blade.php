<div>
    {{-- Success is as dangerous as failure. --}}
    <div>
        <h1>Title: "{{ $title }}"</h1>
    </div>

    <div>
        @foreach ($posts as $post)
            <div wire:key="{{ $post['id'] }}">
                <h2>{{ $post['title'] }}</h2>
            </div>
        @endforeach
    </div>
</div>
