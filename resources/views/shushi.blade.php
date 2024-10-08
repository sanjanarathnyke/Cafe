<div class="tab-pane show active fade" id="cat1">
    <div class="row justify-content-center">
        @foreach($shushiRolls as $menuItem)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <!--=== Menu Item ===-->
            <div class="menu-item style-one mb-40">
                <div class="menu-thumbnail">
                    <img src="{{ asset($menuItem->image_path) }}" alt="{{ $menuItem->name }}">
                </div>
                <form action="{{ route('add-to-cart') }}" method="POST">
                    <div class="menu-info">
                        <h4><a href="menu-details.html">{{ $menuItem->name }}</a></h4>
                        <p>{{ $menuItem->description }}</p>
                        <p class="price">${{$menuItem->price}}</p>
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $menuItem->id }}">
                        <input type="hidden" name="meal_type" value="sushi"> <!-- Set meal_type -->
                        <button type="submit" class="theme-btn style-two">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>