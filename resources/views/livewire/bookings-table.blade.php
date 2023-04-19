<div class="table-container">
    <div class="table-container-top">
        <div class="table-container-top-title">
        </div>
        <div class="table-container-top-search">
            <input wire:model='search' type="text" placeholder="Search">
        </div>
    </div>
    <div class="table-container-main">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Details</th>
                    <th>Date & Time</th>                   
                    <th>Guests</th>                    
                    <th>Table Number</th>                    
                    <th>Reservation Type</th>                    
                    <th>Note</th>                    
                    <th>Action</th>                    
                </tr>

            </thead>
            <tbody>
                @forelse ($bookings as $booking)
                    <tr>
                        <td> {{$booking->id}} </td>
                        <td>
                            {{$booking->contact_name}}  <br> {{$booking->contact_mobile}}  <br> {{$booking->contact_email}} 
                        </td>
                        <td> {{$booking->booking_date}}  <br> {{$booking->booking_time}} </td>
                        <td> {{$booking->guests_number}} </td>
                        <td> {{$booking->table->number}} </td>
                        <td> {{$booking->booking_type}} </td>
                        <td> {{$booking->special_request}} </td>
                        <td> actions </td>
                    </tr>
                @empty
                    <tr><td colspan='99'>No bookins to show</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="table-container-bottom">
        {{$bookings->links('pagination-links')}}
    </div>
</div>  



