<section>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Phone No</th>
                <th scope="col">Notification Message/th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notifications as $notification)
                    <tr>
                        <th scope="row">{{ $notification->id }}</th>
                        <td>{{ $notification->phone_number }}</td>
                        <td>{{ $notification->body}}</td>
                    </tr>  
                @endforeach
            </tbody>
        </table> 

    </div>
</section>