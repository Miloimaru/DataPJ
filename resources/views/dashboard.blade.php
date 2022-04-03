<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome to Home Cafe
        </h2>
    </x-slot>
    <div class="py-12">
        <div class = 'container'>
            <div class='row'>
               <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">eng</th>
                        <th scope="col">price</th>
                        <th scope="col">amount</th>
                        <th scope="col">type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($homecafe as $row)
                        <tr>
                            <td>{{$row->prod_id}}</td>
                            <td>{{$row->Prodname_tha }}</td>
                            <td>{{$row->Prodname_eng }}</td>
                            <td>{{$row->Amount}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->Prod_type}}</td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
               </div>
                
               <div class="col-md-4">
                    <div class='card'>
                        <div class='card-header'>ยอดรวม</div>
                        <div class='card-body'>
                            <form action="/mycart" method="post">
                                @csrf
                                <label for="Product_id">รหัสสินค้า</label>
                                <input type="text" class="form-control" name="Product_id">
                                @error("Product_id")
                                    <span class="text-danger my-2">{{$message}}</span>
                                    <br>
                                @enderror
                                <label for="Amount">จำนวน</label>
                                <input type="number" class="form-control" name="Amount">
                                @error("Amount")
                                    <span class="text-danger my-2">{{$message}}</span>
                                @enderror
                                <br>
                                <input type=submit value ="ยืนยันคำสั่งซื้อ" class = "btn btn-primary">
                            </from>
                        </div>
                   </div>
               </div>
            </dib>
        </div>
    </div>
</x-app-layout>
