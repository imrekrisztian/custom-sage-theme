<div class="w-1/4 shadow-md bg-indigo-500 hover:bg-cyan-600">
  @if ($text_field)
    <h1 class="text-2xl">{{$text_field}}</h1>
    @else
    <p>No title found!</p>
  @endif

  @if ($items)
    <ul>
      @foreach ($items as $item)
        <li>{{ $item['item'] }}</li>
      @endforeach
    </ul>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif

  <div>
    <InnerBlocks />
  </div>
</div>
