<style>
    table{
        width: 100%;
        margin: 1rem 0;
    }
    
    table, tr, td, th{
        border-collapse: collapse;
        border: 1px solid black
    }

    td, th{
        padding: .5rem;
    }

    p{
        margin-bottom: 6px;
        margin-top: 0;
    }

    td{
        text-align: center;
    }

    .bold{
        font-weight: 600;
    }
</style>

<div class="pdf-container">
    <h1>{{$config->name}}</h1>
    <p>{{$config->address}}</p>
    <p>{{$config->city}}</p>
    <p>{{$config->email}}</p>
    <p>{{$config->phone}}</p>

    <h3>ORDERED BY:</h3>
    <p><span class="bold">Name: </span>{{$order->user->name}}</p> 
    <p><span class="bold">Email: </span>{{$order->user->email}}</p>
    <p><span class="bold">Phone: </span>{{$order->user->mobile}}</p>

    <h3>ORDER DETAILS:</h3>
    <p><span class="bold">Number: </span>{{$order->order_number}}</p> 
    <p><span class="bold">Date: </span>{{$order->created_at}}</p> 
    <p><span class="bold">Type: </span>{{$order->delivery_type}}</p> 

    <table>
        <thead>
            <tr style="background-color: #59a2ad;">
                <th>
                    PRODUCT
                </th>
                <th>
                    CATEGORY
                </th>
                <th>
                    QTY
                </th>
                <th>
                    UNIT PRICE
                </th>
                <th>
                    TOTAL
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($order->products as $product)
                
            <tr>
                <td>
                    {{$product->name}}
                </td>
                <td>
                    {{$product->category->name}}
                </td>
                <td>
                    {{$product->pivot->quantity}}
                </td>
                <td>
                    ${{$product->price}}
                </td>
                <td style="background-color: #cae1e4;">
                    ${{$product->pivot->quantity * $product->price}}
                </td>
            </tr>
            @endforeach
            

            <tr>
                <td colspan="3" style="border:none;">
                    
                </td>
                <th >
                    TOTAL PAY
                </th>
                <td style="background-color: #59a2ad;">
                    ${{$order->total}}
                </td>
            </tr>
        </tbody>
    </table>
     <p style="text-align: center;">Thank you for your order.</p>
</div>