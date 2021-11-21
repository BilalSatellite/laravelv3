@props(['id'])

<li class=" dropdown user user-menu">
    <a id="{{ $id }}" {!! $attributes->merge(['class' => 'waves-effect waves-light rounded dropdown-toggle p-0']) !!} role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Hi,{{ Auth::user()->name }}">
        {{ $trigger }}
    </a>

    <ul class="dropdown-menu animated flipInX" aria-labelledby="{{ $id }}">
        {{ $content }}
    </ul>
</li>
