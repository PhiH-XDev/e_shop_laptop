@extends('layout')
@section('tieuDe', 'Cart')

@section('conten')
<section class="page-banner-area">
    <div class="col-xs-12">
        <div class="page-banner-brief">
            <h2>Shopping Cart</h2>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Shopping Cart</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="content">
    <div class="cart-area margin-70">
        <div class="container">
            <form action="{{ route('cart.update') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="cart-table-head">
                        <tr>
                            <td class="text-center">Sản Phẩm</td>
                            <td class="text-center">Đơn Giá</td>
                            <td class="text-center">Số Lượng</td>
                            <td class="text-center">Tổng Tiền</td>
                            <td class="text-center">Xóa</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $c)
                        <tr>
                            <td class="text-left shopping-cart-breif">
                                <a href="#"><img src="{{$c['hinh']}}" alt="#" style="width:68px; height:68px" /></a>
                                <h5><a href="#" class="text-uppercase">{{$c['ten_sp']}}</a></h5>
                                <p>Color: Blue</p>
                                <p>Size: SL</p>
                            </td>
                            <td class="text-center">
                                <div class="custom-cart">{{ number_format($c['gia'], 0, ',', '.') }} VNĐ</div>
                                <input type="hidden" class="price" value="{{ $c['gia'] }}">
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center align-items-center quantity-wrapper">
                                    <button type="button" class="btn btn-light px-2 dec">-</button>
                                    <input type="number" name="qty[{{$c['id_sp']}}]" min="1" value="{{ $c['soluong'] }}" 
                                      class="cart-plus-minus-box text-center" style="width: 50px; height: 38px; margin: 0 5px;" />
                                    <button type="button" class="btn btn-light px-2 inc">+</button>
                                </div>
                            </td>
                            <td class="text-center line-total">
                                {{ number_format($c['thanhtien'], 0, ',', '.') }} VNĐ
                            </td>
                            <td class="text-center remove">
                                <a href="/xoasp/{{$c['id_sp']}}"><i class="pe-7s-close"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="shipping-discount-details mt-4">
        <div class="row">
            <div class="col-sm-4 col-sm-12">
                <label class="custom-form custom-submit active-submit">Mã giảm giá</label>
                <p>Nhập mã giảm giá bên dưới</p>
                <input type="text" class="custom-form" placeholder="Nhập vào Đây" />
                <input type="submit" class="custom-submit-2" value="Apply Coupon" />
            </div>
            <div class="col-sm-4 col-sm-12">
                <label class="custom-form custom-submit active-submit">Tóm tắt đơn hàng</label>
                <div class="order">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-left">Số Lượng</td>
                                <td class="text-right total-qty">{{ $tongsoluong }}</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-right custom-td"><strong>Tổng Tiền:</strong></td>
                                <td class="text-right custom-td"><strong class="total-amount">{{ number_format($tongtien, 0, ',', '.') }} VNĐ</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

            {{-- Hai nút trong form --}}
            <div class="button-group">
                <button type="submit" name="action" value="update" class="btn btn-update">Update Card</button>
                <button type="submit" name="action" value="checkout" class="btn btn-checkout">Checkout</button>
            </div>

        </div>
    </div>

    {{-- Mã giảm giá và tóm tắt --}}
    
</form>

        </div>
    </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function () {
        console.log('script loaded');

    function updateTotals() {
        let total = 0;
        let totalQty = 0;

        document.querySelectorAll("tbody tr").forEach(row => {
            const priceInput = row.querySelector(".price");
            const qtyInput = row.querySelector(".cart-plus-minus-box");

            if (!priceInput || !qtyInput) return;

            const price = parseInt(priceInput.value);
            let qty = parseInt(qtyInput.value);

            if (isNaN(qty) || qty < 1) qty = 1;
            qtyInput.value = qty;

            const lineTotal = price * qty;
            const lineTotalCell = row.querySelector(".line-total");
            if (lineTotalCell) {
                lineTotalCell.innerText = lineTotal.toLocaleString('vi-VN') + " VNĐ";
            }

            total += lineTotal;
            totalQty += qty;
        });

        const totalAmountEl = document.querySelector(".total-amount");
        const totalQtyEl = document.querySelector(".total-qty");

        if (totalAmountEl) totalAmountEl.innerText = total.toLocaleString('vi-VN') + " VNĐ";
        if (totalQtyEl) totalQtyEl.innerText = totalQty;
    }

    document.querySelectorAll(".cart-plus-minus-box").forEach(input => {
        input.addEventListener("change", function () {
            if (parseInt(this.value) < 1 || isNaN(this.value)) this.value = 1;
            updateTotals();
        });
    });

    document.querySelectorAll(".inc").forEach(btn => {
        btn.addEventListener("click", function () {
            console.log('sdasdasdas');
            
            const input = this.closest(".quantity-wrapper").querySelector(".cart-plus-minus-box");
            input.value = parseInt(input.value) + 1;
            input.dispatchEvent(new Event('change'));
        });
    });

    document.querySelectorAll(".dec").forEach(btn => {
        btn.addEventListener("click", function () {
            const input = this.closest(".quantity-wrapper").querySelector(".cart-plus-minus-box");
            input.value = Math.max(1, parseInt(input.value) - 1);
            input.dispatchEvent(new Event('change'));
        });
    });

    updateTotals();
});
</script>
@endsection

