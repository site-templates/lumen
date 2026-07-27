{{-- Dynamic page: one URL per entry of resources/data/collections/writings.json, matched on `slug` — $writings is the entry. Add an entry there to publish; its `content` HTML is the body. --}}
<x-layouts.post
    :title="$writings->title"
    :description="$writings->description"
    :category="$writings->category"
    :date="$writings->dateFormatted"
    :readTime="$writings->readTime"
    :author="$writings->author"
    :authorImage="$writings->authorImage"
    :image="$writings->image"
    :imageAlt="$writings->alt">

    {!! $writings->content !!}

</x-layouts.post>
