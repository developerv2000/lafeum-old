<div class="search search--selectizeable">
    <select class="selectize-singular--linked" placeholder="Поиск...">
        <option></option>
        @foreach ($allItems as $item)
            <option value="{{ route($modelTag . '.edit', $item->id) }}">{{ $item->{$titleColumn} }}</option>
        @endforeach
    </select>
</div>
