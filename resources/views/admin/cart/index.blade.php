<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            You Cart
        </h2>
    </x-slot>

    <div class="py-12">
        <div class = 'container'>
            <div class='row'>
               <div class="col-md-8">
                   <div class='card'>
                        <div class='card-header'>
                            สินค้าในตะกร้า
                        </div>
                   </div>
                   <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">amount</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $row)
                        <tr>
                            <td>{{$row->prod_id}}</td>
                            <td>{{$row->amount}}</td>
                            <td>
                                <form action="/mycart/delete/{{$row->id}}" method="post" >
                                    @csrf
                                    @method('DELETE')
                                <input type=submit value ="delete" class = "button is-danger">
                                </form>
                            </td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
               </div>
                
               <div class="col-md-4">
                    <div class='card'>
                        <div class='card-header'>ยอดรวม</div>
                        <div class='card-body'>
                        <form action="/paid/clear" method="post" >
                                    @csrf
                                    @method('DELETE')
                            <input type=submit value ="ยืนยันคำสั่งซื้อ" class = "btn btn-primary">
                            </from>
                        </div>
                   </div>
               </div>
            </dib>
        </div>
    
    </div>
</x-app-layout>
