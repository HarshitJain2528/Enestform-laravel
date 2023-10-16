<div class="categorious">
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>
    <div class="items">
        <ul>
            @foreach ($category as $r)
                <li>{{$r->categoryname}}</li>  
            @endforeach
        </ul>
    </div>
</div>