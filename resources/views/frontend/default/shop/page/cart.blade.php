<x-front-end.master>
    @section('page-title')
    Shopping Cart
    @endsection
    @section('breadcrumbs')
    <ul>
        <li>home</li>
        <li>Shopping Cart</li>
    </ul>
    @endsection
    @section('content')
    <div class="container cart">

        <div class="sixteen columns">

            <!-- Cart -->
            <table class="cart-table responsive-table" id="cart-page-item">
            </table>

            <!-- Apply Coupon Code / Buttons -->
            <table class="cart-table bottom">

                <tr>
                    <th>
                        <form action="{{route('discount.post')}}" method="POST" class="apply-coupon">
                            <x-front-end.message></x-front-end.message>
                            @csrf
                            <input class="search-field" type="text" placeholder="Coupon Code" name="code" required />
                            <input type="submit"  value="Apply Coupon">
                        </form>

                        <div class="cart-btns">
                            <a href="{{route('checkout')}}" class="button color cart-btns proceed">Proceed to
                                Checkout</a>
                        </div>
                    </th>
                </tr>

            </table>
        </div>


        <!-- Cart Totals -->
        <div class="eight columns cart-totals">
            <h3 class="headline">Cart Totals</h3><span class="line"></span>
            <div class="clearfix"></div>

            <table class="cart-table margin-top-5">

                <tr>
                    <th>Cart Subtotal</th>
                    <td><strong><span id="cart-total-amount">{{$settings->currency_prefix}} 00.00</span></strong></td>
                </tr>

            </table>
            <br>
            <!-- <a href="#" class="calculate-shipping"><i class="fa fa-arrow-circle-down"></i> Calculate Shipping</a> -->
        </div>

    </div>

    <div class="margin-top-40"></div>
    @endsection
</x-front-end.master>
