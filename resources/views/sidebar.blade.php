<div class="categorious">
    <div class="cate-heading">
        <p>CATEGORIES</p>
    </div>
    <div class="items">
        <ul>
            @foreach ($allCategories as $r)
                <a href="{{url('buynow/'.$r->id)}}"><li>{{$r->categoryname}}</li></a>   
            @endforeach
        </ul>
    </div>
</div>