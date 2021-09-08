<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Order-Invoice</title>
       <style>
              header {
                     text-align: center;
                     background-color: #eee;
              }
              .content{
                     width: 90%;
                     margin: 0 auto
              }
              .text-right{
                     text-align: right;
              }
       </style>
</head>

<body>

       <header>
              <h4>ESHOP ORDER INVOICE</h4>
              <p>Order no: #</p>
       </header>
       <hr>
       <div class="content">
              <div class="card-body">
                     <h4>Order Details</h4>
                     <p>Order Id: {{$orderDetails->id}}</p>
                     <p>Payment Method: {{$orderDetails->payment_method}}</p>
                     <p>Order Delivery Status: {{$orderDetails->order_status}} </p>
                     <p>Customer Name: {{$orderDetails->customer->full_name}}</p>
                     <p>Customer Phone: {{$orderDetails->customer->phone}}</p>
                     <h4>Order Items</h4>
                     <table border="1" width="100%">
                            <tr>
                                   <th>Product Name</th>
                                   <th>Order Quantity</th>
                                   <th>Price</th>
                                   <th>Total Price</th>
       </tr>
                            <tbody>
                                   @foreach($items as $item)
                                   <tr>
                                          <td>{{$item->product->name}}</td>
                                          <td>{{$item->quantity}}</td>
                                          <td>{{$item->product_price}}</td>
                                          <td>{{$item->quantity * $item->product_price}}</td>
                                   </tr>
                                   @endforeach
                                   <tr>
                                          <td colspan="3" class="text-right">Sub Total: </td>
                                          <td>{{$orderDetails->sub_total}}</td>

                                   </tr>
                                   <tr>
                                          <td colspan="3" class="text-right">Grand Total:</td>
                                          <td>{{$orderDetails->grand_total}}</td>
                                   </tr>
                            </tbody>
                     </table>
              </div>
       </div>
</body>

</html>