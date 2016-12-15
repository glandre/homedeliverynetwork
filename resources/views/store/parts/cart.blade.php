@if(count(cart()->products) > 0)
    @foreach(cart()->products as $product)
        <!-- Item -->
            <div class="item">
                <a href="/products/{{ $product->id }}" class="item-thumb">
                    <img src="{{{ $product->picture }}}" alt="{{{ $product->name }}}">
                </a>
                <div class="item-details">
                    <h3 class="item-title"><a href="/products/{{ $product->id }}">{{{ $product->name }}}</a></h3>
                    <h4 class="item-price">${{{ $product->price }}}</h4>
                    <div class="count-input">
                        <a class="incr-btn" onclick="decreaseQuantity({{{ $product->id }}})"
                           data-action="decrease" href="#">–</a>
                        <input class="quantity" id="quantity_input_{{{ $product->id }}}"
                               type="text" value="{{{ $product->pivot->quantity }}}">
                        <a class="incr-btn" onclick="increaseQuantity({{{ $product->id }}})"
                           data-action="increase" href="#">+</a>
                    </div>
                </div>
                {{Form::open([
                    'url' => "store/cart/remove/{$product->id}",
                    'method' => 'delete',
                    'id' => 'delete' . $product->id,
                    'name' => 'delete' . $product->id
                ])}}
                <a href="#" onclick="document.getElementById('delete{{{ $product->id }}}').submit()"
                   class="item-remove" data-toggle="tooltip" data-placement="top" title=""
                   data-original-title="Remove">
                    <i class="material-icons remove_shopping_cart"></i>
                </a>
                {{Form::close ()}}
            </div>
            <!-- .item -->
        @endforeach
    @else
        Add a product to your shopping cart!
@endif