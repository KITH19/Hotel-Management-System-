<form method="POST" action="{{ route('admin.bookings.store') }}">
    @csrf
    <input type="hidden" name="user_id" >
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="room_type">Room Type:</label>
        <input type="text" id="room_type" name="room_type">
    </div>
    <div>
        <label for="check_in_date">Check-in Date:</label>
        <input type="date" id="check_in_date" name="check_in_date" >
    </div>
    <div>
        <label for="check_out_date">Check-out Date:</label>
        <input type="date" id="check_out_date" name="check_out_date">
    </div>
    <button type="submit">Submit</button>
</form>
