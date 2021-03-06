<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update delivey</title>
    <link rel="stylesheet" href="{{ asset('css/add-farmer.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
</head>
<body>
    <div class="container">
        <div class="header"><h1>Milk Collection & Distribution System</h1></div>
        <div class="nav-bar">
          
            <a class="nav-btn" href="{{ url('/home') }}">Home</a>
            <a class="nav-btn" href="{{ url('/farmer-list') }}">Farmers</a>
            <a class="nav-btn" href="{{ url('/employees') }}">Employees</a>
            <a class="nav-btn" href="{{ url('/collection-list') }}">Collection</a>
            <a class="nav-btn" href="{{ url('/delivery') }}">Delivery</a>
            <a class="nav-btn" href="{{ url('payments/') }}">Payment</a>
            {{-- <a class="nav-btn" href="{{ url('/report') }}">Report</a> --}}
            {{-- <a class="nav-btn" href="#">Settings</a> --}}
        </div>
        <div class="reg-form">
            <div class="title">Update Delivery</div>
        <div class="content">
          <form action="/delivery-update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            <div class="user-details">
              <div class="input-box">
                <span class="details">Company Name</span>
                <input type="text" name="company_name" placeholder="Enter the name" value="{{ $data['company_name'] }}" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Id-No:</span>
                <input type="text" name="id" placeholder="Enter ID" required>
              </div> --}}
              <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="address" placeholder="Enter the address"
                 value="{{ $data['address'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Milk Amount</span>
                <input type="text" name="milk_amount" placeholder="Enter amount" 
                value="{{ $data['milk_amount'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Price</span>
                <input type="text" name="price" placeholder="Enter the price" value="{{ $data['price'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Delivery Status</span>
                <input type="text" name="delivery_status" placeholder="delivery status" value="{{ $data['delivery_status'] }}" required>
              </div>
              <div class="input-box">
                <span class="details">Payment Status</span>
                <input type="text" name="payment_status" placeholder="Payment status" value="{{ $data['payment_status'] }}" required>
              </div>
              {{-- <div class="input-box">
                <span class="details">Farmer's Phone NO:</span>
                <input type="text" name="farmers_phone" placeholder="Phone number" value="{{ $data['farmers_phone'] }}" required>
              </div> --}}
            </div>
            <div class="button">
              <input type="submit" value="Update">
            </div>
          </form>
        </div>
      </div>
      <div class="footer"></div>    
    </div>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>
</html>