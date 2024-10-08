<div class="tab-pane fade" id="cat2">
    <div class="row justify-content-center">
        @foreach($pizzapies as $pizzaItem)
        <!-- Loop over $pizzapies and reference each as $pizzaItem -->
        <div class="col-xl-4 col-md-6 col-sm-12">
            <!--=== Menu Item ===-->
            <div class="menu-item style-one mb-40">
                <div class="menu-thumbnail">
                    <img src="{{ asset($pizzaItem->image_path) }}" alt="{{ $pizzaItem->name}}">
                </div>
                <form action="{{ route('add-to-cart') }}" method="POST">
                    <div class="menu-info">
                        <h4><a href="menu-details.html">{{ $pizzaItem->name }}</a></h4>
                        <p>{{ $pizzaItem->description }}</p>
                        <p class="price">${{$pizzaItem->price}}</p>
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $pizzaItem->id }}">
                        <input type="hidden" name="meal_type" value="pizza"> <!-- Set meal_type to pizza -->
                        <button type="submit" class="theme-btn style-two">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach

    </div>
</div>