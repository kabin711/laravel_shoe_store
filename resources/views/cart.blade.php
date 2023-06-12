<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>
    </head>
    <body>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 


                <section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Add to Cart</h3>
          
        </div>
        @php
       $total=0;
    @endphp
   
        @foreach ($cart as $cart)

        <div   class="d-flex card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
            
               
                  <img src="{{$cart->image}}"
                  class="img-fluid rounded-3"  style="  height: 100px; width: 100px; border-radius: 10%;" alt="shoes " >
         
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{$cart->name}} </p>
                
              </div>

              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">Quantity:{{$cart->quantity}}</p>
                
              </div>
              
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">Rs{{$cart->price*$cart->quantity}}</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="{{route('deletecart',$cart->id)}}" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
        
    

       @php
   $total= $cart->price*$cart->quantity + $total;
 @endphp


@endforeach   







       

<ul>
          <li class="cart-item">
            
            <span class="cart-item-price">Total:Rs.  {{$total}}</span>
          </li>
          
        </ul>



       
     

        <div class="card">
          <div class="card-body mt-4 mb-4">
            <button type="button" id="payment-button" class="btn btn-warning btn-block btn-lg">Proceed to Pay with Khalti</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

                
                </div>
            </div>
        </div>
    </div>



  <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
  <script>
    var config = {
        // replace the publicKey with yours
        "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
        "productIdentity":" {{auth()->user()->id}}",
        "productName": "{{auth()->user()->name}}",
        "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
        "paymentPreference": [
            "KHALTI",
            "EBANKING",
            "MOBILE_BANKING",
            "CONNECT_IPS",
            "SCT",
            ],
        "eventHandler": {
            onSuccess (payload) {
                // hit merchant api for initiating verfication
                console.log(payload);
                if(payload.idx)
                {
                    $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN' : '{{csrf_token()}}',
                        }
                    });


                    $.ajax({
                         method: 'POST', 
                         url: "", 
                         data: payload, 
                         success: function(response) 
                         {       
                                         
                            console.log(response);
                             window.location = response.redirectto;
                     
                            }
                        });
                     }

                
            },
            onError (error) {
                console.log(error);
            },
            onClose () {
                console.log('widget is closing');
            }
        }
    };

    var checkout = new KhaltiCheckout(config);
    var btn = document.getElementById("payment-button");
    btn.onclick = function () {
        // minimum transaction amount must be 10, i.e 1000 in paisa.
        checkout.show({amount: 1000});
    }
</script>
 {{-- khalti end --}}
      
    </body>
    </html>





</x-app-layout>
