@include('admin.header')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
    }

    .wrapper {
        padding: 20px;
    }

    .market-updates {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 20px;
    }

    .col-md-3 {
        margin-bottom: 20px;
    }

    .market-update-block {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
    }

    .market-update-icon {
        font-size: 48px;
        margin-bottom: 15px;
    }

    .market-update-info h3 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .market-update-info p {
        margin: 0;
        color: #777;
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Visitors</h4>
                        <h3>13,500</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users" ></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Khách Hàng</h4>
                        <h3>1B</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Doanh Thu</h4>
                        <h3>15B</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Đơn Hàng</h4>
                        <h3>1500B</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </section>
@include('admin.footer')
