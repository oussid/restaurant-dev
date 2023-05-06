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
    <p><span class="bold">Name: </span>{{$config->name}}</p> 
    <p><span class="bold">Email: </span>{{$config->email}}</p>
    <p><span class="bold">Phone: </span>{{$config->phone}}</p>

    <h3>ORDER DETAILS:</h3>
    <p><span class="bold">Number: </span>#s5d1f3s5d</p> 
    <p><span class="bold">Date: </span>2022-05-02 19:14:11</p> 
    <p><span class="bold">Type: </span>Delivery</p> 

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
            <tr>
                <td>
                    #sdjfsd6546
                </td>
                <td>
                    Banana Joe
                </td>
                <td>
                    1
                </td>
                <td>
                    $13.99
                </td>
                <td style="background-color: #cae1e4;">
                    $13.99
                </td>
            </tr>


            <tr>
                <td colspan="3" style="border:none;">
                    
                </td>
                <th >
                    TOTAL PAY
                </th>
                <td style="background-color: #59a2ad;">
                    $13.99
                </td>
            </tr>
        </tbody>
    </table>
     <p style="text-align: center;">Thank you for your order.</p>
</div>