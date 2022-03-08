<div>
    <div class="container" style="padding:30px 0">
    <style>
        nav svg{
            height:20px;
        }
        nav.hidden{
            display:block !important;
        }

    </style>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contact Messages
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Comment</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp

                                @foreach($contacts as $contact)
                                    <tr>
                                        <th>{{$i++}}</th>
                                        <th>{{$contact->name}}</th>
                                        <th>{{$contact->email}}</th>
                                        <th>{{$contact->comment}}</th>
                                        <th>{{$contact->created_at}} At</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$contacts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
