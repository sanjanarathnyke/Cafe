<div class="tab-pane fade" id="cat3">
    <div class="row justify-content-center">
        @foreach($burgerbuns as $burgerItem)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <!--=== Menu Item ===-->
            <div class="menu-item style-one mb-40">
                <div class="menu-thumbnail">
                    <img src="{{ asset($burgerItem->image_path) }}" alt="{{ $burgerItem->name }}">
                </div>
                <form action="{{ route('add-to-cart') }}" method="POST">
                    <div class="menu-info">
                        <h4><a href="menu-details.html">{{ $burgerItem->name }}</a></h4>
                        <p>{{ $burgerItem->description }}</p>
                        <p class="price">${{ number_format($burgerItem->price, 2) }}</p>
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $burgerItem->id }}">
                        <input type="hidden" name="meal_type" value="burger"> <!-- Add this line -->
                        <button type="submit" class="theme-btn style-two">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>