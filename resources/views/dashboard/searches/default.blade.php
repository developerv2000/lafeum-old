<div class="search search--default">
    {{-- Search action switches between index pages & trash pages --}}
    <form class="search__form" action="{{ url()->current() }}" method="GET">
        <input class="search__input" type="text" name="keyword" value="{{ $params['keyword'] }}" placeholder="Поиск..." minlength="2" required>
    </form>
</div>
