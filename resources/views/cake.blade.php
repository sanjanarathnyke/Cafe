<div class="tab-pane fade" id="cat6">
    <div class="row justify-content-center">
        @foreach($cakeitems as $cake)
        <div class="col-xl-4 col-md-6 col-sm-12">
            <!--=== Menu Item ===-->
            <div class="menu-item style-one mb-40">
                <div class="menu-thumbnail">
                    <img src="{{ asset($cake->image_path) }}" alt="{{ $cake->name }}">
                </div>
                <form action="{{ route('add-to-cart') }}" method="POST">
                    <div class="menu-info">
                        <h4><a href="menu-details.html">{{ $cake->name }}</a></h4>
                        <p>{{ $cake->description }}</p>
                        <p class="price">${{ $cake->price }}</p>
                        @csrf
                        <input type="hidden" name="meal_id" value="{{ $cake->id }}">
                        <input type="hidden" name="meal_type" value="cake"> <!-- Set meal_type to 'cake' -->
                        <button type="submit" class="theme-btn style-two">Add To Cart</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>