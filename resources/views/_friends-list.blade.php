<h3 class="has-text-weight-bold is-size-3 mb-4">Friends</h3>

<ul>
    @foreach(range(1, 8) as $index)
    <li>
        <div>
            <img src="https://i.pravatar.cc/40?img=49" alt="Friend profile picture" class="rounded-full p-1">
            Ada Lovelace
        </div>
    </li>
    @endforeach

    <li>
        <div>
            <img src="https://i.pravatar.cc/40?img=12" alt="Friend profile picture" class="rounded-full p-1">
            Setsuna F. Seiei
        </div>
    </li>

    <li>
        <div>
            <img src="https://i.pravatar.cc/40?img=1" alt="Friend profile picture" class="rounded-full p-1">
            Padme Amidala
        </div>
    </li>
</ul>