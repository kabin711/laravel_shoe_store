<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('order') }}
        </h2>
    </x-slot>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      .order-details {
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 20px;
      }
      .order-details h4 {
        margin-top: 0;
      }
      .order-details p {
        margin-bottom: 5px;
      }
      .product-details {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }
      .product-details img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
      }
      .product-details .product-name {
        font-weight: bold;
      }
      .product-details .product-id {
        margin-right: 10px;
      }
      .product-details .product-price {
        margin-right: 10px;
      }
      .product-details .product-quantity {
        margin-right: 10px;
      }
      .product-details .btn {
        margin-right: 10px;
      }
    </style>

    
    <div class="container">
      <h1>Your Order Details</h1>
      <div class="order-details">
        <h4>Order #12345</h4>
        <p>Date: January 1, 2023</p>
        <p>Status: Shipped</p>
        <p>Total Amount: $100</p>
        <div class="product-details">
                           <img src="https://th.bing.com/th/id/R.e78d75a1861b1d9862d018d2b0ee3a30?rik=JJjvlrlLJWOLHA&riu=http%3a%2f%2ftheshoebuff.com%2fwp-content%2fuploads%2f2010%2f06%2fRed-Wing-Shoes-Classic-Moc-Toe-Boot-01.jpg&ehk=0pVrxZFU82P2%2fsqoWIOa6bzgcNyjMZYmg%2f4Z%2f61%2bxqo%3d&risl=&pid=ImgRaw&r=0"
  
          <div class="product-info">
            <p class="product-name">Product Name</p>
            <p class="product-id">Product ID: 123</p>
            <p class="product-price">Price: $50</p>
            <p class="product-quantity">Quantity: 2</p>
            <button class="btn btn-primary">Add</button>
            <button class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
       </div>
    
  
    <div class="container">
  
      <div class="order-details">
        <h4>Order #12345</h4>
        <p>Date: January 1, 2023</p>
        <p>Status: Shipped</p>
        <p>Total Amount: $100</p>
        <div class="product-details">
                           <img src="https://th.bing.com/th/id/R.e78d75a1861b1d9862d018d2b0ee3a30?rik=JJjvlrlLJWOLHA&riu=http%3a%2f%2ftheshoebuff.com%2fwp-content%2fuploads%2f2010%2f06%2fRed-Wing-Shoes-Classic-Moc-Toe-Boot-01.jpg&ehk=0pVrxZFU82P2%2fsqoWIOa6bzgcNyjMZYmg%2f4Z%2f61%2bxqo%3d&risl=&pid=ImgRaw&r=0"
  
          <div class="product-info">
            <p class="product-name">Product Name</p>
            <p class="product-id">Product ID: 123</p>
            <p class="product-price">Price: $50</p>
            <p class="product-quantity">Quantity: 2</p>
            <button class="btn btn-primary">Add</button>
            <button class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
      
    
    </div>

    </x-app-layout>





